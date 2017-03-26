<?php
	require_once(DOCUMENT_ROOT . '/private/config.php');

	$firebase = new \Firebase\FirebaseLib(FIREBASE_DEFAULT_URL,FIREBASE_DEFAULT_TOKEN);

	$twist = json_decode($firebase->get('twist'),true);
	$flavor = json_decode($firebase->get('flavor'),true);
	$type = json_decode($firebase->get('type'),true);

?>

<div class='group'>	
	<?php foreach ($twist as $twistID) : ?>
	<div class='twist'>
		<div class='image'><img src="/img/cards/<?php echo $twistID['image']; ?>" height="100"></div>
		<div class='name'><?php echo $twistID['cardname']; ?></div>
		<div class='description'><?php echo $twistID['description']; ?></div>
	</div>
	<?php endforeach; ?>
</div>

<div class='group'>	
	<?php foreach ($flavor as $flavorID => $item) : ?>
	<div class='twist'>
		<div class='image'><img src="/img/<?php echo $item['image']; ?>" height="100"></div>
		<div class='name'><?php echo $flavorID; ?></div>
		<div class='element'><?php echo $item['element']; ?></div>
		<div class='elementname'><?php echo $item['elementname']??''; ?></div>
		<div class='flavor'><?php echo $item['flavor']; ?></div>
		<div class='description'><?php echo $item['description']; ?></div>
	</div>
	<?php endforeach; ?>
</div>

<div class='group'>
	<?php foreach ($type as $typeID => $item) : ?>
	<div class='twist'>
		<div class='image'><img src="/img/<?php echo $item['image']; ?>" height="100"></div>
		<div class='name'><?php echo $typeID; ?></div>
		<div class='class'><?php echo $item['class']; ?></div>
		<div class='description'><?php echo $item['description']; ?></div>
	</div>
	<?php endforeach; ?>
</div>