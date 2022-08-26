<?php
    $firstName = readline("Enter your first name ");
    $lastName = readline("Enter your last name ");
    $age = readline("Enter your age ");
    $dob = readline("Enter your date of birth ");
    $country = readline("Enter your country of origin ");
    date_default_timezone_set("America/New_York");

    $time = time();
    $date = date("m-d-Y", $time);
    $message = sprintf("Name: %s %s\nAge: %d\nDOB: %s\nCountry: %s\nCurrent Date: $date", $firstName, $lastName, $age, $dob, $country, $date);
    echo $message;
?>