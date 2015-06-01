<?php
	global $site_root;
	global $params;
	
	if ($params[1] === "" || $params <= 1) {
		$toRoll = 1;
	} else {
		$toRoll = $params[1];
	}
	
	$out = '<p>Here are your ' . $toRoll . ' randomly generated rolls:</p>' . "\n";
	$nav = '<div class="mininav">' . "\n";
	for ($i = 0; $i < $toRoll; $i++) {
		$i >= 1 ? $nav .= ' | ' : $nav .= ''; 
		$nav .= '<a href="#power_' . ($i +1) . '"> Power ' . ($i +1) . '</a>';  
		
		$power = new Power();
		$out .= '<a name="power_' . ($i + 1) . '"></a>' . "\n";
		$out .= $power->getBigImageTable();
		$out .= $power->getVerboseDescription();
		$out .= "\n" . '<hr />' . "\n";
	}
	
	echo $nav . "\n";
	echo $out;
?>