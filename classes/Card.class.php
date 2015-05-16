<?php
	class Card {
		public function __construct($value, $suit) {
			$sourceDirectory = '/home/public/img/cards';
			
			if (TRUE !== class_exists('Imagick')) { 
        		echo 'Imagick class does not exist.'; 
    		}
			
			$valueImage = new Imagick();
			$valueImage->readImage($sourceDirectory . '/' . $value . '.png');
			
			$suitImage = new Imagick();
			$suitImage->readImage($sourceDirectory . '/' . $suit . '.png');
			
			// Onto the suit, put the value...
			$valueImage->compositeImage($suitImage, Imagick::COMPOSITE_OVERLAY, 0, 0);
			
			header('Content-Type: image/' . $valueImage->getImageFormat());
			echo $valueImage;
		}
	}
?>