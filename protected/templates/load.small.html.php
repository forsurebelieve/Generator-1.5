<?php
extract($include[0]);
unset($include);
echo '<!-- Twist == ' . $twist . ' -->' . "\n";
// trim everything starting at a trailing slash. This fixes the fact that I have to use ** to match Twist.

$power = new \ACWPD\Futhark\Power(['type' => $type, 'flavor' => $flavor, 'twist' => $twist]);

echo $power->getSmallImageTable();

?>
<script>
gtag('event', 'Roll', {
  'event_category': 'Full',
  'event_label': 'Reroll'
});
</script>