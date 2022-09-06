<?php
$file = fopen("data.txt", "r");
$content = fread($file, filesize("data.txt"));
$words = preg_split("/[\s]+/", $content, -1, PREG_SPLIT_NO_EMPTY);


$i = 0;

while($i < 30) {
    $count = count($words);
    $index = rand(0, $count - 1);
    $word = $words[$index];
    echo "$word\n";
    unset($words[$index]);
    $words = array_values(array_filter($words));
    $i++;
}

?>