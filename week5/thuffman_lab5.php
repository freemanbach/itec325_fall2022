<?php

  $file = fopen("data.txt", "r");
  $arr = array();
  while(!feof($file)){
    $line = fgets($file);
    array_push($arr, $line);
  }
  for($i = 0; $i < 30; $i++){
    $j = rand(0, count($arr));
    echo $arr[$j];
  }