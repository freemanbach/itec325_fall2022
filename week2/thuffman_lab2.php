<?php

function genMagicNumList() {
    $nums = [];

    for($i = 1; $i < 71; $i++){
        array_push($nums, $i);
    }
    return $nums;
}

function getTicket() {
    $lottoNums = [];
    $nums = genMagicNumList();

    for($i = 0; $i < 5; $i++){
        $count = count($nums);
        $index = rand(0, $count - 1);
        $val = $nums[$index];
        array_push($lottoNums, $val);
        unset($nums[$index]);
        $numList = array_values(array_filter($nums));
    }
    asort($lottoNums);
    $magicNum = rand(0, 26);
    array_push($lottoNums, $magicNum);

    return $lottoNums;
}

$nums = 10;
$tickets = [];


for($i = 0; $i < $nums; $i++){
    $tick = getTicket();
    array_push($tickets, $tick);
}

foreach($tickets as $ticket) {
    foreach($ticket as $num) {
        echo $num . " ";
    }
    echo "\n";
}
?>