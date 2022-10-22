<?php

$is_finished = false;

while (!$is_finished) {
    echo "1. Login\n";
    echo "2. Signup\n";
    echo "3. Exit\n";
    $option = readline("Please choose an option ");
    
    switch($option) {
        case "1":
            login();
            break;
        case "2":
            signup();
            break;
        case "3":
            $is_finished = true;
            break;
        default:
            echo "That is not a valid option.\n";
            break;
    }
}

function signup() {
    $name = readline("Please enter your name: ");
    $username = readline("Please enter your username: ");
    $password = readline("Please enter your password: ");

    $conn = mysqli_connect('127.0.0.1', 'root', '', 'week8', 3306);

    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    } else {
        $hashed_password = sha1($password);

        $query = "insert into users(name, username, password) values(\"$name\", \"$username\", \"$hashed_password\")"; 
        mysqli_query($conn, $query);

        echo "\nHi " . $name . ", nice to meet you! Thank you for signing up\n\n";
    }   
}

function login() {
    $username = readline("Please enter your username: ");
    $password = readline("Please enter your password: ");


    $conn = mysqli_connect('127.0.0.1', 'root', '', 'week8', 3306);

    if ( $conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    } else {
        $hashed_password = sha1($password);

        $query = "select name, username, password from users ";
        $query .= "where username='$username' and password='$hashed_password';"; 
        $result = mysqli_query($conn, $query);
        $row  = mysqli_fetch_array($result);
        
        if(is_array($row)) {
            
            if ($row['username'] == $username && $row['password'] == $hashed_password ) {
                echo "\nHello " . $row['name'] . ", welcome back!"  . "\n\n";
            }
        } else {
            $error_message = "Invalid username and or password\n";
        }
    }
}

?>