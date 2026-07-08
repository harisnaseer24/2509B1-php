<?php 
@include_once("./components/header.php");
@require_once('../config/connection.php');

$getCategories="SELECT * FROM `categories` WHERE 1";
$getCategoriesResult=mysqli_query($conn,$getCategories);

$getProducts="SELECT * FROM `products` as p
INNER join categories as c
ON p.cat_id=c.cat_id
WHERE p.status=1;";
$getProductsResult=mysqli_query($conn,$getProducts);;





?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">


							<?php 
							while($row1=mysqli_fetch_assoc($getCategoriesResult)){
								$cat_id=$row1['cat_id'];
								$cat_name=$row1['cat_name'];
								$cat_desc=$row1['cat_desc'];
							
							
							?>
								<div class="input-checkbox">
									<input type="checkbox" id="	<?= $cat_id ?>">
									<label for="category-1">
										<span></span>
										<?= $cat_name ?>
									
									</label>
								</div>
<?php 

							}
?>
								
							</div>
						</div>
						<!-- /aside Widget -->

					
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
<?php
while($row=mysqli_fetch_assoc($getProductsResult)){
								$p_id=$row['p_id'];
								$title=$row['title'];
								$oldprice=doubleval($row['price'] ) * 1.3;
							
							
							
							?>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="../Admin/uploads/<?= $row["image"] ?>" alt="" height="250" >
										<div class="product-label">
											<span class="sale">-30%</span>
											<span class="new">

											<?php 
											
											if($row["stock"] > 0){
												echo "In Stock";
											}
											else{
												echo "Out of Stock";
											}
											
											?>

											</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category"><?= $row["cat_name"] ?></p>
										<h3 class="product-name"><a href="./productDetails.php?p_id=<?= $p_id ?>"><?= $title ?></a></h3>
										<h4 class="product-price">Rs. <?= $row["price"] ?> <del class="product-old-price">
										Rs.	<?= $oldprice ?>
										</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>
							<!-- /product -->

						
<?php 

}
?>
						


							
						
							

							<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>

							

							

							<div class="clearfix visible-sm visible-xs"></div>

						
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?php 
@include_once("./components/footer.php");

?>