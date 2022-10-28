<?php

//loads the capital city of each state
$capitals = [
	'Virginia' => 'Richmond',
	'Delaware' => 'Dover',
	'North Carolina' => 'Raleigh',
	'Maryland' => 'Annapolis',
	'Nevada' => 'Carson City',
	'Georgia' => 'Atlanta'];
	
//runs through list of states and prints
foreach ($capitals as $state => $capital) {
	echo "The capital city of {$state} is $capital" . "\n";
}
?>
