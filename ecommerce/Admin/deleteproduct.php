<?php 
if(!isset($_GET['p_id'])){
header("Location:./products.php");
}
else{
@require_once('../config/connection.php');
$p_id=$_GET['p_id'];

$deleteProductQuery = "DELETE FROM `products` where p_id =$p_id";
$deleteProductQueryResult = mysqli_query($conn,$deleteProductQuery);

if($deleteProductQueryResult){
  echo "<script>alert('Product Deleted Successfully')
  window.location.href='./products.php'

  ;</script>";
}else{
    echo "<script>alert('Error Deleting Product');
     window.location.href='./products.php'
    </script>";
}
}

?>
