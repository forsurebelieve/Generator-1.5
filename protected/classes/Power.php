<?php

namespace ACWPD\Futhark;

	class Power {
		private $descriptors;
		protected $type;
		protected $flavor;
		protected $twist;
		
		public function __construct($build = ['type' => null, 'flavor' => null, 'twist' => 'Poker']) {
			if ( ! isset($build['type'])) {
				$build['type'] = null;
			}
			if ( ! isset($build['flavor'])) {
				$build['flavor'] = null;
			}
			if ( ! isset($build['twist'])) {
				$build['twist'] = null;
			}
			$this->descriptors = new DescriptorList();
			$this->twist = new PowerTwist($this->descriptors, $build['twist']);
			$this->type = new PowerType($this->descriptors, $build['type']);
			$this->flavor = new PowerFlavor($this->descriptors, $build['flavor']);
		}
		
		public function getBigImageTable() {
			$output = '<div class="bigImages">' . "\n";
			$output .= $this->type->getBigImageCell() . "\n";
			$output .= $this->flavor->getBigImageCell() . "\n";
			$output .= $this->twist->getBigImageCell() . "\n";
			$output .= '<div class="typeName">' . $this->type . '</div>' . "\n";
			$output .= '<div class="flavorName">' . $this->flavor . '</div>' . "\n";
			$output .= '<div class="twistName">' . $this->twist . '</div>' . "\n";
			$output .= '<button id="rollType" ic-get-from="/a/roll/type" ic-target="#addedData" ic-replace-target="true" ic-indicator="#type-load">Roll Another</button><i id="type-load" class="lds-dual-ring"></i>' . "\n";
			$output .= '<button id="rollFlavor" ic-get-from="/a/roll/flavor" ic-target="#addedData" ic-replace-target="true" ic-indicator="#flavor-load">Roll Another</button><i id="flavor-load" class="lds-dual-ring"></i>' . "\n";
			$output .= '<button id="rollTwist" ic-get-from="/a/roll/twist" ic-target="#addedData" ic-replace-target="true" ic-indicator="#twist-load">Draw Again</button><i id="twist-load" class="lds-dual-ring"></i>' . "\n";
			$output .= '<div id="moreTypes"></div>' . "\n";
			$output .= '<div id="moreFlavors"></div>' . "\n";
			$output .= '<div id="moreTwists"></div>' . "\n";
			$output .= '</div>' . "\n";
			return $output;
		}
	
		public function getSmallImageTable() {
			$output = '<div class="smallImages" onclick="goToPower(' . "'" . $this->getReferenceString() . "/'" . ')">' . "\n";
			$output .= $this->type->getSmallImageCell() . "\n";
			$output .= $this->flavor->getSmallImageCell() . "\n";
			$output .= $this->twist->getSmallImageCell() . "\n";
			$output .= '</div>' . "\n";
			
			return $output;
		}
		
		public function getVerboseDescription() {
			$output = '<div class="verboseDescription" id="Description">' . "\n";
			$output .= $this->type->getVerboseDescription() . "\n";
			$output .= $this->flavor->getVerboseDescription() . "\n";
			$output .= $this->twist->getVerboseDescription() . "\n";
			$output .= '</div>' . "\n";
			$output .= '<a href="/load/' 
				. implode('/',[$this->type->getReferenceString(),$this->flavor->getReferenceString(),$this->twist->getReferenceString()])
				 . '/">Permalink</a>' . "\n";
			$output .= '<div class="share-button"></div>';
			$output .= '<div id="ref" class="hidden">' . $this->getReferenceString() . '</div>';
			return $output;
		}
		
		public function getReferenceString() {
			return implode('/',[$this->type->getReferenceString(),$this->flavor->getReferenceString(),$this->twist->getReferenceString()]);
		}
			
	}
