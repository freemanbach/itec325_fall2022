<?php

  $url = readline("Enter MySQL Database URL: ");
  $username = readline("Username: ");
  $pass = readline("Password: ");
  $dbname = readline("Database Name: ");
  $query = readline("Query: ");

  $mysql = new mysqli($url, $username, $pass, $dbname);
 $result = $mysql->query($query);
foreach ($result as $row) {
  
    echo implode(" ", $row) . "\n";
}