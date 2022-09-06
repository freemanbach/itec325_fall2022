<?php

function array_sort(&$array, $sort_order) {
    if ($sort_order == "ascending") {
        asort($array);
        $array = array_values($array);
        return 1;
    } else if ($sort_order == "descending") {
        rsort($array);
        $array = array_values($array);
        return 1;
    }
    echo "Invalid Sort Description\n";
    return 0;
}

$nums = [10, 58, 49, 30, 29, 49, 388, 10, 390, 34, 56, 39, 392, 48, 58];
$count = count($nums);
foreach($nums as $index => $num) {
    if ($index == $count - 1) {
        echo "$num";
    } else {
        echo "$num, ";
    }
}
echo "\n";

array_sort($nums, "ascending");

foreach($nums as $index => $num) {
    if ($index == $count - 1) {
        echo "$num";
    } else {
        echo "$num, ";
    }
}
echo "\n";

array_sort($nums, "descending");

foreach($nums as $index => $num) {
    if ($index == $count - 1) {
        echo "$num";
    } else {
        echo "$num, ";
    }
}
echo "\n";

array_sort($nums, "Doesn't Exist");
?>