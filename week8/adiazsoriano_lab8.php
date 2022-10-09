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
* @Date   2022.10.09
* @Email  adiazsoriano@radford.edu
* @Desc   A simple file parsing program using classes to generate a histogram based on file contents.
*/

class FileParser {

    public static $fileName = "";

    private $file;
    private $fileInfo;

    public function __construct($file) {
        $this->file = $file;
        $this->fileInfo = array();
    }

    public function __destruct() {
        echo "Closing file...\n";
        fclose($this->file);
        echo "File closed.\n";
    }

    public function characterHistogram() : array {
        if(isset($this->fileInfo) || !empty($this->fileInfo)) {
            $tempArr = array();
            $line = fgets($this->file);
            while($line != null) {
                array_push($tempArr, trim($line));
                $line = fgets($this->file);
            }

            $tempFileSpl = array();
            foreach($tempArr as $line) {
                array_push($tempFileSpl, str_split($line));
            }

            foreach($tempFileSpl as $line) {
                foreach($line as $ch) {
                    if(!array_key_exists($ch, $this->fileInfo)) {
                        $this->fileInfo[$ch] = 0;
                    }
                    $this->fileInfo[$ch]++;
                }
            }

            arsort($this->fileInfo);
        }

        return $this->fileInfo;

    }

    public function printFileInfo() : void {
        echo "Printing histogram information about '" . FileParser::$fileName . "'.\n\n";
        if(isset($this->fileInfo) || !empty($this->fileInfo)) {
            foreach($this->fileInfo as $key => $value) {
                echo "[" . $key . "] : " . $value . "\n";
            }
        } else {
            echo "\tThere is no information on this file.\n\n";
        }
    }

    public static function getFile() {
        $fileStr = "";
        $file = null;
        try {
            do {
                $fileStr = readline("Enter file name / path: ");
                $file = fopen($fileStr, "r");
            } while(!file_exists($fileStr));
        } catch (Exception $e) {
            echo "\n\nThere was an exception retrieving this file.\n\n";
        }

        FileParser::$fileName = $fileStr;
        var_dump($file);
        return $file;
    }
}



$fp = new FileParser(FileParser::getFile());
$fp->characterHistogram();
$fp->printFileInfo();

?>