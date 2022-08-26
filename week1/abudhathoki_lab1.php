<?php
$fName = readline("Enter your first name:");
$lName = readline("Enter your last name:");
$age = readline("Enter your age:");
$dOB = readline("Enter your date of birth:");
$cOfOrg = readline("Enter your country of origin:");

date_default_timezone_set('America/New_York');
$date = new DateTime();
$fdate = $date->format('Y-m-d H:i:s A');

echo "Your first name is $fName\n";
echo "Your last name $lName\n";
echo "Your age is $age\n";
echo "Your date of birth is $dOB\n";
echo "Your country of origin is $cOfOrg\n";
echo "Todays Date and Time in America/New_York TimeZone: $fdate";