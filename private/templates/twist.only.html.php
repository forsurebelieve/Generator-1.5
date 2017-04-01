<?php
	$list = new \ACWPD\Futhark\DescriptorList();
	$twist = new \ACWPD\Futhark\PowerTwist($list,'Tarot');

	$image = $twist->getBigImageCell();
	$description = $twist->getVerboseDescription();
?>
<div id="addedData" style="display: none;">
	<?php echo $image; ?>
	<?php echo $description; ?>
</div>
<script>
moveNewTwist();
</script>