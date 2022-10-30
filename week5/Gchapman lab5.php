<?php

  $file = fopen("data.txt", "r");
  $array = array();

  $count=0;
  while($count<=10){
    $line = fgets($file);
    array_push($arr, $Line);
  }

  $x=10;
  while ($x != 0) {
	
    echo $arr[$x];
	$x--;
  }
  
?>