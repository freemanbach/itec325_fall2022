<?php

function genMagicNumList()
{
    $arr = array();


    for ($i = 1; $i < 71; $i++) {
        array_push($arr, $i);
    }

    return $arr;
}
function getTicket()
{
    $lotto = [];

    $z = 0;
    for ($z; $z < 5; $z++) {
        $size = sizeof(genMagicNumList());
        $index = rand(0, $size - 1);
        $value =  genMagicNumList()[$index];
        array_push($lotto, $value);
        $nList = array_values(array_filter(genMagicNumList()));
    }
    asort($lotto);
    $numSpecial = rand(0, 26);
    array_push($lotto, $numSpecial);
    return $lotto;
}


$tickets = array();


for ($i = 0; $i < 10; $i++) {
    $t = getTicket();
    array_push($tickets, $t);
}

foreach ($tickets as $t) {
    foreach ($t as $ticNum) {
        echo $ticNum . " ";
    }
    echo "\n";
}