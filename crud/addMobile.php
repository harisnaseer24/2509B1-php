      <?php 
@include_once "./components/navbar.php";
@require_once "../config/connection.php";

?>
    <div class="container my-4">
    <h1 class="text-center">Enter Mobile Details</h1>
<form action="" method="post" class="form-group">

<input type="text" name="model" id="" required class="form-control my-2" placeholder="Enter mobile model">
<input type="number" name="price" id="" min="0" required class="form-control my-2" placeholder="Enter Mobile price in PKR">
<input type="text" name="brand" id="" required class="form-control my-2" placeholder="Enter Mobile brand">
<input type="number" name="stock" min="0" id=""required  class="form-control my-2" placeholder="Enter Mobile stock">
<select  name="ptaStatus" id="" required class="form-control my-2">
    <option value="" selected disabled>Select PTA Status</option>
    <option value="approved">Approved</option>
    <option value="non-approved">Not Approved</option>
    </select>
<input type="submit" name="Add" id="" class="form-control btn btn-primary my-2">
</form>
</div>


        <!-- Footer -->
<?php 
@include "./components/footer.php";
// Processing form data
if(isset($_POST["Add"])){
$model = $_POST["model"];
$price = $_POST["price"];
$brand = $_POST["brand"];
$stock = $_POST["stock"];
$ptaStatus = $_POST["ptaStatus"];

 if ($model  != "" && $price > 0 && $brand  != "" && $stock > 0   && $ptaStatus!= "") {   
$addMobileQuery="INSERT INTO `mobiles`( `model`, `price`, `brand`, `stock`, `ptaStatus`) VALUES ('$model',$price,'$brand',$stock,'$ptaStatus')";
$result = mysqli_query($conn, $addMobileQuery);
if($result){
  echo "<script>
  alert('Product added succesfully..!');
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

?>

<!-- Footer -->

