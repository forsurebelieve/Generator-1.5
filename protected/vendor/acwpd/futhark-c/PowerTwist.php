<?php

namespace ACWPD\Futhark;

	class PowerTwist {
		
		private $twist;
		
		public function __toString() {
			return $this->twist['cardname'];
		}
		
		public function __construct (DescriptorList $myList, $target = null) {
			$this->twist = $myList->getFilteredTwist($target);
		}
		
		public function getBigImageCell() {
			$output = "\t\t" . '<div title="'. $this->twist['cardname'] .'" class="'. (($this->twist['orientation'] === 'Regular') ? '' : 'reversed ') . 'twist" style="background-image:url(/img/cards/' . $this->twist['image'] . ')"></div>' . "\n";
			return $output;
		}
		
		public function getSmallImageCell() {
			$output = "\t\t" . '<div title="'. $this->twist['cardname'] .'" class="'. (($this->twist['orientation'] === 'Regular') ? '' : 'reversed ') . 'twist" style="background-image:url(/img/cards/' . $this->twist['image'] . ')"></div>' . "\n";
			return $output;
		}
		
		public function getVerboseDescription() {
			$output = '<p>' . $this->twist['description'] . '</p>' . "\n";
			return $output;
		}

		public function getReferenceString() {
			return preg_replace('/---/','-',preg_replace('/ /','-',$this->twist['cardname']));
		}
	}
?>