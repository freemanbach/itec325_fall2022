<?php

    $firstName = readline("Enter your First Name: ");
    $lastName = readline("Enter your Last Name: ");
    $age = readline("Enter your age: ");
    $dateOfBirth = readline("Enter your Date of Birth: ");
    $country = readline("Enter your country of origin: ");
    date_default_timezone_set("America/New_York");
    echo "First Name:        " . $firstName . "\n";
    echo "Last Name:         " . $lastName . "\n";
    echo "Age:               " . $age . "\n";
    echo "DOB:               " . $dateOfBirth . "\n";
    echo "Country of Origin: " . $country . "\n";
    echo "Current Time:      " . time();
    echo "\n";
    echo "Current Date:      " . date('m/d/y');
    echo "\n";
?>