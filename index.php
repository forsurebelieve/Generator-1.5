<?php 
	$site_root = 'http://' . $_SERVER['SERVER_NAME'];
	$serverRoot = $_SERVER['DOCUMENT_ROOT'] . '/';
	
	$version = 'v1.5.5-beta';
	
	spl_autoload_register(function ($class) {
		global $serverRoot;
		require_once $serverRoot . 'classes/' . $class . '.class.php';
	});
	
	//session_start();
	//require_once ($serverRoot . 'include/connections.php');

	$parser = new Parser;

	$params = $parser->getParameters($_SERVER['REQUEST_URI']);
	
	$title = 'Futhark Power Generator' . $version;
	
	/*
	 * Rudmentary controller. I should get / make someting better
	 * .. but I'm not going to right now.
	 */
	switch ($params[0]) {
		/*
		 * $params is everything past the first / in the URL
		 * Use the following format to control where each request goes:
		 * 
		 * 'NameOfTheParam': 									// www.example.com/NameOfTheParam/SecondLayer/Third/Etc
			$useHeader = true; 									// (bool) Include the contents of a <head> for this page 
			$bePretty = true; 									// (bool) Include CSS for this page
			$content = $parser->buildOutput('pages/file.php'); 	// actual page to include
			$useFooter = true; 									// (bool) Render a footer for this page 
			break; 												// to signify the end of the page
		 * 
		 * Leave default at the bottom of the list
		 */
		
// Routing Table
		// List of all portions of a power - all Zodiac, Futhark, and Card Values
		case "lists":
		case "list":
			$title = "All Items | " . $title;
			$useHeader = true;
			$useHeadBar = true;
			$useNavigation = true;
			$bePretty = true;
			$content = $parser->buildOutput('pages/allitems.php');
			$useFooter = true;
			break;
		
		// Credits and legal stuff
		case "credit":
		case "credits":
		case "legal":
		case "license":
			$title = "Credits | " . $title;
			$useHeader = true;
			$useHeadBar = true;
			$useNavigation = true;
			$bePretty = true;
			$content = $parser->buildOutput('pages/credits.php');
			$useFooter = true;
			break;
			
		// Generate an image of a card, and return as .png
		case "card":
		case "cards":
		case "poker":
			$name = explode('.', $params[1]);
			$value = $name[0];
			$suit = $name[1];
			$card = new Card($value,$suit);
			exit(0);
			break;
		
		// Generate an arbitrary number of Powers
		case "multi":
		case "multiple":
			$useHeader = true;
			$useHeadBar = true;
			$useNavigation = true;
			$bePretty = true;
			$content = $parser->buildOutput('pages/multi-roll.php');
			$useFooter = true;
			break;
		
		// Generate a specific Power, based on URL
		case "load":
			$useHeader = true;
			$useHeadBar = true;
			$useNavigation = true;
			$bePretty = true;
			$content = $parser->buildOutput('pages/load.php');
			$useFooter = true;
			break;
		
		// Generate only the small table of a specific Power, based on URL 
		case "small":
			$useHeader = false;
			$useHeadBar = false;
			$useNavigation = false;
			$bePretty = false;
			$content = $parser->buildOutput('pages/load.php');
			$useFooter = false;
			break;
			
		// Generate a single, random Power
		default:
			$useHeader = true;
			$useHeadBar = true;
			$useNavigation = true;
			$bePretty = true;
			$content = $parser->buildOutput('pages/main.php');
			$useFooter = true;
			break;
		}
	
	// Override to allow for a "raw" (not pretty) version of the page
	if ($params[count($params)-1] === "raw") {
		$useHeader = false;
		$useHeadBar = false;
		$useNavigation = false;
		$bePretty = false;
		$useFooter = false;
	}
		
	$header = '';
	$footer = '';
	
?>
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