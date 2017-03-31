<p>Your Roll: (<a href="#" id="reroll" ic-get-from="/a/roll" ic-target="#content" ic-on-beforeSend="insertSmallImages()">Roll again?</a>)</p>
<?php
$power = new \ACWPD\Futhark\Power(['twist' => 'Tarot']);

echo $power->getBigImageTable();
echo $power->getVerboseDescription();

?>
