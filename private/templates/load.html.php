<?php
extract($include[0]);
unset($include);

$power = new \ACWPD\Futhark\Power(['type' => $type, 'flavor' => $flavor, 'twist' => $twist]);

echo $power->getBigImageTable();
echo $power->getVerboseDescription();