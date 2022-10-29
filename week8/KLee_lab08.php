<?php

function printAboutMe($email) {
    $conn = mysqli_connect("localhost", "root", "killon99", "kl_gallery", "3306");

if ( $conn -> connect_errno) {
    echo "Failed to connect to MariaDB: " . $conn -> connect_error;
    exit();
} else {
    $query = "select aboutme from users ";
    $query .= "where email='$email';";
    $result = mysqli_query($conn, $query);
    $row  = mysqli_fetch_array($result);
    if(isset($row['aboutme'])) {
        echo $row['aboutme'];
    }
    else {
        echo "Not Found.";
    }
}
}
$e = readline("Enter your email: ");
printAboutMe($e);
?>