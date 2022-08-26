<?php

/**
* This sample template is used for your php file upload on weekly submission.
* There will be a theme on a weekly basis on learning this new Server centric
* Programming language called PHP. The idea is to write your own unique code
* to supply as a php file and to check into your local repo aka staging area
* then to check-in that single file to this github area.
*
* This weekly topic will vary from week to week. There couild be examples
* from lecture on certain native PHP functions, conditional, loopings, along
* with parsing data to associative array. The idea of this weekly programming task
* will be your own. I wont be making any contributions to your ideas on this weekly
* assignment.
*
* Typically, there will be CLI tools, which can be run on the terminal environment
* rather than running it via Apache as a web application. 
*
* To execute any PHP script as a CLI, you can run `php filename.php`
*
* @Author Angel Diaz-Soriano 
* @Date   Give it a date YYYY.MM.DD 2022.08.26
* @Email  adiazsoriano@radford.edu
* @Desc   Lab 1 - grabbing input and displaying it.
*/

$first = readline("Enter your first name: ");
$last = readline("Enter your last name: ");
$age = readline("Enter your age: ");
$dob = readline("Enter your date of birth: ");
$coo = readline("Enter your country of origin: ");


print("Your first name is " . $first . " and your last name is " . 
                              $last . " and your age is " . 
                              $age . " and your date of birth is " . 
                              $dob . "and your country of origin is " . 
                              $coo);

?>