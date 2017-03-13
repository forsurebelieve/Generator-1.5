<?php
	class PowerTwist {
		private $deck;
		private $twist;
		private $twistList;
		
		private function array_random_assoc($arr, $num = 1) {
    		$keys = array_keys($arr);
    		shuffle($keys);
    
    		$r = array();
    		for ($i = 0; $i < $num; $i++) {
        		$r[$i] = $arr[$keys[$i]];
    		}
    		return $r;
		}
		
		public function __toString() {
			return $this->deck . ':' . $this->twist['Value']['name'] . '-' . $this->twist['Suit']['name'];
		}
		
		public function __construct ($target = ['Poker','RandomValue','RandomSuit']) {
			$myList = new DescriptorList;
			$this->twistList = $myList->Twist;
			
			$target[0] = ucfirst($target[0]);
			$target[1] = ucfirst($target[1]);
			$target[2] = ucfirst($target[2]);
			
			$this->deck = $target[0];
			
			if ($target[1] === 'RandomValue' && $target[2] === 'RandomSuit') {
				if ($target[0] === 'Poker') {
					$this->twist['Suit'] = $this->array_random_assoc($this->twistList['Suit']);
					$this->twist['Value'] = $this->array_random_assoc($this->twistList['Value']);
					$this->twist['Suit'] = $this->twist['Suit'][0];
					$this->twist['Value'] = $this->twist['Value'][0];
					
					$this->twist['image'] = '/card/' . strtolower($this->twist['Value']['short']) . '-' . strtolower($this->twist['Suit']['name'] . '.png');
					$this->twist['name'] = $this->twist['Value']['name'] . ' of ' . $this->twist['Suit']['name'];
				} else {
					$this->twist['Tarot'] = $this->array_random_assoc($this->twistList['Tarot']);
					$this->twist['Tarot'] = $this->twist['Tarot'][0];
				}
			} else {
				if ($target[0] === 'Poker') {
					$this->twist['Value'] = $this->twistList['Value'][$target[1]];
					$this->twist['Suit'] = $this->twistList['Suit'][$target[2]];
					
					$this->twist['image'] = '/card/' . strtolower($this->twist['Value']['short']) . '-' . strtolower($this->twist['Suit']['name']) . '.png';
					$this->twist['name'] = $this->twist['Value']['name'] . ' of ' . $this->twist['Suit']['name'];
				} else {
					$this->twist['Tarot'] = $this->array_random_assoc($this->twistList['Tarot']);
					$this->twist['Tarot'] = $this->twist['Tarot'][0];
				}
			}
			
		}
		
		public function getBigImageCell() {
			$output = "\t\t" . '<td>' . "\n";
			$output .= "\t\t\t" . '<img src="' . $this->twist['image'] . '"><br />' . "\n";
			$output .= "\t\t\t" . $this->twist['name'] . "\n";
			$output .= "\t\t" .  '</td>' . "\n";
			
			return $output;
		}
		
		public function getSmallImageCell() {
			$output = "\t\t" . '<td>' . "\n";
			$output .= "\t\t\t" . '<img class="smallImage" src="' . $this->twist['image'] . '"><br />' . "\n";
			$output .= "\t\t" .  '</td>' . "\n";
			
			return $output;
		}
		
		public function getVerboseDescription() {
			$output = '<p>Finally, you pulled the <strong>' . $this->twist['Value']['name'] . ' of ' . $this->twist['Suit']['name'] . '</strong> which modifies your power so that ' . $this->twist['Value']['description'] . '. Your ' . $this->twist['Suit']['factor'] . ' is ' . $this->twist['Suit']['direction'] . ', but your choice of ' . $this->twist['Suit']['unfactor'] . ' is ' . $this->twist['Suit']['undirection'] . '.' . "\n";
			
			return $output;
		}
	}
?>