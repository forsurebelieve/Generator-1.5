<?php
	require_once($serverRoot . 'include/lists.php');
?>

<p>All Power Types:</p>
<table>
	<thead>
		<tr>
			<td>Zodiac</td>
			<td>Classification</td>
			<td>Description</td>
		</tr>
	</thead>
	<tbody>
	
<?php 
	foreach ($powerType as $key => $value) {
		echo '<tr>';
		echo '<td>' . $value['name'] . '</td>';
		echo '<td>' . $value['class'] . '</td>';
		echo '<td>' . $value['description'] . '</td>';
		echo '</tr>';
	}
?>
	
	</tbody>
</table>
<hr />
<p>All Power Flavors:</p>
<table>
	<thead>
		<tr>
			<td>Elder Futhark</td>
			<td>Flavor</td>
			<td>Element</td>
			<td>Element example</td>
			<td>Description</td>
		</tr>
	</thead>
	<tbody>
		
<?php 
	foreach ($powerFlavor as $key => $value) {
		echo '<tr>';
		echo '<td>' . $value['name'] . '</td>';
		echo '<td>' . $value['flavor'] . '</td>';
		echo '<td>' . $value['element'] . '</td>';
		echo '<td>' . $value['element_name'] . '</td>';
		echo '<td>' . $value['description'] . '</td>';
		echo '</tr>';
	}
?>
	
	</tbody>
</table>
<hr />
<p>All Power Twists (Card Value):</p>
<table>
	<thead>
		<tr>
			<td>Card Value</td>
			<td>Description</td>
		</tr>
	</thead>
	<tbody>
		
<?php 
	foreach ($powerTwistsNumber as $key => $value) {
		echo '<tr>';
		echo '<td>' . $value['name'] . '</td>';
		echo '<td>' . $value['description'] . '</td>';
		echo '</tr>';
	}
?>
	
	</tbody>
</table>
<hr />
<p>All Power Twists (Suits):</p>
<table>
	<thead>
		<tr>
			<td>Suit / Symbol</td>
			<td>Direction</td>
			<td>Factor</td>
		</tr>
	</thead>
	<tbody>	
	
<?php 
	foreach ($powerTwistsSuit as $key => $value) {
		echo '<tr>';
		echo '<td>' . $value['name'] . '/' . $value['symbol'] . '</td>';
		echo '<td>' . $value['direction'] . '</td>';
		echo '<td>' . $value['factor'] . '</td>';
		echo '</tr>';
	}
?>

	</tbody>
</table>
		