<?php
	global $site_root;
	global $params;
	
	$type = $params[1];
	$flavor = $params[2];
	$twist = [
		substr($params[3],0,strpos($params[3],":")),
		substr($params[3],strpos($params[3],":")+1,(strpos($params[3],"-")-strpos($params[3],":")-1)),
		substr($params[3],strpos($params[3],"-")+1)
	]
?>

<?php
	$build = [
		'type' => $type,
		'flavor' => $flavor,
		'twist' => $twist
		];
	
	$power = new Power($build);

	echo $power->getBigImageTable();
	
	echo $power->getVerboseDescription();
?>
