<?php
// connection
// Create connection
// $conn = mysqli_connect($servername, $username, $password);


$servername = "localhost";
$username = "root";
$password = "";
$database = "crud_operation";

$conn = new mysqli($servername, $username, $password,$database);

if(!$conn){
    die("connection failed");
}



?>