<?php

$arr = array(
    'A' => readline("Enter number of A's in the last test: "),
    'B' => readline("Enter number of B's in the last test: "),
    'C' => readline("Enter number of C's in the last test: "),
    'D' => readline("Enter number of D's in the last test: "),
    'F' => readline("Enter number of F's in the last test: ")
);

foreach ($arr as $key => $value) {
    echo $value . " students got an " . $key . " in the last test\n";
}
