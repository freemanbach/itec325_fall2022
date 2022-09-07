<?php
$grades = array("A", "B", "C", "D", "F");

echo "The possible grade you can earn are : ";
$comma_sep = implode(",", $grades);


print_r($comma_sep);

echo "\n";
$yourScore = readline("Whats your score? ");


if ($yourScore >= 90 && $yourScore <= 100) {
    echo "Your grade is " . $grades[0];
} elseif ($yourScore >= 80 && $yourScore < 90) {

    echo "Your grade is " . $grades[1];
} elseif ($yourScore >= 70 && $yourScore < 79) {

    echo "Your grade is " . $grades[2];
} elseif ($yourScore >= 60 && $yourScore < 69) {

    echo "Your grade is " . $grades[3];
} elseif ($yourScore <= 59 && $yourScore >= 0) {

    echo "Your grade is " . $grades[4];
} elseif ($yourScore < 0) {

    echo "Your score is not in range of 0-100";
} else {
    echo "Not Valid score";
}