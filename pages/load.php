<?php
	global $site_root;
	global $params;
	
	$type = $params[1];
	$flavor = $params[2];
	$twist = [
		substr($params[3],0,strpos($params[3],":")),
		substr($params[3],strpos($params[3],":")+1,(strpos($params[3],"-")-strpos($params[3],":")-1)),
		substr($params[3],strpos($params[3],"-")+1)
	];

	$build = [
		'type' => $type,
		'flavor' => $flavor,
		'twist' => $twist
		];

	if ($params[0] === "small") {
		$power = new ACWPD\Futhark\Power($build);
		echo $power->getsmallImageTable();
	} else {
		$power = new ACWPD\Futhark\Power($build);
		echo $power->getBigImageTable();
		echo $power->getVerboseDescription();
	}
?>
