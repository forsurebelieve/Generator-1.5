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
	
	$fullPage = true;
	
	/*
	 * Rudmentary controller. I should get / make someting better
	 * .. but I'm not going to right now.
	 */
	switch ($params[0]) {
		/*
		 * $params is everything past the first / in the URL
		 * Use the following format to control where each request goes:
		 * 
		 * 'NameOfTheParam': 	// www.example.com/NameOfTheParam/SecondLayer/Third/Etc 
			$title = $title;	// The title of the page. If omitted, assumes this. 
			$bePretty = true; 	// (bool) Include CSS and Headers for this page
			$content = 'file'; 	// actual page to include; must reference a file matching path: 'pages/file.php' 
			$gaCookie = '_name' // what to call this page in Google Analytics
			break; 				// to signify the end of the page
		 * 
		 * Leave default at the bottom of the list
		 */
		
// Routing Table
		// List of all portions of a power - all Zodiac, Futhark, and Card Values
			
		// Generate an image of a card, and return as .png
		// TODO: Extract this to somewhere else. But where? And How? Issue #18
		case "card":
		case "poker":
			$name = explode('.', $params[1]);
			$value = $name[0];
			$suit = $name[1];
			$card = new Card($value,$suit);
			exit(0);
			break;		
		
		case "list":
			$title = "All Items | " . $title;
			$bePretty = true;
			$content = "allitems.php";
			$gaCookie = "_list";
			break;
		
		// Credits and legal stuff
		case "legal":
			$title = "Credits | " . $title;
			$bePretty = true;
			$content = "credits.php";
			$gaCookie = "_legal";
			break;
		
		
		// Generate an arbitrary number of Powers
		case "multi":
			$bePretty = true;
			$content = "multi-roll";
			$gaCookie = "_multi";
			break;
		
		// Generate a specific Power, based on URL
		case "load":
			$bePretty = true;
			$content = "load.php";
			$gaCookie = "_load";
			break;
		
		// Generate only the small table of a specific Power, based on URL 
		case "small":
			$bePretty = false;
			$content = $parser->buildOutput('pages/load.php');
			// $gaCookie not defined, because this shouldn't ever load a ga tracker
			break;
			
		// Generate a single, random Power
		default:
			$bePretty = true;
			$content = "main.php";
			$gaCookie = "_main";
			break;
		}
	
	// Override to allow for a "raw" (not pretty) version of the page
	if ($params[count($params)-1] === "raw") {
		$fullPage = false; // removes the parts that make this a full page
		$bePretty = false;
		// $content not defined because this is an override
		$gaCookie = "_reroll";
	}
		
	$header = '';
	$footer = '';
	
?>
<?php if ($fullPage === true): ?>
<html>
	<head>

		<?php
			if ($bePretty) {
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
			if ($bePretty) {
				$headerBar = $parser->buildOutput('include/headbar.php');
				echo $headerBar;
			}
			
			if ($bePretty) {
				echo '<div class="content" id="content">';
			}
?>
<?php endif; ?>
<?php
			$content = $parser->buildOutput('include/' . $content . '.php');
			echo $content;

			if ($bePretty) {
				echo '<spacer></spacer>';
				echo '</div>';
			}
?>
<?php if ($fullPage === true): ?>
<?php
			if ($bePretty) {
				$nav = $parser->buildOutput('include/navbar.php');
				echo $nav;
				echo "<div id='hist' class='hist'><span id='endOfHist'>&nbsp;</span></div>";
			}
			
			if ($bePretty) {
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
<?php endif; ?>
