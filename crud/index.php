      <?php 
@include_once "./components/navbar.php";
@require_once "../config/connection.php";

?>
 
 <main class="container">
        <h1>CRUD Operations</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Model</th>
      <th scope="col">Brand</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
      <th scope="col">Pta Status</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>

        <?php 
        
        $getMobiles="SELECT * FROM `mobiles` WHERE 1";
        if($conn){
            $result= mysqli_query($conn, $getMobiles);
            if(mysqli_num_rows($result)> 0){
                  while($row= mysqli_fetch_assoc($result)){
                        $model = $row["model"];

                        echo  "<tr>
      <th scope='row'>
      {$row["id"]}</th>
      <td>$model</td>
      <td>{$row["brand"]}</td>
      <td>{$row["price"]}</td>
      <td>{$row["stock"]}</td>
      <td>{$row["ptaStatus"]}</td>
      <td>
            <a href='./edit.php?id={$row["id"]}' class='btn btn-sm btn-primary'>Edit</a>
            <a href='./delete.php?id={$row["id"]}' class='btn btn-sm btn-danger'>Delete</a>

      </td>

    </tr>";

                  }
            }else{
                  echo "<h1 class='text-center text-danger'>No mobiles found</h1>";
            }
        }


        ?>
        
  </tbody>
</table>



        </main>
        <!-- Footer -->
<?php 
@include "./components/footer.php";
?>

<!-- Footer -->
      