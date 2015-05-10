<?php
	require_once($serverRoot . 'include/lists.php');
	
	function array_random_assoc($arr, $num = 1) {
    	$keys = array_keys($arr);
    	shuffle($keys);
    
    	$r = array();
    	for ($i = 0; $i < $num; $i++) {
        	$r[$i] = $arr[$keys[$i]];
    	}
    	return $r;
	}
	
	$powerDraw = [];
	$powerDraw['Type'] = array_random_assoc($powerType);
	$powerDraw['Flavor'] = array_random_assoc($powerFlavor);
	$powerDraw['Twist'] = ['suit' => array_random_assoc($powerTwistsSuit), 'value' => array_random_assoc($powerTwistsNumber)];

	$element = $powerDraw['Flavor'][0]['element_name'] === '' ? 'represented by ' . $powerDraw['Flavor'][0]['element'] : $powerDraw['Flavor'][0]['element_name'];

	$draw = [
		'Type' => [
			'name' => $powerDraw['Type'][0]['name'],
			'image' => $powerDraw['Type'][0]['image'],
			'class' => $powerDraw['Type'][0]['class'],
			'description' => $powerDraw['Type'][0]['description']
		],
		'Flavor' => [
			'name' => $powerDraw['Flavor'][0]['name'],
			'image' => $powerDraw['Flavor'][0]['image'],
			'flavor' => $powerDraw['Flavor'][0]['flavor'],
			'element' => $element,
			'description' => $powerDraw['Flavor'][0]['description'] 
		],
		'Twist' => [
			'value' => $powerDraw['Twist']['value'][0]['name'],
			'value_short' => $powerDraw['Twist']['value'][0]['short'],
			'suit' => $powerDraw['Twist']['suit'][0]['name'],
			'suit_image' => $powerDraw['Twist']['suit'][0]['image'],
			'description' =>  $powerDraw['Twist']['value'][0]['description'],
			'direction' =>  $powerDraw['Twist']['suit'][0]['direction'],
			'factor' =>  $powerDraw['Twist']['suit'][0]['factor'],
			'undirection' =>  $powerDraw['Twist']['suit'][0]['undirection'],
			'unfactor' =>  $powerDraw['Twist']['suit'][0]['unfactor']
		]
	];
?>
	
<h1>Using Worm Futhark Generator</h1>
<h2>v1.5.2-PHP build 201505101540</h2>
<p>Your pull:</p>
<table>
	<tr>
		<td><img src="<?php echo $draw['Type']['image']; ?>"></td>
		<td><img src="<?php echo $draw['Flavor']['image']; ?>"></td>
		<td style="font-size: 72pt;"><?php echo $draw['Twist']['value_short']; ?></td>
		<td><img src="<?php echo $draw['Twist']['suit_image']; ?>"></td>
	</tr>
</table>
 
<p>You rolled the <strong><?php echo $draw['Type']['name']; ?></strong> sign! This results in a <strong><?php echo $draw['Type']['class']; ?></strong>-class power. <strong><?php echo $draw['Type']['class']; ?>s</strong> give <?php echo $draw['Type']['description']; ?></p>
	
<p>You also rolled the <strong> <?php echo $draw['Flavor']['name']; ?></strong> rune! This results in the flavor <strong> <?php echo $draw['Flavor']['flavor']; ?></strong>, which gives a  <?php echo $draw['Flavor']['description']; ?>. Optionally, if your power requires an element in order to manifest, the element associated with this rune is <strong> <?php echo $draw['Flavor']['element']; ?></strong></p>
	
<p>Finally, you pulled the <strong> <?php echo $draw['Twist']['value']; ?> of  <?php echo $draw['Twist']['suit']; ?></strong> which  <?php echo $draw['Twist']['description']; ?>. This  <?php echo $draw['Twist']['direction']; ?>  <?php echo $draw['Twist']['factor']; ?>, and  <?php echo $draw['Twist']['undirection']; ?> your choice of  <?php echo $draw['Twist']['unfactor']; ?>.

<p><a href="<?php echo $site_root; ?>">Roll again?</a></p>
