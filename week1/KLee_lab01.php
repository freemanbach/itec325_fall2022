<?php 
$firstname = readline("First name: ");
$lastName = readline("last name: ");
$age = readline("Age: ");
$dob = readline("Date of birth: ");
$coo = readline("Country of origin: ");
date_default_timezone_set("America/New_York");
$d = date("m/d/Y");
$t = time();
echo $firstname." " . $lastName." " . $age." " . $dob." " . $coo." " . $d . " " . $t;

?>