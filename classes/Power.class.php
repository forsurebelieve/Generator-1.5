<?php
	class Power {
		protected $type;
		protected $flavor;
		protected $twist;
		
		public function __construct($build = ['type' => 'Random', 'flavor' => 'Random', 'twist' => ['Poker','RandomValue','RandomSuit']]) {
			$this->type = new PowerType($build['type']);
			$this->flavor = new PowerFlavor($build['flavor']);
			$this->twist = new PowerTwist($build['twist']);
		}
		
		public function getBigImageTable() {
			$output = '<table class="bigImages">' . "\n";
			$output .= '<tr>' . "\n";
			$output .= $this->type->getBigImageCell() . "\n";
			$output .= $this->flavor->getBigImageCell() . "\n";
			$output .= $this->twist->getBigImageCell() . "\n";
			$output .= '</tr>' . "\n";
			$output .= '</table>' . "\n";
			
			return $output;
		}
	
		public function getSmallImageTable() {
			$output = '<table class="smallImages">' . "\n";
			$output .= '<tr>' . "\n";
			$output .= $this->type->getSmallImageCell() . "\n";
			$output .= $this->flavor->getSmallImageCell() . "\n";
			$output .= $this->twist->getSmallImageCell() . "\n";
			$output .= '</tr>' . "\n";
			$output .= '</table>' . "\n";
			
			return $output;
		}
		
		public function getVerboseDescription() {
			$output = '<div class="verboseDescription">' . "\n";
			$output .= $this->type->getVerboseDescription() . "\n";
			$output .= $this->flavor->getVerboseDescription() . "\n";
			$output .= $this->twist->getVerboseDescription() . "\n";
			$output .= '</div>' . "\n";
			$output .= '<a href="/load' 
				. '/' . $this->type
				. '/' . $this->flavor 
				. '/' . $this->twist
				 . '/">Permalink</a>' . "\n";
			
			return $output;
		}
		
		public function getReferenceString() {
			return $this->type . "/" . $this->flavor . "/" . $this->twist;
		}
			
	}