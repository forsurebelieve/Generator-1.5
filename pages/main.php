<p>Your Roll: (<a href="#" onclick="reroll();">Roll again?</a>)</p>

<?php
	$power = new Power();

	echo $power->getBigImageTable();
	
	echo $power->getVerboseDescription();
?>