<?php
$conn = new mysqli("localhost", "root", "", "testDB");

if($conn->connect_error){
  die("Cannot connect: " . $conn->connect_error);
}

$statement = "CREATE TABLE Example(
  firstName VARCHAR(30),
  lastName VARCHAR(30)
)";

if($conn->query($statement) === TRUE) {
  echo "Table created";
}
else {
  echo "Error. Could not create table " . $conn->error;
}

$conn->close();

 ?>
