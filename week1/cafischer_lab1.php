<?php

//gather prompt
$fName=(string)readline("Enter in First Name: ");
$lName=(string)readline("Enter in Last Name: ");
$age=(integer)readline("Enter in Current Age: ");
$dob=(string)readline("Enter in your Date of Birth - MMDDYYYY: ");
$coo=(string)readline("Enter in your Country of Origin: ");
date_default_timezone_set("America/New_York");

//Print outputs

print "First Name: $fName\n";
print "Last Name: $lName\n";
print "Current Age: $age\n";
print "DOB: $dob\n";
print "Home Country: $coo\n";
echo date('Y-m-d h:i:sa') . "\n";

?>