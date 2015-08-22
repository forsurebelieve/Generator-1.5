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
			$useTemplate = "template.html.php"					// (string) Which template to use
			$title = "Text for Title Bar"						// (string) Title of the page, to overwrite the default (defined above)
			$useHeader = true; 									// (bool) Include the contents of a <head> for this page 
			$bePretty = true; 									// (bool) Include CSS for this page
			$content = $parser->buildOutput('pages/file.php'); 	// actual page to include
			$useFooter = true; 									// (bool) Render a footer for this page 
			break; 												// to signify the end of the page
		 * 
		 * Leave default at the bottom of the list
		 */
		
// Routing Table
		// Admin panel - add powers, modify text, etc.
		case "admin":
			$useTemplate = "template.html.php";
			$title = "Admin Panel | " . $title;
			$useHeader = true;
			$useHeadBar = true;
			$useNavigation = true;
			$bePretty = true;
			$content = $parser->buildOutput('pages/admin.php');
			$useFooter = true;
			break;
		
		case "submit":
			$useTemplate = "bare.html.php";
			break;
			
		// List of all portions of a power - all Zodiac, Futhark, and Card Values
		case "lists":
		case "list":
			$useTemplate = "template.html.php";
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
			$useTemplate = "template.html.php";
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
			// $useTemplate not included; this route doesn't render a page.
			$name = explode('.', $params[1]);
			$value = $name[0];
			$suit = $name[1];
			$card = new Card($value,$suit);
			exit(0);
			break;
		
		// Generate an arbitrary number of Powers
		case "multi":
		case "multiple":
			$useTemplate = "template.html.php";
			$useHeader = true;
			$useHeadBar = true;
			$useNavigation = true;
			$bePretty = true;
			$content = $parser->buildOutput('pages/multi-roll.php');
			$useFooter = true;
			break;
		
		// Generate a specific Power, based on URL
		case "load":
			$useTemplate = "template.html.php";
			$useHeader = true;
			$useHeadBar = true;
			$useNavigation = true;
			$bePretty = true;
			$content = $parser->buildOutput('pages/load.php');
			$useFooter = true;
			break;
		
		// Generate only the small table of a specific Power, based on URL 
		case "small":
			$useTemplate = "template.html.php";
			$useHeader = false;
			$useHeadBar = false;
			$useNavigation = false;
			$bePretty = false;
			$content = $parser->buildOutput('pages/load.php');
			$useFooter = false;
			break;
			
		// Generate a single, random Power
		default:
			$useTemplate = "template.html.php";
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
		$useTemplate = "bare.html.php";
	}
		
	$header = '';
	$footer = '';
	
	require_once($serverRoot . "templates/" . $useTemplate);
?>