<?php 
function hungerLevel($v) {
    $hl = "Invalid level";
    if($v >= 9) {
        $hl = "Full";
    }
    elseif($v < 9 && $v > 5) {
        $hl = "Moderate";
    }
    else {
        $hl = "Hungry";
    }
    return $hl;
}
function hungerLevels($a) {
    $hls = array();
    foreach($a as $l) {
        echo hungerLevel($l) . " ";
    }
    return $hls;
}

$input = readline("enter hunger levels seperated by space: ");
$a = hungerLevels(explode(" ", $input));
hungerLevels($a);
?>