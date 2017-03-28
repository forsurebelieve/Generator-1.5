<html>
	<head>
		<title><?php echo 'Futhark Generator ' . APP_VERSION; ?></title>
		<link rel="stylesheet" href="//futhark.acwpd.com/styles/basic.css" type="text/css">
		<link rel="stylesheet" href="//futhark.acwpd.com/styles/loader.css" type="text/css">
		<link rel="stylesheet" href="//futhark.acwpd.com/styles/sharebutton.css" type="text/css">
		<!-- <link rel="stylesheet" href="https://www.sharebutton.co/fonts/v2/entypo.min.css" type="text/css"> -->
		{{css}}
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
						<a href="/lists">
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
		</div>
		<div class="content" id="content">
			{{body}}
			<spacer></spacer>
		</div>
		<div class="footer">
			<p>Legal Stuff:</p>
			<p>The Futhark Generator is used to create powers that would be fitting to Wildbow's web serial Worm. Classifications, story, characters, and other elements are his by right, we're just playing in his sandbox. For more information, click <a href="/credits">here</a>.</p>
		</div>
		<div id="loader" class="fullscreen hidden">
			<svg class="circular">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="20"/>
			</svg>
		</div>
	</body>
	<!-- <script src="/js/ShareButton.js"></script>
	<script src="/js/analytics.js"></script> -->
	<script src="/js/ajax.js" language="javascript"></script> -->
	{{js}}
</html>