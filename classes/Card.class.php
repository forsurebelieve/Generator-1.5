<?php
	class Card {
		
		private $sourceDirectory = '/home/public/img/cards';
		
		public function __construct($value, $suit) {
       		$outputImage = $this->IMagickConstruct($value,$suit);
			$fmt = 'image/' . $outputImage->getImageFormat();
			
			header('Content-Type: ' . $fmt);
			echo $outputImage;
		}
		
		private function IMagickConstruct($value, $suit) {
			$valueImage = new Imagick();
			$valueImage->readImage($this->sourceDirectory . '/' . $value . '.png');
			
			$suitImage = new Imagick();
			$suitImage->readImage($this->sourceDirectory . '/' . $suit . '.png');
			
			// Onto the suit, put the value...
			$valueImage->compositeImage($suitImage, Imagick::COMPOSITE_OVERLAY, 0, 0);
			
			return $valueImage;
		}
	}
?>