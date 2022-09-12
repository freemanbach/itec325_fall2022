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
* @Date   2022.09.08
* @Email  adiazsoriano@radford.edu
* @Desc   Using what I've learned this week -> a stats calculator
*/

function findAverage(array $numbers) {
    $sum = 0;

    for($i = 0; $i < count($numbers); $i++) {
        $sum = $sum + $numbers[$i];
    }

    return $sum / count($numbers);
}

function findMedian(array $array) {
    sort($array);
    $length = count($array);
    $middle = 0;
    if($length % 2 == 1) {
        $middle = $array[$length / 2];
    } else {
        $middle = ($array[$length / 2 ] + $array[($length / 2) - 1]) / 2;
    }

    return $middle;
}

function findMode(array $array) {
    $countArr = array();

    for($i = 0; $i < count($array); $i++) {
        if(!array_key_exists(strval($array[$i]),$countArr)) {
            $countArr[strval($array[$i])] = 1;
        } else {
            $countArr[strval($array[$i])]++;
        }
    }
    
    $modeString = "[";

    foreach($countArr as $key => $value) {
        if($value > 1) {
            $modeString = $modeString . $key . ", ";
        }
    }

    return (strlen($modeString) >= 2) ? substr($modeString,0,strlen($modeString)-2) . "]" : "";
}

function findRange(array $array) {
    $min = PHP_INT_MAX;
    $max = PHP_INT_MIN;

    for($i = 0; $i < count($array); $i++) {
        if($array[$i] > $max) {
            $max = $array[$i];
        }
        if($array[$i] < $min) {
            $min = $array[$i];
        }
    }

    return $max - $min;
}

function findStandardDeviation(array $numbers, bool $isSampleSD = false) {
    $mean = findAverage($numbers);
    $sum = 0;

    for($i = 0; $i < count($numbers); $i++) {
        $delta = abs($numbers[$i] - $mean);
        $sum = $sum + pow($delta, 2);
    }

    $sampleSDOffset = 0;
    if($isSampleSD) {
        $sampleSDOffset++;
    }

    $sum = $sum / (count($numbers)-$sampleSDOffset);
    return sqrt($sum);
}

$numArray = array();

echo "Enter 10 numbers for evaluation:\n";

for($i = 1; $i < 11; $i++) {
    $prompt = readLine("Enter number " . $i . ": ");
    if(empty($prompt) || !is_numeric($prompt)) {
        $prompt = 0;
    }
    array_push($numArray, $prompt);
}

$mean = findAverage($numArray);
$med = findMedian($numArray);
$mode = findMode($numArray);
$range = findRange($numArray);
$sd = findStandardDeviation($numArray);
$sampleSD = findStandardDeviation($numArray,true);

echo "- - - - - - - - - - - - - - - - - - - -\n";
echo "Mean is : " . $mean . "\n";
echo "Median is : " . $med . "\n";
echo "Mode is : " . $mode . "\n";
echo "Range is : " . $range . "\n";
printf("Population Standard Deviation : %.2f\n", $sd);
printf("Sample Standard Deviation : %.2f\n", $sampleSD);
echo "- - - - - - - - - - - - - - - - - - - -\n";
?>