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
* @Desc   using PDO to connect to a DB (referenced from a textbook I bought)
*/


/**
 * in the config.php file:
 * 
 * <?php 
 * DEFINE('db_type', 'database-type'); //usually 'mysql'
 * DEFINE('db_server', 'database-host');
 * DEFINE('db_database', 'database-name');
 * DEFINE('db_port','database-port');
 * DEFINE('db_charset','utf8mb4'); //or any 'database-charset'
 * DEFINE('db_user', 'database-username');
 * DEFINE('db_pass', 'database-password');
 * ?>
 * 
 */


require "config.php";

$options = [ 
    PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
    PDO::ATTR_EMULATE_PREPARES => false, 
];

$pdo = null;
$dsn = db_type.":host=".db_server.";dbname=".db_database.";port=".db_port.";charset=".db_charset; 

try {
    $pdo = new PDO($dsn, db_user, db_pass, $options);
    
} catch (PDOException $e) {
    //anything can go here, using this somewhere to be caught or send a message.
    throw new PDOException($e->getMessage(), $e->getCode());    
} 



?>