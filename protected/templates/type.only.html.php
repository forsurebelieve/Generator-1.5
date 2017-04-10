<?php
	$list = new \ACWPD\Futhark\DescriptorList();
	$type = new \ACWPD\Futhark\PowerType($list);

	$image = $type->getBigImageCell();
	$description = $type->getVerboseDescription();
?>
<div id="addedData" style="display: none;">
	<?php echo $image; ?>
	<?php echo $description; ?>
</div>
<script>
moveNewType();
ga('send', {
  hitType: 'event',
  eventCategory: 'newType',
  eventAction: 'click'
});
</script>