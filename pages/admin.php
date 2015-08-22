<?php
	global $site_root;
	global $serverRoot;
	require_once($serverRoot . "include/connections.php");
?>
<p>Add to database</p>
<form action="/submit" method="POST" id="Zodiac" name="Zodiac">
	<label class="above">
		Zodiac Sign Name
		<input type="text" id="zodiac-sign" class="single-line" placeholder="Sign name" />
	</label>
	<label class="above">
		Zodiac Sign Image
		<input type="url" id="zodiac-url" class="single-line" placeholder="http://" />
	</label>
	<label class="above">
		Zodiac Classification Name
		<input type="text" id="zodiac-classification" class="single-line" placeholder="Classification name" />
	</label>
	<label class="to-left">
		Finish this sentance: "Capes of this classification have ..." 
		<textarea id="zodiac-description" class="multi-line" rows="3">Description</textarea>
	</label>
	<input type="submit" value="Add" class="submit-button" />
</form>
