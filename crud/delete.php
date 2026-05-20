<?php 
@require_once "../config/connection.php";
if (isset($_GET['id'])) {
     $id = $_GET["id"];

$deleteQuery = "DELETE FROM `mobiles` WHERE id = $id";
$result = mysqli_query($conn , $deleteQuery);

if($result){
    echo "<script>
    alert('Mobile deleted successfully..!');
    window.location.href='./index.php';
    </script>";
}else{
    echo "<script>
    alert('Something went wrong🤡. Please try again later🙂..!');
    window.location.href='./index.php';
    </script>";
}

} else {
    echo "<script>
    alert('Invalid mobile id. Please try again later🤡..!');
        window.location.href='./index.php';
    </script>";
}

?>