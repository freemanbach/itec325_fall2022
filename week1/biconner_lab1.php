<?php
    $firstName = readline("Enter your first name ");
    $lastName = readline("Enter your last name ");
    $age = readline("Enter your age ");
    $dob = readline("Enter your date of birth ");
    $country = readline("Enter your country of origin ");
    date_default_timezone_set("America/New_York");
    $date = date("m/d/Y");
    $time = time();
    
    printf("First Name: %s\nLast Name: %s\nAge: %d\nDOB: %s\nCountry: %s\nCurrent Date: $date $time", $firstName, $lastName, $age, $dob, $country, $date, $time);
?>