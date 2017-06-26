<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?php echo 'Futhark Generator ' . APP_VERSION; ?></title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="/css/basic.css" type="text/css">
		<link rel="stylesheet" href="/css/loader.css" type="text/css">
		<link rel="stylesheet" href="/css/sharebutton.css" type="text/css">
		<!-- <link rel="stylesheet" href="https://www.sharebutton.co/fonts/v2/entypo.min.css" type="text/css"> -->
		{{css}}
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		</script>
		<script src="/js/analytics.js"></script>

	</head>
	<body>
		<div class='headBar'>
			<h1>Futhark Generator</h1>
			<h2><?php echo APP_VERSION; ?></h2>
		</div>
		<div class='navbar'>
			<div class="navgroup">
				<p><strong>Pages here</strong></p>
				<ul>
					<li>
						<a href="/">
							Roll them bones!
						</a>
					</li>
					<li>
						<a href="/list">
							See all combinations
						</a>
					</li>
					<li>
						<a href="/donate">
							Help keep the site going
						</a>
					</li>
				</ul>
			</div>
			<div class="navgroup">
				<p><strong>Pages elsewhere</strong></p>
				<ul>
					<li>
						<a href="http://www.reddit.com/r/FutharkGenerator/">
							/r/FutharkGenerator
						</a>
					</li>
					<li>
						<a href="http://www.reddit.com/r/FutharkGenerator/comments/35fcg7/php_futhark_generator/">
							Feedback on reddit
						</a>
					</li>
					<li>
						<a href="https://github.com/farfromunique/Generator-1.5/issues/new">
							Feedback on GitHub
						</a>
					</li>
				</ul>
			</div>
			<div class="navgroup">
				Have you heard of <a href="http://parahumans.wordpress.com/">Worm</a>?
				<br />If not, please <a href="http://www.reddit.com/r/FutharkGenerator/comments/35kilh/if_you_havent_read_worm_read_me_first/">read me first!</a>
			</div>
			<div id='hist' class='hist'>
				<span id='endOfHist'>&nbsp;</span>
			</div>
		</div>
		<div class="content" id="content">
			{{body}}
			<spacer></spacer>
		</div>
		<div id="addedData" style="display: none;"></div>
		<div class="footer">
			<p>Legal Stuff:</p>
			<p>The Futhark Generator is used to create powers that would be fitting to Wildbow's web serial Worm. Classifications, story, characters, and other elements are his by right, we're just playing in his sandbox. For more information, click <a href="/credits">here</a>.</p>
		</div>
		<div id="loader" class="fullscreen" style="display:none;">
			<svg class="circular">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="20"/>
			</svg>
		</div>
	</body>
	<!-- <script src="/js/ShareButton.js"></script>
	<script src="/js/analytics.js"></script> -->
    <script src="/js/jquery-3.2.0.js"></script>
	<script src="/js/jquery-migrate-3.0.0.js"></script>
	<script src="/js/intercooler-1.1.1.min.js"></script>
	<script src="/js/ajax.js"></script>
    {{js}}
</html>
