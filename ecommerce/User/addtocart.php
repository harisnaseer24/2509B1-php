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

$checkDuplicateQuery="SELECT * FROM  cart where u_id=$user_id and p_id=$p_id";
$checkDuplicateQueryResult=mysqli_query($conn,$checkDuplicateQuery);
if(mysqli_num_rows($checkDuplicateQueryResult) > 0){

echo "Updating qty";

$row=mysqli_fetch_assoc($checkDuplicateQueryResult);

$cartid= $row["cart_id"];
$oldQty= $row["qty"];
          // 3    + 3 = 6
$finalQty = $oldQty + $qty;

//       price * 6
 $total=$price * $finalQty;
  $updateCartQuery = "Update `cart` set  `qty`= $finalQty,`total`= $total Where cart_id = $cartid";
  $updateCartQueryResult = mysqli_query($conn,$updateCartQuery);

  if($updateCartQueryResult){
    header("Location:./cart.php");
  }
  else{
    echo "Error: ".mysqli_error($conn);
  }

}else{
echo "Adding product";

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





 
}







?>



