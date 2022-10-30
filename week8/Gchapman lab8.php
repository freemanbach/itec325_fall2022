<?php
$sql = new mysqli("localhost", "root", "", "l8DB");

if($sql->connect_error){
    printf("Connection failed: ", mysqli_connect_error());
    exit();
}

$creation = "CREATE TABLE Example(mapId VARCHAR(30),mapName VARCHAR(30))";

if($sql->query($creation) === TRUE) {
  echo "Created";
}
else {
  echo "Error: " . $sql->error;
}
echo "Table: " . $sql;

$sql->close();
 ?>