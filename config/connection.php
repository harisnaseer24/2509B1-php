<?php 


$server="localhost";
$username="root";
$password="";
$dbname="2509b1_php";


$conn = mysqli_connect($server, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>