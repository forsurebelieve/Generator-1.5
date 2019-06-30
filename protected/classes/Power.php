<?php

namespace ACWPD\Futhark;

class Power {
	protected $container;
	private $descriptors;
	const validSelectors = ['type', 'flavor','twist'];
	protected $type;
	protected $flavor;
	protected $twist;
	private $powersDB;

	public function __construct(\Psr\Container\ContainerInterface $container) {
		$this->container = $container;
		$this->loadPowersDB();
	}

	public function loadPowersDB() : void {
		$location = $this->container->get('settings')['powersDB']['location'];
		if (\file_exists($location)) {
			$this->powersDB = \json_decode(\file_get_contents($location),true);
		} else {
			throw new \Exception('Powers DB Not found!', 1);			
		}
	}

	public function withTwist(String $twist = 'random') : self {
		
		if ($twist == 'random') {
			$min = 0;
			$max = \count($this->powersDB['twist'])-1;
			$rand = \mt_rand($min,$max);
			$this->twist[] = \array_slice($this->powersDB['twist'],$rand,1)[0];
		} else {
			$this->twist[] = $this->powersDB['twist'][$twist];
		}
		return $this;
		
	}

	public function withRandomTwist() : self {
		return $this->withTwist('random');
	}

	public function withFlavor(String $flavor = 'random') : self {
		if ($flavor == 'random') {
			$min = 0;
			$max = \count($this->powersDB['flavor'])-1;
			$rand = \mt_rand($min,$max);
			$log = $this->container->get('logger');
			$log->info('Generating Flavor',['$rand' => $rand, 'flavorDB size' => count($this-powersDB['flavor']),'array' => $this->powersDB['flavor'][$rand]]);
			$this->flavor[] = \array_slice($this->powersDB['flavor'],$rand,1)[0];
		} else {
			$this->flavor[] = $this->powersDB['flavor'][$flavor];
		}

		return $this;
	}

	public function withRandomFlavor() : self {
		return $this->withFlavor('random');
	}

	public function withType(String $type = 'random') : self {
		if ($type == 'random') {
			$min = 0;
			$max = \count($this->powersDB['type'])-1;
			$rand = \mt_rand($min,$max);
			$this->type[] = \array_slice($this->powersDB['type'],$rand,1)[0];
		} else {
			$this->type[] = $this->powersDB['type'][$type];
		}
		
		return $this;
	}

	public function withRandomType() : self {
		return $this->withType('random');
	}

	public function with(String $selector, String $choice = 'random') : self {
		
		switch ($selector) {
			case 'type':
				return $this->withType($choice);
				break;

			case 'flavor':
				return $this->withFlavor($choice);
				break;

			case 'twist':
				return $this->withTwist($choice);
				break;
			
			default:
				throw new \Exception('Invalid selector: ' . $selector . ' (must be one of' . \implode('\', \'', self::validSelectors ) .  '\').', 1);
				break;
		}				
	}

	public function withAllData() : self {
		$this->type = $this->powersDB['type'];
		$this->flavor = $this->powersDB['flavor'];
		$this->twist = $this->powersDB['twist'];
		return $this;
	}

	public function getPowerData() : Array {
		return [
			'type' => $this->type,
			'flavor' => $this->flavor,
			'twist' => $this->twist
		];
	}

}