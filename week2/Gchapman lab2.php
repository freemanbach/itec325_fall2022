<?php

function genMgcNumList()
{
    $mArr = array();
    for ($x = 1; $x < 71; $x++) {
        array_push($mArr, $x);
    }

    return $mArr;
}
function getTicket()
{
    $lottery = [];
    $y = 0;
    for ($y; $y < 5; $y++) {
        $size = sizeof(genMgcNumList());
        $rando = rand(0, $size - 1);
        $value =  genMgcNumList()[$rando];
        array_push($lottery, $value);
        $nList = array_values(array_filter(genMgcNumList()));
    }
    asort($lottery);
    $numSpecial = rand(0, 26);
    array_push($lottery, $numSpecial);
    return $lottery;
}

$tickets = array();

for ($z = 0; $z < 10; $z++) {
    $t = getTicket();
    array_push($tickets, $t);
}

foreach ($tickets as $t) {
    foreach ($t as $ticNum) {
        echo $ticNum . " ";
    }
    echo "\n";
}