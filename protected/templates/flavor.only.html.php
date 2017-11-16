<?php
	$list = new \ACWPD\Futhark\DescriptorList();
	$flavor = new \ACWPD\Futhark\PowerFlavor($list);
?>
<div id="addedData" style="display: none;">
	<?php echo $flavor->getBigImageCell(); ?>
	<?php echo $flavor->getVerboseDescription(); ?>
</div>
<script>
moveNewFlavor();
ga('send', {
  hitType: 'event',
  eventCategory: 'newFlavor',
  eventAction: 'click'
});
</script>
