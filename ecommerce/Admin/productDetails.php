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
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Product Details
            </h3>
          </div>
         <div class="row">

 <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="row">
                    <div class="col-6">
                        <img src="./uploads/<?= $productDetails['image'] ?>" alt="">
                    </div>
                    <div class="col-6">
                        <h1><?= $productDetails['title'] ?></h1>
                        <h1><?= $productDetails['price'] ?></h1>
                        <h1><?= $productDetails['description'] ?></h1>
                    </div>
                 </div>
                </div>
              </div>
            </div>
         </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="./vendors/js/vendor.bundle.base.js"></script>
  <script src="./vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="./js/off-canvas.js"></script>
  <script src="./js/hoverable-collapse.js"></script>
  <script src="./js/misc.js"></script>
  <script src="./js/settings.js"></script>
  <script src="./js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="./js/file-upload.js"></script>
  <script src="./js/typeahead.js"></script>
  <script src="./js/select2.js"></script>
  <!-- End custom js for this page-->
</body>


</html>
<?php } ?>