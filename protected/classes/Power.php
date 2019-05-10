<?php

use Psr\Container\ContainerInterface;
use Slim\Http\Response;
use Kreait\Firebase\Factory as FBFactory;
use Kreait\Firebase\ServiceAccount as FBServiceAccount;

namespace ACWPD\Futhark;

class Power {
	protected $container;
	private $descriptors;
	protected $type;
	protected $flavor;
	protected $twist;
	private $powersDB;

	public function __construct(ContainerInterface $container) {
		$this->container = $container;
		$this->loadPowersDB();
	}

	private function loadPowersDB() : void {
		$location = $this->container->get('settings')['powersDB']['location'];
		if (\file_exists($location)) {
			$this->powersDB = \json_decode(\file_get_contents($location));
		} else {
			throw new \Exception('Powers DB Not found!', 1);			
		}
	}

	public function withTwist(String $twist = 'random') : self {
		if ($twist == 'random') {
			$min = 0;
			$max = \count($this->powersDB['twist']);
			$rand = \mt_rand($min,$max);
			$this->twist[] = \array_slice($this->powersDB['twist'],$rand,1);
		} else {
			$this->twist[] = $this->powersDB['twist'][$twist];
		}
		
		return self;
	}

	public function withRandomTwist() : self {
		return $this->withTwist('random');
	}

	public function withFlavor(String $flavor = 'random') : self {
		if ($flavor == 'random') {
			$min = 0;
			$max = \count($this->powersDB['flavor']);
			$rand = \mt_rand($min,$max);
			$this->flavor[] = \array_slice($this->powersDB['flavor'],$rand,1);
		} else {
			$this->flavor[] = $this->powersDB['flavor'][$flavor];
		}

		return self;
	}

	public function withRandomFlavor() : self {
		return $this->withFlavor('random');
	}

	public function withType(String $type = 'random') : self {
		if ($type == 'random') {
			$min = 0;
			$max = \count($this->powersDB['type']);
			$rand = \mt_rand($min,$max);
			$this->type[] = \array_slice($this->powersDB['type'],$rand,1);
		} else {
			$this->type[] = $this->powersDB['type'][$type];
		}
		
		return self;
	}

	public function withRandomType() : self {
		return $this->withType('random');
	}

	public function with(String $selector, String $choice = 'random') : self {
		switch (\strtolower($selector)) {
			case 'type':
				return $this->withType($choice);
				break;

			case 'twist':
				return $this->withTwist($choice);
				break;
			
			case 'flavor':
				return $this->withFlavor($choice);
				break;
			
			default:
				throw new \Exception('Invalid selector: ' . $selector . ' (must be one of Type, Flavor, Twist).', 1);				
				break;
		}
	}

	public function withAllData() : self {
		$this->type = $this->powersDB['type'];
		$this->flavor = $this->powersDB['flavor'];
		$this->twist = $this->powersDB['twist'];
		return self;
	}

	public function getPowerData() : Array {
		return [
			'type' => $this->type,
			'flavor' => $this->flavor,
			'twist' => $this->twist
		];
	}

}