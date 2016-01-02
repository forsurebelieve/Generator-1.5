<?php
	class Card {
		public function __construct($value, $suit) {
			$sourceDirectory = '/home/public/img/cards';
			
			$valueImage = imagecreatefrompng($sourceDirectory . '/' . $value . '.png');
			
			$suitImage = imagecreatefrompng($sourceDirectory . '/' . $suit . '.png');
			
			// Merge the value onto the suit
            if (imagecopymerge($suitImage, $valueImage,0,0,0,0,67,100,100)) {
                if(imagetypes() & IMG_GIF) {
                    header('Content-Type: image/gif');
                    imagegif($im);
                } elseif(imagetypes() & IMG_PNG)  {
                    header('Content-Type: image/png');
                    imagepng($im);
                } 
            
                imagedestroy($valueImage);
                imagedestroy($suitImage);
            
            } else {
                imagedestroy($valueImage);
                imagedestroy($suitImage);
                
                $im = imagecreate(67,100);
                
                $bg = imagecolorallocate($im, 255, 255, 255);
                $black = imagecolorallocate($im, 0, 0, 0);

                // prints a black "P" in the top left corner
                imagechar($im, 1, 0, 0,'!', $black);
                
                header('Content-Type: image/gif');
                imagegif($im);
                
                
            }
		}
	}
?>