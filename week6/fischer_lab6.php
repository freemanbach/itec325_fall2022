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
* @Desc   Create a Associative Array to parse this file defined_terms.txt to use the Nouns as Keys and use an API to get the definition as Values
* Link: https://dictionaryapi.dev/
* API: https://api.dictionaryapi.dev/api/v2/entries/en/hello
*/

// Code

//Open file of words
$file = fopen("define_terms.txt", "r");
	$arr = array();

  //clear api connection errors
	error_reporting(0);
 
//while contents in file
$i = 0;
	while(!feof($file)){
		$readLine = trim(fgets($file));
		//Look at API for definitions
		$terms = json_decode(file_get_contents("https://api.dictionaryapi.dev/api/v2/entries/en/" . $readLine, false))[0];
		//Look at array in API for definition
		$terms = $terms->meanings[0]->definitions[0]->definition;
		//Take terms and put into array
		$arr[$readLine] = $terms;
		$i++;
	}
	
//Prints header & format
echo "*Word- " . "\t\t" . "|Definition: " . "\n\n";
$format = "*%6s \t|%-30s\n";

//Runs through and ONLY prints words with definitions
foreach($arr as $val => $terms) {
	if ($terms != 0) {
		printf ($format, $val, $terms . "\n");
	}
}
//close text file
fclose($file);
?>
