<?php
/*
* @Author Blake Conner
* @Email  biconner@radford.edu
*/

$file = fopen("data.txt", "r");
$content = fread($file, filesize("data.txt"));
$arr = explode("\n", $content);
$c = count($arr);

for($i = 0; $i < 30; $i++){
    $j = rand(0, $c - 1);
    echo $arr[$j] . "\n";
}

?>