<?php
$numGrade = readline("Please enter your grade number: ");

$letterGrade = '';

switch($numGrade) {
    case ($numGrade >= 90 && $numGrade <= 100):
        $letterGrade = 'A';
        break;
    case ($numGrade >= 80 && $numGrade < 90):
        $letterGrade = 'B';
        break;
    case ($numGrade >= 70 && $numGrade < 80):
        $letterGrade = 'C';
        break;
    case ($numGrade >= 60 && $numGrade < 70):
        $letterGrade = 'D';
        break;
    case ($numGrade > 0 && $numGrade < 60):
        $letterGrade = 'F';
        break;
    default:
        $letterGrade = "Invalid Grade";
}
if($letterGrade != "Invalid Grade"){
    echo "Your grade is: " . $letterGrade . "\n";
} else {
    echo $letterGrade . "\n";
}



?>