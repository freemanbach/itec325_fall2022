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
* @Date   2022.10.02
* @Email  adiazsoriano@radford.edu
* @Desc   Using regular expressions to find things in strings.
*/

function containsNumeric(string $str) : bool|int { 
    return preg_match("/[0-9]/", $str);
}

function containsLowerCase(string $str) : bool|int {
    return preg_match("/[a-z]/", $str);
}

function containsUpperCase(string $str) : bool|int {
    return preg_match("/[A-Z]/", $str);
}

function containsSpecChars(string $str) : bool|int {
    return preg_match("/[^0-9a-zA-z\s]/", $str);
}

function containsCake(string $str) : bool|int {
    return preg_match("/cake/", strtolower($str));
}

function containsCheese(string $str) : bool|int {
    return preg_match("/cheese/", strtolower($str));
}

function containsWoah(string $str) : bool|int {
    return preg_match("/woah/", strtolower($str));
}

function containsItec(string $str) : bool|int {
    return preg_match("/itec/", strtolower($str));
}

$phrase = readline("Enter your phrase: ");
echo "\n";

if(containsNumeric($phrase)) {
    echo "Contains a number.\n";
}

if(containsLowerCase($phrase)) {
    echo "Contains a lower case letter.\n";
}

if(containsUpperCase($phrase)) {
    echo "Contains an upper case letter.\n";
}

if(containsSpecChars($phrase)) {
    echo "Contains a special character\n";
}

if(containsCake($phrase)) {
    echo "Contains 'cake'.\n";
}

if(containsCheese($phrase)) {
    echo "Contains 'cheese'.\n";
}

if(containsWoah($phrase)) {
    echo "Contains 'woah'.\n";
}

if(containsItec($phrase)) {
    echo "Contains 'itec'.\n";
}

?>