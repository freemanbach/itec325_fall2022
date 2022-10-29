<?php 
$port = "3306";
$host = "localhost";
$user = readline("Enter local database username: ");
$pwd = readline("Enter local database password: ");
$dbname = readline("Enter database name: ");
$uId = readline("Enter the user ID number you are trying to find from user table: ");
$conn = mysqli_connect($host, $user, $pwd, $dbname, $port);

if ( $conn -> connect_errno) {
    echo "Failed to connect to MariaDB: " . $conn -> connect_error;
    exit();
} else {
    $query = "select id from users ";
    $query .= "where id='$uId';";
    $result = mysqli_query($conn, $query);
    $row  = mysqli_fetch_array($result);
    if($row['id'] == $uId) {
        echo "Exists";
    }
    else {
        echo "Doesn't exists";
    }
}


?>