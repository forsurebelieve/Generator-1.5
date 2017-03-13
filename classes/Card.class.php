<?php
	class Card {
		
		private $sourceDirectory = '/home/public/img/cards';
		
		public function __construct($value, $suit) {
			if (!extension_loaded('imagick')) {
				$outputImage = $this->GDConstruct($value,$suit);
				$fmt = image_type_to_mime_type(IMAGETYPE_PNG);
			} else {
				$outputImage = $this->IMagickConstruct($value,$suit);
				$fmt = 'image/' . $outputImage->getImageFormat();
			}
       		
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

		private function GDConstruct($value,$suit) {
			$valueImage = imagecreatefrompng($this->sourceDirectory . '/' . $value . '.png');
			$suitImage = imagecreatefrompng($this->sourceDirectory . '/' . $suit . '.png');
			$size = getimagesize($this->sourceDirectory . '/' . $value . '.png');
			$height = $size[1];
			$width = $size[0];
			imagecopy($valueImage, $suitImage, 0, 0, 0, 0, $width, $height);

			return $valueImage;
		}
	}
?>