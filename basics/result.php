
<?php 
if(isset($_REQUEST['login'])){
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
if ($email  != null && $password !=null) {
    # code...
    echo "<script>alert('login success to $email with $password')</script>";
    } else {
    echo "<script>alert('Please fill all fields')</script>";
    # code...
}
}


?>