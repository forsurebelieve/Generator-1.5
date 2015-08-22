<html>
	<head>

		<?php
			if ($useHeader) {
				$header = $parser->buildOutput('include/header.php');
				echo $header;
			}
		?>

	</head>
	<body>
		
		<?php
			if ($useHeadBar) {
				$headerBar = $parser->buildOutput('include/headbar.php');
				echo $headerBar;
			}
			
			if ($bePretty) {
				echo '<div class="content" id="content">';
			}

			echo $content;
			
			if ($bePretty) {
				echo '<spacer></spacer>';
				echo '</div>';
			}
			
			if ($useNavigation) {
				$nav = $parser->buildOutput('include/navbar.php');
				echo $nav;
				echo "<div id='hist' class='hist'><span id='endOfHist'>&nbsp;</span></div>";
			}
			
			if ($useFooter) {
				echo '<div class="footer">';
				$footer = $parser->buildOutput('include/footer.php');
				echo $footer;
				echo '</div>';
				echo '<div id="loader" class="fullscreen hidden">';
				echo '<svg class="circular">';
    			echo '<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="20"/>';
  				echo '</svg>';
				echo '</div>';
			}
		?>
		
		
	</body>
</html>