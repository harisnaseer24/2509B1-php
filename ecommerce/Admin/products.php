
<?php 
@include_once('./components/header.php');
@require_once('../config/connection.php');

$getProductsQuery="SELECT p.* , c.cat_name    FROM `products` as p 
INNER JOIN categories as c
ON p.cat_id =c.cat_id  ORDER by p.p_id DESC";
$getProductsResult = mysqli_query($conn,$getProductsQuery);

?>
     <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
            Our Products
            </h3>
            
          </div>
          <div class="card">
            <div class="card-body">
             
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Product Id #</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Category</th>
                            <!-- <th>Description</th> -->
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>

<?php 
while($row = mysqli_fetch_assoc($getProductsResult)){
    $product_id = $row['p_id'];
    $title = $row['title'];
    $image = $row['image'];
    $price = $row['price'];
    $stock = $row['stock'];
    $cat_name = $row['cat_name'];
    $description = $row['description'];
    $created_at = $row['created_at'];

?>

                        <tr>
                            <td><?= $product_id ?></td>
                            <td><?= $title ?></td>
                            <td><img src="./uploads/<?= $image ?>" alt=""></td>
                            <td>Rs. <?= $price ?></td>
                            <td><?= $stock ?> units</td>
                            <td><?= $cat_name ?></td>
                            <!-- <td><?= $description ?></td> -->
                            <td><?= $created_at ?></td>
                            
                            <td>
                            
                                <button class="btn btn-outline-primary">View</button>
                                <button class="btn btn-outline-primary">Edit</button>
                                <button class="btn btn-outline-primary">Delete</button>
                            
                                </td>
                            </tr>

                        <?php 
                        
                        
                        }
                        ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>


</html>
