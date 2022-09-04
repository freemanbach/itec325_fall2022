<?php

function genMagickNumList() {
	$mynum = array();

    for($i = 1; $i < 71; $i++) {
		array_push($mynum, $i);

    }
    return $mynum;
}

function getTicket() {
    $lotto = array();
        
    $a = genMagickNumList();
    $z = 0;
	
    while ($z < 5) {
        $index = rand(0, sizeof($a)-1);
        $value = $a[$index];
		array_push($lotto, $value);

        $z++;
    }
	

    array_push($lotto, rand(1,26));
	
    return $lotto;
}
	
$size=10;
$a = array();

for ($i=0; $i < $size; $i++) {
    array_push($a, getTicket());
    }
	
foreach($a as $m) {
    echo "Lotto Number:\t";
	foreach ($m as $num){
		echo $num . "\t";
    }
	echo "\n\n";
}

?>