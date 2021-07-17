<?php

define("DB_SERVER", "localhost");
define("DB_USER"  , "root");
define("DB_PASS"  , "");
define("DB_NAME"  , "base");

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$direction_button=$_POST['direction_button'];

$sql = "INSERT INTO directions (direction)
        VALUE ('$direction_button')";
        

if ($conn->query($sql)==TRUE) {
  header('location: index.html');
 
}
else {
  echo"Error ! Try again";
}

$conn->close();

?>



