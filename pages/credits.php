<?php
	$contributors = [
		[
			'name' => 'Wildbow',
			'for' => 'Tons of amazing stuff, including but not limited to being the creative mastermind behind Worm, everything Parahumans, and the power classification system used by this generator',
			'link' => ''
		],
		[
			'name' => 'ughzubat',
			'for' => 'Coordination, images, descriptions, and mechanics and so much more',
			'link' => ''
		],
		[
			'name' => 'TELL_ME_TO_CALM_DOWN',
			'for' => 'Unflipping tables',
			'link' => ''
		],
		[
			'name' => 'DrOlot',
			'for' => 'Tarot Card usage and concepts',
			'link' => ''
		],
		[
			'name' => 'Aaron C',
			'for' => 'Backend code',
			'link' => ''
		]
	]
?>
<h2>Credits</h2>
<p>This is a creative work with many contributors. Special thanks go out to the following, for their efforts:</p>
<ul>
	<?php
		foreach ($contributors as $key) {
			echo '<li>' . $key['name'] . ' for ' . $key['for'] . '</td>.';
		}
	?>
</ul>
