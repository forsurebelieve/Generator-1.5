<p>Your Roll: (<a href="#" onclick="reroll();">Roll again?</a>)</p>

<?php
	$power = new ACWPD\Futhark\Power();

	echo $power->getBigImageTable();
	
	echo $power->getVerboseDescription();
?>