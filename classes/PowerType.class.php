<?php
	global $site_root;
	
	class PowerType {
		
		private $type;
		private $typeList;
		
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
			return $this->type['name'];
		}
		
		public function __construct ($target = 'Random') {
			$myList = new DescriptorList;
			$this->typeList = $myList->Type;
			
			$target = ucfirst($target);
			
			if ($target === 'Random') {
				$this->type = $this->array_random_assoc($this->typeList);
				$this->type = $this->type[0];
			} else {
				$this->type = $this->typeList[$target];
			}
			
		}
		
		public function getBigImageCell() {
			$output = "\t\t" . '<td>' . "\n";
			$output .= "\t\t\t" . '<img src="' . $this->type['image'] . '"><br />' . "\n";
			$output .= "\t\t\t" . $this->type['name'] . '<br />' . "\n";
			$output .= "\t\t\t(" . $this->type['class'] . ")\n";
			$output .= "\t\t" .  '</td>' . "\n";
			
			return $output;
		}
		
		public function getSmallImageCell() {
			$output = "\t\t" . '<td>' . "\n";
			$output .= "\t\t\t" . '<img class="smallImage" src="' . $this->type['image'] . '"><br />' . "\n";
			$output .= "\t\t" .  '</td>' . "\n";
			
			return $output;
		}
		
		public function getVerboseDescription() {
			$output = '<p>You rolled the <strong>' . $this->type['name'] . '</strong> sign! This results in a <strong>' . $this->type['class'] . '</strong>-class power. <strong>' . $this->type['class'] . 's</strong> have ' . $this->type['description'] . '.</p>' . "\n";			
			return $output;
		}

	}
?>
