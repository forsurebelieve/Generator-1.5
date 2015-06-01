<?php
	global $site_root;
	
	class PowerFlavor {
		
		private $flavor;
		private $flavorList;
		
		private function array_random_assoc($arr, $num = 1) {
    		$keys = array_keys($arr);
    		shuffle($keys);
    
    		$r = array();
    		for ($i = 0; $i < $num; $i++) {
        		$r[$i] = $arr[$keys[$i]];
    		}
    		return $r;
		}
		
		public function __construct ($target = 'Random') {
			$myList = new DescriptorList;
			$this->flavorList = $myList->Flavor;
			if ($target === 'Random') {
				$this->flavor = $this->array_random_assoc($this->flavorList);
				$this->flavor = $this->flavor[0];
			} else {
				$this->flavor = $this->flavorList[$target];
			}
		}
		
		public function getBigImageCell() {
			$output = "\t\t" . '<td>' . "\n";
			$output .= "\t\t\t" . '<img src="' . $this->flavor['image'] . '"><br />' . "\n";
			$output .= "\t\t\t" . $this->flavor['name'] . '<br />' . "\n";
			$output .= "\t\t\t(" . $this->flavor['flavor'] . ")\n";
			$output .= "\t\t" .  '</td>' . "\n";
			
			return $output;
		}
		
		public function getSmallImageCell() {
			$output = "\t\t" . '<td>' . "\n";
			$output .= "\t\t\t" . '<img class="smallImage" src="' . $this->flavor['image'] . '"><br />' . "\n";
			$output .= "\t\t" .  '</td>' . "\n";
			
			return $output;
		}
		
		public function getVerboseDescription() {
			$output = '<p>You also rolled the <strong>' . $this->flavor['name'] . '</strong> rune! This results in the flavor <strong>' . $this->flavor['flavor'] . '</strong>, which gives a power that ' . $this->flavor['description'] . '. Optionally, if your power requires an element in order to manifest, the element associated with this rune is <strong>' . $this->flavor['element'] . '</strong></p>' . "\n";
	
			return $output;
		}

	}
?>
