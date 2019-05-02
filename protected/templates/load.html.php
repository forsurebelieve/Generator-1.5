<?php
extract($include[0]);
unset($include);
$twist = substr($twist,0,strpos($twist,'/')); 
// trim everything starting at a trailing slash. This fixes the fact that I have to use ** to match Twist.
$power = new \ACWPD\Futhark\Power(['type' => $type, 'flavor' => $flavor, 'twist' => $twist]);

echo $power->getBigImageTable();
echo $power->getVerboseDescription();

?>

<script>
ga('send', {
  hitType: 'event',
  eventCategory: 'Load',
  eventAction: '<?php echo implode(":",[$type,$flavor,$twist]);?>'
});
</script>