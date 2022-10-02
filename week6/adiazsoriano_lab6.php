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
* @Date   2022.09.28
* @Email  adiazsoriano@radford.edu
* @Desc   defining terms using definitions from an API
*/

function fileToStrArray(string $fileName) : array {
    $itemArr = array();
    $file = fopen($fileName, "r");

    $line = fgets($file);
    while($line != null) {
        array_push($itemArr, strtolower(trim($line)));
        $line = fgets($file);
    }

    return $itemArr;
}

function getDefinition(string $apiLink, string $word, $context) : array|null {
    $defitionJSON = file_get_contents($apiLink . $word, false, $context); 
    $headerRequestInfo = get_headers($apiLink . $word);
    $definitions = json_decode($defitionJSON);

    return strcmp($headerRequestInfo[0], "HTTP/1.1 404 Not Found") == 0 ? null : $definitions;
}

function printWords(array $wordDefinitions) : void {
    foreach($wordDefinitions as $key => $value) {
        echo $key . " : " . $value . "\n";
    }
}

//context needed to change how the file content is read in
$contextOptions = array(
    'http' => array(
        'method' => 'GET',
        'max_redirects' => '0',
        'ignore_errors' => '1'
    )
);
$context = stream_context_create($contextOptions);

$wordArr = fileToStrArray("./define_terms.txt");
$wordDefinitions = array();

for($i = 0; $i < count($wordArr); $i++) {
    $generatedWordDefinition = getDefinition("https://api.dictionaryapi.dev/api/v2/entries/en/",$wordArr[$i], $context);

    $wordDefinitions[$wordArr[$i]] = $generatedWordDefinition == null ? 
    "No definitions were found." : $generatedWordDefinition[0]->meanings[0]->definitions[0]->definition;
}

printWords($wordDefinitions);

?>