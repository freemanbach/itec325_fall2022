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
$i = readline("Enter a hunger level: ");
echo hungerLevel($i);
?>