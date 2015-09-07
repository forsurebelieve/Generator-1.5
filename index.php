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
			$gaCookie = "_list";
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
			$gaCookie = "_legal";
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
			$gaCookie = "_multi";
			break;
		
		// Generate a specific Power, based on URL
		case "load":
			$useHeader = true;
			$useHeadBar = true;
			$useNavigation = true;
			$bePretty = true;
			$content = $parser->buildOutput('pages/load.php');
			$useFooter = true;
			$gaCookie = "_load";
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
			$gaCookie = "main";
			break;
		}
	
	// Override to allow for a "raw" (not pretty) version of the page
	if ($params[count($params)-1] === "raw") {
		$useHeader = false;
		$useHeadBar = false;
		$useNavigation = false;
		$bePretty = false;
		$useFooter = false;
		$gaCookie = "_reroll";
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
		<script src="js/analytics.js" />
		<script>
			var gaCookie = '<?php echo $gaCookie; ?>';
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  			ga('create', gaTag, 'auto');
			ga('require', 'linkid', {
				'cookieName': gaCookie,
				'duration': 5,
				'levels': 5});
			ga('send', 'pageview');
		</script>
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