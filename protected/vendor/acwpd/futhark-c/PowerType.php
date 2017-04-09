<?php

namespace ACWPD\Futhark;
	
	class PowerType {
		
		private $type;
		
		public function __toString() {
			return $this->type['name'] . ' (' . $this->type['class'] . ')';
		}
		
		public function __construct (DescriptorList $myList, $target = null) {
			$this->type = $myList->getType($target);
		}
		
		public function getBigImageCell() {
			$output = "\t\t" . '<div class="type" style="background-image:url(/img/zodiac/' . $this->type['image'] . '"></div>' . "\n";
			return $output;
		}
		
		public function getSmallImageCell() {
			$output = "\t\t" . '<div class="type" style="background-image:url(/img/zodiac/' . $this->type['image'] . '"></div>' . "\n";			
			return $output;
		}
		
		public function getVerboseDescription() {
			$output = '<p>You rolled the <strong>' . $this->type['name'] . '</strong> sign! This results in a <strong>' . $this->type['class'] . '</strong>-class power. <strong>' . $this->type['class'] . 's</strong> have ' . $this->type['description'] . '.</p>' . "\n";			
			return $output;
		}

		public function getReferenceString() {
			return $this->type['name'];
		}

	}
?>
