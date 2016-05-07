<?php
	class Card {
		
		private $sourceDirectory = '/home/public/img/cards';
		
		public function __construct($value, $suit) {
					
			if (class_exists('Imagick')) { 
        		$outputImage = $this->IMagickConstruct($value,$suit);
				$fmt = 'image/' . $outputImage->getImageFormat();
    		} elseif (class_exists('gd')) {
				$outputImage['img'] = $this->GDConstruct($value, $suit);
				$fmt = $outputImage['fmt'];
			} else {
				die('No image libraries installed!');
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
		
		private function GDConstruct($value, $suit) {
			$valueImage = imagecreatefrompng($this->sourceDirectory . '/' . $suit . '.png');
			$suitImage = imagecreatefrompng($this-sourceDirectory . '/' . $value . '.png');
			$imageData = getimagesize($suitImage);
			imagecopymerge($suitImage, $valueImage, 0, 0, 0, 0, $imageData[0], $imageData[1], 100);
			
			$data = [
				'img' => $suitImage,
				'fmt' => $imageData['mime']
			];
			
			return $suitImage;
		}
	}
?>