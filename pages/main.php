<?php
	global $site_root;
?>

<p>Your Roll: (<a href="<?php echo $site_root; ?>">Roll again?</a>)</p>

<?php
	$power = new Power();

	echo $power->getBigImageTable();
	
	echo $power->getVerboseDescription();
?>
