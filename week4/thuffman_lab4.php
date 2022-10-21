<?php
$arr = array();
for($i = 0; $i <= 100; $i++){
  array_push($arr, $i);
}

sqr($arr);

foreach($arr as $i){
  echo strval($i) . "\n";
}


function sqr(&$arr){
  foreach($arr as $i){
    $arr[$i] = $i * $i;
  }
}