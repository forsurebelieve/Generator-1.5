<p>Your pull: (<a href="<?php echo $site_root; ?>">Roll again?</a>)</p>
<?php
	$draw = new Draw();
	
	echo $draw->getBigImageTable();
	echo $draw->getVerboseDescription();
?>
