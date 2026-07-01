<?php 


$server="localhost";
$username="root";
$password="YourNewPassword";
$dbname="2509b1_ecommerce";


$conn = mysqli_connect($server, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>