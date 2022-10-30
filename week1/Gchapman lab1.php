<?php
    $fisrtName = readline("Please enter your first name: ");
    $lasrName = readline("Please nter your last name: ");
    $Age = readline("Please nter your age: ");
    $DoB = readline("Please enter your date of birth: ");
    $cntry = readline("Please enter your country of origin: ");
    date_default_timezone_set('America/New_York');
    $time = time();
    $date = date("m-d-Y", $time);

    $message = sprintf("Full Name: %s %s\nAge: %d\nDOB: %s\nCountry: %s\nCurrent Date: $date", $firstName, $lastName, $Age, $DoB, $cntry, $date);
    echo $message;
?>