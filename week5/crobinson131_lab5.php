<?php
$arr = array();
$file = fopen("data.txt", "r");

while(!feof($file)){
  $line = fgets($file);
  array_push($arr, $line);
}

for($i = 0; $i < 30; $i++){
  $num = rand(0, sizeOf($arr) - 1);
  echo $arr[$num];
}

 ?>
