<?php
require_once('config.php');
function insertAboutMe($uname, $abtme) {
if($_SERVER['PHP_SELF']) {
    $conn = mysqli_connect(db_host, db_user, db_password, db_name, 3306); 
    $message = "";
    if ( $conn -> connect_errno) {
        echo "Failed to connect to MariaDB: " . $conn -> connect_error;
        exit();
    }
    else {
        $email = $_POST['email'];
        $sql = "UPDATE users set aboutme = '$abtme' 
                 WHERE email = '$uname'";
        if ($conn->query($sql) === TRUE) {
            echo"Added the following to your about me: " . $abtme;
          } else {
            echo "Something went wrong.";
          }
          $conn->close();
    }
    
}
}

$uname = readline("Enter your email: ");
$abtme = readline("Enter something about yourself: ");
insertAboutMe($uname, $abtme);
?>