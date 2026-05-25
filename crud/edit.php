<?php 
@include_once "./components/navbar.php";
@require_once "../config/connection.php";
if (isset($_GET['id'])) {
     $id = $_GET["id"];

$query = "SELECT * FROM `mobiles` WHERE id = $id";
$result = mysqli_query($conn , $query);
$mobile = mysqli_fetch_assoc($result);

?>

<!-- edit form -->
 <div class="container my-4">
    <h1 class="text-center">Edit Mobile Details</h1>
<form action="" method="post" class="form-group">

<input type="text" name="model" id="" required class="form-control my-2" placeholder="Enter mobile model" value="<?php echo $mobile["model"];?>">
<input type="number" name="price" id="" min="0" required class="form-control my-2" placeholder="Enter Mobile price in PKR" value="<?php echo $mobile["price"];?>">
<input type="text" name="brand" id="" required class="form-control my-2" placeholder="Enter Mobile brand"value="<?php echo $mobile["brand"];?>">
<input type="number" name="stock" min="0" id=""required  class="form-control my-2" placeholder="Enter Mobile stock"value="<?= $mobile["stock"];?>">
<select  name="ptaStatus" id="" required class="form-control my-2" value="<?= $mobile["model"];?>">
    <option value="" selected disabled>Select PTA Status</option>
    <option value="approved">Approved</option>
    <option value="non-approved">Not Approved</option>
    </select>
<input type="submit" name="Update" id="" class="form-control btn btn-primary my-2">
</form>
</div>

<?php
@include "./components/footer.php";
// Processing form data
if(isset($_POST["Update"])){
$model = $_POST["model"];
$price = $_POST["price"];
$brand = $_POST["brand"];
$stock = $_POST["stock"];
$ptaStatus = $_POST["ptaStatus"];

 if ($model  != "" && $price > 0 && $brand  != "" && $stock > 0   && $ptaStatus!= "") {   
$editMobileQuery="UPDATE `mobiles` SET model= '$model',price = $price,brand='$brand',stock=$stock,ptaStatus='$ptaStatus' WHERE  id =$id";
$result = mysqli_query($conn, $editMobileQuery);
if($result){
  echo "<script>
  alert('Product updated succesfully..!');
window.location.href='./index.php';
  </script>";
}else{
  echo "<script>alert('Something went wrong🤡. Please try again later🙂..!')</script>";
}
        } else {
        echo "<script>alert('Please fill all fields')</script>";
        # code...
    }
}
















} else {
    echo "<script>
    alert('Invalid mobile id. Please try again later🤡..!');
        window.location.href='./index.php';
    </script>";
}

?>