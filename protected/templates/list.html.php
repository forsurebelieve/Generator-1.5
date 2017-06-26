<?php

	require_once(DOCUMENT_ROOT . '/protected/config.php');
	
	use Kreait\Firebase\Factory as FBFactory;
	use Kreait\Firebase\ServiceAccount as FBServiceAccount;

	$serviceAccount = FBServiceAccount::fromValue(FIREBASE_SERVICE_ACCOUNT_JSON);
	$firebase = (new FBFactory)
		->withServiceAccount($serviceAccount)
		->withDatabaseUri(FIREBASE_DATABASE_URL)
		->create();
	$database = $firebase->getDatabase();

	$twistRef = $database->getReference('twist');
	$twistSS = $twistRef->getSnapshot();
	$twist = $twistRef->getValue();

	$flavorRef = $database->getReference('flavor');
	$flavorSS = $flavorRef->getSnapshot();
	$flavor = $flavorRef->getValue();

	$typeRef = $database->getReference('type');
	$typeSS = $typeRef->getSnapshot();
	$type= $typeRef->getValue();

?>
<style>
	.image {
		width: 120px;
		height: 200px;
		background-repeat: no-repeat;
		background-size: contain;
		background-position: center center;
	}

	.type {
		width: 100%;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}

	.type .text {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap
	}

	.type .name {
		width: 40%;
		height: 2em;
		font-weight: bold;
		text-align: center;
	}

	.type .class {
		width: 40%;
		height: 2em;
		font-weight: bold;
		text-align: center;
	}

	.type .description {
		width: 100%;
		height: calc(100% - 3em);
		align-self: flex-end;
		display: flex;
		align-items: flex-start;
	}

	.flavor {
		width: 100%;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}

	.flavor .text {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap
	}

	.flavor .name {
		width: 40%;
		height: 2em;
		font-weight: bold;
		text-align: center;
	}

	.flavor .class {
		width: 40%;
		height: 2em;
		font-weight: bold;
		text-align: center;
	}

	.flavor .element {
		width: 40%;
		height: 2em;
		font-weight: bold;
		text-align: center;
	}

	.flavor .elementname {
		width: 40%;
		height: 2em;
		font-weight: bold;
		text-align: center;
	}

	.flavor .flavorname {
		width: 40%;
		height: 2em;
		font-weight: bold;
		text-align: center;
	}

	.flavor .description {
		width: 100%;
		height: calc(100% - 5em);
		align-self: flex-end;
		display: flex;
		align-items: flex-start;
	}


	.twist {
		width: 100%;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}

	.twist .text {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap
	}

	.twist .name {
		width: 30%;
		height: 2em;
		font-weight: bold;
		text-align: center;
	}

	.twist .description {
		width: 100%;
		height: calc(100% - 3em);
		align-self: flex-end;
		display: flex;
		align-items: flex-start;
	}
</style>
<div class='group'>
	<?php foreach ($type as $typeID => $item) : ?>
	<div class='type'>
		<div class='image' style='background-image: url(/img/zodiac/<?php echo $item['image']; ?>)' height='100'></div>
		<div class='text'>
			<div class='name'><?php echo $typeID; ?></div>
			<div class='class'><?php echo $item['class']; ?></div>
			<div class='description'><?php echo $item['description']; ?></div>
		</div>
	</div>
	<?php endforeach; ?>
</div>

<div class='group'>	
	<?php foreach ($flavor as $flavorID => $item) : ?>
	<div class='flavor'>
		<div class='image' style='background-image:url(/img/runes/<?php echo $item['image']; ?>)' height='100'></div>
		<div class="text">
			<div class='name'><?php echo $flavorID; ?></div>
			<div class='element'><?php echo $item['element']; ?></div>
			<div class='elementname'><?php echo $item['elementname']??''; ?></div>
			<div class='flavorname'><?php echo $item['flavor']; ?></div>
			<div class='description'><?php echo $item['description']; ?></div>
		</div>
	</div>
	<?php endforeach; ?>
</div>

<div class='group'>	
	<?php foreach ($twist as $twistID) : ?>
	<div class='twist'>
		<div class='image' style='background-image: url(/img/cards/<?php echo $twistID['image']; ?>' height='100'></div>
		<div class="text">
			<div class='name'><?php echo $twistID['cardname']; ?></div>
			<div class='description'><?php echo $twistID['description']; ?></div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
