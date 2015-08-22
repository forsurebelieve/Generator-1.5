<p>Your Roll: (<a href="#" class="reroll">Roll again?</a>)</p>

<?php
	$power = new Power();

	echo $power->getBigImageTable();
	
	echo $power->getVerboseDescription();
?>