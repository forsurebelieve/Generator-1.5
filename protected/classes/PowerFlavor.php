<?php

namespace ACWPD\Futhark;

	class PowerFlavor {

		private $flavor;

		public function __toString() {
			return $this->flavor['name'] . ' (' . $this->flavor['flavor'] . ')';
		}

		public function __construct (DescriptorList $myList, $target = null) {
			$this->flavor = $myList->getFlavor($target);
		}

		public function getBigImageCell() {
			$output = "\t\t" . '<div class="flavor" style="background-image:url(/img/runes/' . $this->flavor['image'] . ')">' .  '</div>' . "\n";
			return $output;
		}

		public function getSmallImageCell() {
			$output = "\t\t" . '<div class="flavor" style="background-image:url(/img/runes/' . $this->flavor['image'] . ')">' .  '</div>' . "\n";
			return $output;
		}

		public function getVerboseDescription() {
			$output = '<p>You also rolled the <strong>' . $this->flavor['name'] . '</strong> rune! This results in the flavor <strong>' . $this->flavor['flavor'] . '</strong>, which gives a power that ' . $this->flavor['description'] . '. Optionally, if your power requires an element in order to manifest, the element associated with this rune is <strong>' . $this->flavor['element'] . '</strong></p>' . "\n";

			return $output;
		}

		public function getReferenceString() {
			return $this->flavor['name'];
		}

	}
?>
