<?php
	$list = new \ACWPD\Futhark\DescriptorList();
	$flavor = new \ACWPD\Futhark\PowerFlavor($list);

	$image = $flavor->getBigImageCell();
	$description = $flavor->getVerboseDescription();
?>
<div id="addedData" style="display: none;">
	<?php echo $image; ?>
	<?php echo $description; ?>
</div>
<script>
moveNewFlavor();
</script>