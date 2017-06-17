<?php

namespace ACWPD\Futhark;

use Kreait\Firebase\Factory as FBFactory;
use Kreait\Firebase\ServiceAccount as FBServiceAccount;

	class DescriptorList {
		public $Type;
		public $Flavor;
		public $Twist;
		private $parser;
		private $database;
		
		public function __construct() {
			require_once(DOCUMENT_ROOT . '/protected/config.php');

			// $firebase = new \Firebase\FirebaseLib(FIREBASE_DEFAULT_URL,FIREBASE_DEFAULT_TOKEN);
			
			$serviceAccount = FBServiceAccount::fromValue(FIREBASE_SERVICE_ACCOUNT_JSON);

			$firebase = (new FBFactory)
				->withServiceAccount($serviceAccount)
				->withDatabaseUri(FIREBASE_DATABASE_URL)
				->create();

			$this->database = $firebase->getDatabase();


			$twist = $this->loadFromDB('/twist');
			$flavor = $this->loadFromDB('flavor');
			$type = $this->loadFromDB('type');
			
			$this->Flavor = $flavor;
			$this->Type = $type;
			$this->Twist = $twist;
		
			return true;
		}

		private function loadFromDB(String $type = "all") {
			$path = ($type !== "all") ? $type : "/" ;
			$reference = $this->database->getReference($path);
			$snapshot = $reference->getSnapshot();
			return $reference->getValue();
		}

		public function getFlavor($flavor = null) {
			if ( ! is_null($flavor)) {
				return $this->Flavor[$flavor];
			}
			$this->attachParser();
			return $this->parser->getRandomFromArray($this->Flavor);
		}

		public function getType($type = null) {
			if ( ! is_null($type)) {
				return $this->Type[$type];
			}
			$this->attachParser();
			return $this->parser->getRandomFromArray($this->Type);
		}

		public function getTwist($twist = null) {
			if ( ! is_null($twist)) {
				return $this->Twist[$twist];
			}
			$this->attachParser();
			return $this->parser->getRandomFromArray($this->Twist);
		}

		public function getFilteredTwist($filter='') {
			switch ($filter) {
				case 'Poker':
					$return = array_filter($this->Twist, function ($v, $k) {
						$suits = ['Black','Red','Spades','Hearts','Clubs','Diamonds'];
						return in_array($v['suit'],$suits,false);
					}, ARRAY_FILTER_USE_BOTH);
					break;

				case 'Tarot':
					$return = array_filter($this->Twist, function ($v, $k) {
						$suits = ['Major Arcana','Cups','Swords','Wands','Coins'];
						return in_array($v['suit'],$suits,false);
					}, ARRAY_FILTER_USE_BOTH);
					break;

				case null:
					$return = $this->Twist;
					break;

				default:
					return $this->getTwist($filter);
					break;
			}
			$this->attachParser();
			return $this->parser->getRandomFromArray($return);
		}

		

		private function attachParser() {
			if (is_null($this->parser)) {
				$this->parser = new \ACWPD\Helpers\Parser();
				return true;
			}
			return true;
		}

		private function filterTwistBySuit($v, $k) {
			foreach ($pokerSuits as $suit) {
				if ($v==$suit) {
					return true;
				}
			}
			return false;
		}
	}
?>
