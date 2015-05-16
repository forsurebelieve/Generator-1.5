<?php
	class Card {
		private $sourceDirectory;
		
		
		public function __construct($value, $suit) {
			$sourceDirectory = '/home/public/img/cards';
			
			if (TRUE !== class_exists('Imagick')) { 
        		echo 'Imagick class does not exist.'; 
    		}
			
			$valueImage = new Imagick();
			$valueImage->readImage($this->sourceDirectory . '/card-value-' . $value . '.png');
			
			$suitImage = new Imagick();
			$suitImage->readImage($this->sourceDirectory . '/card-suit' . $suit . '.png');
			
			// Onto the suit, put the value...
			$suitImage->compositeImage($valueImage, Imagick::COMPOSITE_DEFAULT, 0, 0);
			
			header('Content-Type: image/' . $suitImage->getImageFormat());
			echo $suitImage;
		}
	}
?>