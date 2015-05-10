<?php
	require_once($serverRoot . 'include/lists.php');
	
	function array_random_assoc($arr, $num = 1) {
    	$keys = array_keys($arr);
    	shuffle($keys);
    
    	$r = array();
    	for ($i = 0; $i < $num; $i++) {
        	$r[$i] = $arr[$keys[$i]];
    	}
    	return $r;
	}
	
	$powerDraw = [];
	$powerDraw['Type'] = array_random_assoc($powerType);
	$powerDraw['Flavor'] = array_random_assoc($powerFlavor);
	$powerDraw['Twist'] = ['suit' => array_random_assoc($powerTwistsSuit), 'value' => array_random_assoc($powerTwistsNumber)];
	
	echo '<h1>Using Worm Futhark Generator</h1>' . "\n" . '<h2>v1.5.2-PHP build 201505091821</h2>' . "\n";
	
	echo '<p>You rolled the <strong>' . $powerDraw['Type'][0]['name'] . '</strong> sign! This results in a <strong>' . $powerDraw['Type'][0]['class'] . '</strong>-class power. <strong>' . $powerDraw['Type'][0]['class'] . 's</strong> give ' . $powerDraw['Type'][0]['description'] . '</p>';
	
	echo '<p>You also rolled the <strong>' . $powerDraw['Flavor'][0]['name'] . '</strong> rune! This results in the flavor <strong>' . $powerDraw['Flavor'][0]['flavor'] . '</strong>, which gives a ' . $powerDraw['Flavor'][0]['description'] . '.</p>';
	
	echo '<p>Additionally, you pulled the </strong>' . $powerDraw['Twist']['value'][0]['name'] . ' of ' . $powerDraw['Twist']['suit'][0]['name'] . '</strong> which ' . . $powerDraw['Twist']['value'][0]['description'] . '. This ' . $powerDraw['Twist']['suit'][0]['direction'] . ' ' . $powerDraw['Twist']['suit'][0]['factor'] . ', and ' . $powerDraw['Twist']['suit'][0]['undirection'] . ' your choice of ' . $powerDraw['Twist']['suit'][0]['unfactor'];
?>	