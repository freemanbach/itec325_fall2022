<?php
function genMagickNumList() {
    $mynums = [];
    for ($i = 1; $i < 71; $i++) {
        array_push($mynums, $i);
    }
    return $mynums;
}

function getTicket() {
    $lotto = [];
    $nums = genMagickNumList();
    $rn = rand(0, 26);
    for ($i = 0; $i < 5; $i++) {
        $count = count($nums);
        $index = rand(0, $count - 1);
        $value = $nums[$index];
        array_push($lotto, $value);
        unset($nums[$index]);
        $numList = array_values(array_filter($nums));
    }
    asort($lotto);
    array_push($lotto, $rn);
    return $lotto;
}

$size = 10;
$tickets = [];
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