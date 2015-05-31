<?php 
	$site_root = $_SERVER['SERVER_NAME'] . '/';
	$serverRoot = $_SERVER['DOCUMENT_ROOT'] . '/';
	
	spl_autoload_register(function ($class) {
		global $serverRoot;
		require_once $serverRoot . 'classes/' . $class . '.class.php';
	});
	
	//session_start();
	//require_once ($serverRoot . 'include/connections.php');

	$parser = new Parser;

	$params = $parser->getParameters($_SERVER['REQUEST_URI']);

	$title = 'Futhark Power Generator 1.5.4';
	
	/*
	 * Rudmentary controller. I should get / make someting better
	 * .. but I'm not going to right now.
	 */
	switch ($params[0]) {
		/*
		 * $params is everything past the first / in the URL
		 * Use the following format to control where each request goes:
		 * 
		 * 'NameOfTheParam': // www.example.com/NameOfTheParam
			$useHeader = true; // (bool) Include the contents of a <head> for this page 
			$bePretty = true; // (bool) Include CSS for this page
			$content = $parser->buildOutput('pages/file.php'); // actual page to include
			$useFooter = true; // (bool) Render a footer for this page 
			break; // to signify the end of the page
		 * 
		 * Leave default at the bottom of the list
		 */
		case "lists":
			$useHeader = true;
			$useHeadBar = true;
			$useNavigation = true;
			$bePretty = true;
			$content = $parser->buildOutput('pages/allitems.php');
			$useFooter = true;
			break;
		
		case "credit":
		case "credits":
		case "legal":
		case "license":
			$useHeader = true;
			$useHeadBar = true;
			$useNavigation = true;
			$bePretty = true;
			$content = $parser->buildOutput('pages/credits.php');
			$useFooter = true;
			break;
			
		case "card":
		case "cards":
			$name = explode('.', $params[1]);
			$value = $name[0];
			$suit = $name[1];
			$card = new Card($value,$suit);
			exit(0);
			break;
		
		default:
			$useHeader = true;
			$useHeadBar = true;
			$useNavigation = true;
			$bePretty = true;
			$content = $parser->buildOutput('pages/main.php');
			$useFooter = true;
			break;
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
			
			if ($useNavigation) {
				$nav = $parser->buildOutput('include/navbar.php');
				echo $nav;
			}
			
			if ($bePretty) {
				echo '<div class="content">';
			}

			echo $content;
			
			if ($bePretty) {
				echo '</div>';
			}
			
			if ($useFooter) {
				echo '<div class="footer">';
				$footer = $parser->buildOutput('include/footer.php');
				echo $footer;
				echo '</div>';
			}
		?>
	</body>
</html>