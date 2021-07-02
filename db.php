<?php

$servername="localhost";
$username="root";
$password="";
$database="userpanel";

$conn = new mysqli($servername,$username,$password,$database);
// check connection 
if ($conn->connect_error) {
    die("connetion_failed: ". $conn->connect_error);

}

//echo "Connected successfully";


?>

