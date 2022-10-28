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
* @Author Chris Fischer
* @Date   10.26.22
* @Email  cafischer@Radford.edu
* @Desc   Takes 30 values from text file
*/

// Code

//open file
  $file = fopen("data.txt", "r");
  //create array
  $arr = array();
  //pull data from file until end of file
  while(!feof($file)){
	  //check each line for value
    $eachLine = fgets($file);
//push to array
    array_push($arr, $eachLine);
  }
  //run through list and randomly print 30 words
  $start = 0;
  $pick = 30;
  while ($start < $pick) {
	$word = rand(0, count($arr));
    echo $arr[$word];
	$start++;
}
  
?>
