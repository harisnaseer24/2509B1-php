<?php 
if(!isset($_GET['p_id'])){
header("Location:./products.php");
}
else{
@include_once('./components/header.php');
@require_once('../config/connection.php');

$p_id=$_GET['p_id'];

$getProductQuery = "SELECT * FROM `products` where p_id =$p_id";
$getProductQueryResult = mysqli_query($conn,$getProductQuery);
$productDetails = mysqli_fetch_assoc($getProductQueryResult);


 ?>
     <!-- partial -->
      <div class="section">
        <div class="container m-4">


        <div class="row">
            <div class="col-lg-6">  <img src="../Admin/uploads/<?= $productDetails['image'] ?>" alt="" width="500"></div>
            <div class="col-lg-6">
                 <h1><?= $productDetails['title'] ?></h1>
                        <h3>Rs. <?= $productDetails['price'] ?></h3>
                        <p><?= $productDetails['description'] ?></p>

            </div>
        </div>
      
         </div>
        </div>
        </div>
       


  	<?php 
@include_once("./components/footer.php");

 } ?>