<?php
function genMagicNumList() {
    $nums = [];
    $i;

    for ($i = 1; $i < 71; $i++) {
        array_push($nums, $i);
    }

    return $nums;
}

function getTicket() {
    $lotto = [];
    $numList = genMagicNumList();
    $i;

    for ($i = 0; $i < 5; $i++) {
        $count = count($numList);
        $index = rand(0, $count - 1);
        $value = $numList[$index];
        array_push($lotto, $value);
        unset($numList[$index]);
        $numList = array_values(array_filter($numList));
    }

    asort($lotto);
    $special = rand(0, 26);
    array_push($lotto, $special);

    return $lotto;
}

$size = 10;
$tickets = [];
$i;

for ($i = 0; $i < $size; $i++) {
    $ticket = getTicket();
    array_push($tickets, $ticket);
}

foreach ($tickets as $ticket) {
    foreach($ticket as $num) {
        echo $num . " ";
    }
    echo "\n";
}
?>