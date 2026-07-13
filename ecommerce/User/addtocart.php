<?php 
session_start();

if(!isset($_SESSION["role"]) || $_SESSION["role"] !="user"){
  header("Location: ./login.php");
}

if(isset($_POST['addtocart'])){
  @require_once('../config/connection.php');

  $p_id = $_POST['p_id'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  $user_id = $_SESSION['user_id'];

  $total=$price * $qty;

  $insertCartQuery = "INSERT INTO `cart`(`u_id`, `p_id`, `price`, `qty`,`total`) VALUES ($user_id,$p_id,$price,$qty,$total)";
  $insertCartQueryResult = mysqli_query($conn,$insertCartQuery);

  if($insertCartQueryResult){
    header("Location:./cart.php");
  }
  else{
    echo "Error: ".mysqli_error($conn);
  }
}







?>



