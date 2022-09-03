<?php

$fname = readline("Enter first name ");
$lname = readline("Enter last name ");
$age = readline("Enter age ");
$dob = readline("Enter birthday ");
$country = readline("Enter country of origin ");

echo "\nFirst name: " . $fname;
echo "\nLast name: " . $lname;
echo "\nAge: " . $age;
echo "\nBirthday: " . $dob;
echo "\nCountry of origin: " . $country;

date_default_timezone_set("America/New_York");
$date = date("m/d/y", time());
$time = date("h:i:sa");
echo "\nThe current date is " . $date;
echo "\nThe current time is " . $time;
?>