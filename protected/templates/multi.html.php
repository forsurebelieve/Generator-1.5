<?php
	$power = new \ACWPD\Futhark\Power(['twist' => 'Tarot']);

	echo $power->getBigImageTable();
	echo $power->getVerboseDescription();

	unset($power);
?>
<hr />
<script>
ga('send', {
  hitType: 'event',
  eventCategory: 'MultiRoll',
  eventAction: 'click'
});
</script>