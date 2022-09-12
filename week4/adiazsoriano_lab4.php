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
* @Date   2022.09.12
* @Email  adiazsoriano@radford.edu
* @Desc   using what was learned this week -> stats bell curve
*/

//
// Using findAverage() and findStandardDeviation() from week3 lab.
//
function findAverage(array $numbers) {
    $sum = 0;

    for ($i = 0; $i < count($numbers); $i++) {
        $sum = $sum + $numbers[$i];
    }

    return $sum / count($numbers);
}

function findStandardDeviation(array $numbers, bool $isSampleSD = false) {
    $mean = findAverage($numbers);
    $sum = 0;

    for ($i = 0; $i < count($numbers); $i++) {
        $delta = abs($numbers[$i] - $mean);
        $sum = $sum + pow($delta, 2);
    }

    $sampleSDOffset = 0;
    if ($isSampleSD) {
        $sampleSDOffset++;
    }

    $sum = $sum / (count($numbers) - $sampleSDOffset);
    return sqrt($sum);
}

function drawBellCurve(array $array) {
    $mean = findAverage($array);
    $sd = findStandardDeviation($array);

    //"normal" bell curve
    echo "                               -   -   -\n";
    echo "                            -      -      -\n";
    echo "                         -         -         -\n";
    echo "                       -           -           -\n";
    echo "                      -            -            -\n";
    echo "                    -              -              -\n";
    echo "                   -               -               -\n";
    echo "               _ -                 -                 - _\n";
    echo "        _  - -                     -                     - - _\n";
    echo "_ _ - -                            -                            - - _ _\n";
    echo "_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _-_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _\n";

    $xAxis = "";
    for($i = -3; $i < 4; $i++) {
        $point = ($i * $sd) + $mean;
        $xAxis = $xAxis . sprintf(" %8.1f ",$point);
    }
    echo $xAxis . "\n";
}

$numArray = array();

do {
    $input = readline("Enter a number(enter 'exit' to stop): ");
    if(strcmp($input,"exit") != 0) {
        if(empty($input) || !is_numeric($input) || intval($input) >= 1_000_000) {
            echo "'" . $input . "' converted to 1.\n";
            $input = 1;
        }
 
        array_push($numArray, floatval($input));
    }
} while(strcmp($input,"exit") != 0);

if(empty($numArray)) {
    array_push($numArray,1);
}

echo "- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
drawBellCurve($numArray);


?>