<p>Your Roll: (<a href="#" onclick="reroll();">Roll again?</a>)</p>
<?php
$power = new \ACWPD\Futhark\Power(['twist' => 'Tarot']);

echo $power->getBigImageTable();
echo $power->getVerboseDescription();