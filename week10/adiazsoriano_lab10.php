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
* @Date   2022.10.28
* @Email  adiazsoriano@radford.edu
* @Desc   Using the PDO object from ../week9/ to query, insert, and update tables
*/

//essentially you must require the connection to the database
require "../week9/adiazsoriano_lab9.php";


//Query something
$q1 = "SELECT * FROM table1;";
$s1 = $pdo->query($q1); 
//use $s1->fetchAll(); to get all of the rows of the table (in an associative array).
$names = $s1->fetch(); ///$names contains an associative array of the first row found from this query

// - - - - - - - - - - - - - - - - - - - - - - - - - - -
//all of the things below are using prepared statements.
// - - - - - - - - - - - - - - - - - - - - - - - - - - - 
//insert without transactions
$q2 = "INSERT INTO table1 (firstname, lastname)
    VALUES (:firstname, :lastname);";
$c2 = array("firstname" => "angel", "lastname" => "diaz-soriano");
$s2 = $pdo->prepare($q2);
$s2->execute($c2);

//insert with transacations
try {
    $pdo->beginTransaction();
    $q3 = "INSERT INTO table1 (firstname, lastname)
        VALUES (:firstname, :lastname);";
    $c3 = array("firstname" => "angel", "lastname" => "diaz-soriano"); 
    $s3 = $pdo->prepare($q3);
    $s3->execute($c3);
    $pdo->commit();
} catch (Exception $e) {
    $pdo->rollback();
    echo "Something went wrong with inserting to the table.";
}

// - - - - - - - - - - - - - - - - - - - - - - - - - - - 

//update without transacations
$q4 = "UPDATE table1
    SET lastname = :lastname
    WHERE firstname LIKE :firstname";
$c4 = array("lastname" => "Diaz-Soriano", "firstname" => "angel");
$s4 = $pdo->prepare($q4);
$s4->execute($c4);

//update with transactions
try {
    $pdo->beginTransaction();
    $q5 = "UPDATE table1
        SET lastname = :lastname
        WHERE firstname LIKE :firstname";
    $c5 = array("lastname" => "Diaz-Soriano", "firstname" => "angel");
    $s5 = $pdo->prepare($q5);
    $s5->execute($c5);
    $pdo->commit();
} catch (Exception $e) {
    $pdo->rollback();
    echo "Something went wrong with updating the table.";
}
?>