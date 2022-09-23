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
* @Date   Give it a date 2022.09.19
* @Email  adiazsoriano@radford.edu
* @Desc   Reading from 'data.txt' and randomly printing out 30 pieces of data from that file.
*/

$dataArr = array();
$file = fopen("./data.txt","r");

$line = fgets($file);
while($line != null) {
    array_push($dataArr, $line);
    $line = trim(fgets($file));
}

for($i = 15; $i > -15; $i--) {
    $dataArrLen = count($dataArr);
    $randInd = rand(0,$dataArrLen - 1);
    $word = $dataArr[$randInd];
    unset($dataArr[$randInd]);
    $dataArr = array_values($dataArr);

    printf("%" . (abs($i*5)) ."s\n",$word);
}

fclose($file);

?>