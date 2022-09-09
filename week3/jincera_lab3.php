<?php
//explain game to the user
$name = readline("Please enter your name: ");
echo ("Hi, " . $name . "! This program calculates your stress level. There are four levels of stress level:\n 
    0 - none, 1 - little, 2 - moderate, 3 - high\n
    We just need you to answer some yes/no questions.
    \n Let's get started!\n");
$stressLevel = 0;
//first question
function schoolWork()
{
    global $stressLevel;
    $schoolWork = readline("Do you have schoolwork due today?(yes/no) ");    //get input from user
    //check if user input is valid
    while ($schoolWork != "yes" && $schoolWork != "no") {
        $schoolWork = readline("Please enter valid input (yes/no)\nDo you have schoolwork due today?(yes/no) ");
    }
    if ($schoolWork == "yes") {  //if statement
        $stressLevel++;
        echo ("Having schoolwork due today adds 1 to your stress level. Your current stress level is " . $stressLevel . "\n");
    } else {   // else statement
        echo ("You don't have schoolwork due today. Your current stress level is " . $stressLevel . "\n");
    }
}
//second question
function hitTheGym()
{
    global $stressLevel;
    $hitTheGym = readline("Did you work out today?(yes/no) ");    //get input from user
    //check if user input is valid
    while ($hitTheGym != "yes" && $hitTheGym != "no") {
        $hitTheGym = readline("Please enter valid input (yes/no)\nDid you workout today?(yes/no) ");
    }
    if ($hitTheGym == "no") {    //if statement
        $stressLevel++;
        echo ("Not hitting the gym adds 1 to your stress level. Your current stress level is " . $stressLevel . "\n");
    } else {   //else statement
        echo ("You worked out today. Your current stress level is " . $stressLevel . "\n");
    }
}

//third question
function diet()
{
    global $stressLevel;
    $diet = readline("Have you followed your diet today?(yes/no) ");    //get input from user

    //check if user input is valid
    while ($diet != "yes" && $diet != "no") {
        $diet = readline("Please enter valid input (yes/no)\nHave you followed your diet today?(yes/no) ");
    }
    if ($diet == "no") {    //if statement
        $stressLevel++;
        echo ("Not following your diet adds 1 to your stress level. Your current stress level is " . $stressLevel . "\n");
    } else {   //else statement
        echo ("You followed your diet today. Your current stress level is " . $stressLevel . "\n");
    }
}

//recap stress level
function stressLevel()
{
    global $stressLevel;
    if ($stressLevel == 0) {
        echo ("Your stress level is 0 - none");
    } elseif ($stressLevel == 1) {
        echo ("Your stress level is 1 - little");
    } elseif ($stressLevel == 2) {
        echo ("Your stress level is 2 - moderate");
    } elseif ($stressLevel == 3) {
        echo ("Your stress level is 3 - high");
    }
}

//calling all functions
schoolWork();
hitTheGym();
diet();
stressLevel();
