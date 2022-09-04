<?php
function genMagicNumList()
{
    $myNum = array();
    $index = 0;
    for ($i = 1; $i < 71; $i++) {
        $myNum[$index] = $i;
        $index++;
    }
    return $myNum;
}

function getTicket()
{
    $lotto = array();
    $z = 0;
    $a = genMagicNumList();
    while ($z < 5) {
        $index = random_int(0, count($a) - 1);
        $value = $a[$index];
        $lotto[$z] = $value;
        array_splice($a, $index, $index);
        $z++;
    }
    sort($lotto);
    array_push($lotto, random_int(0, 26));
    return $lotto;
}
$size = 10;
$tcks = array();
for ($i = 0; $i < $size; $i++) {
    $tcks[$i] = GetTicket();
}
foreach ($tcks as $t) {
    echo "[ ";
    foreach ($t as $tNum) {
        echo $tNum . " ";
    }
    echo "]\n";
}
