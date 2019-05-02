<?php
	// use a POST command. Response is the name of the path.

?>
<script>
ga('send', {
  hitType: 'event',
  eventCategory: 'Save',
  eventAction: '<?php echo $saveID; ?>'
});
</script>