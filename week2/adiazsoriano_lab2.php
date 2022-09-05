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
* @Date   9/5/2022
* @Email  adiazsoriano@radford.edu
* @Desc   creating lotto tickets
*/


function getListNums() {
    $numList = array();
    
    for($i = 1; $i < 71; $i++) {
        array_push($numList,$i);
    }
    return $numList;
}

function getTicket() {
    $lotto = array();
    $ticketGrab = getListNums();

    for($i = 0; $i < 5; $i++) {
        $index = rand(0,count($ticketGrab) - 1);
        $value = $ticketGrab[$index];
        array_push($lotto,$value);
        
        unset($ticketGrab[$index]);
        $ticketGrab = array_values($ticketGrab);
    }
    sort($lotto);
    array_push($lotto, rand(1,25));

    return $lotto;
}


$size = 10;
for($i = 0; $i < $size; $i++) {
    $ticket = getTicket();
    echo "[ ";
    for($j = 0; $j < count($ticket); $j++) {
        echo $ticket[$j] . " ";
    }
    echo "]\n";
}


?>