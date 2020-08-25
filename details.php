<?php

$active = 'DETAILS';
include("includes/header.php");

?>

<!-- Welcome -->
<div class="welcome_blog">
	<div class="container-fluid">
		<div class="row">
			<div class="title text-about-us">
				<h3>DETAILS</h3>
			</div>
		</div>
	</div> <!-- /.container-welcome -->
</div>

<main>

	<!-- navbar-blog -->
	<div class="navbar-blog">
		<div class="container-fluid">
			<div class="row">
				<div class="home-blog">	

					<ul class="breadcrumb"> <!-- breadcrumb begin -->
						<li class=""><a href="index.php">Home</a></li>
						<li class="">Food Details</li>
						<li>
							
							<a href="menu.php?f_cat_id=<?php echo $f_cat_id; ?>"><?php echo $f_cat_name; ?></a>

						</li>
						<li><?php echo $food_name; ?></li>
					</ul> <!-- breadcrumb finish -->

				</div>
			</div>
		</div>
	</div>

	<!-- categories -->
	<div class="categories">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8"><!-- col-md-8 begin -->
					<div class="blog-col-8"><!-- blog-col-8 begin -->
						<div class="logo-blog">
							<p> 
								<?php echo $food_date; ?>
							</p>
						</div>
						<div class="col-intro"><!-- col-intro begin -->
							<div id="mainImage"><!-- #mainImage begin -->
								<div id="myCarousel" class="carousel slide img-col-blog" data-ride="carousel"><!-- #myCarousel begin -->
									<ol class="carousel-indicators"><!-- carousel-indicators begin -->
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
									</ol><!-- carousel-indicators begin -->

									<div class="carousel-inner">
										<div class="item active">
											<a href=""><img class="img-responsive" src="admin_area/product_images/<?php echo $food_img1; ?>" alt="food 1"></a>
										</div>
										<div class="item">
											<a href=""><img class="img-responsive" src="admin_area/product_images/<?php echo $food_img2; ?>" alt="food 2"></a>
										</div>
										<div class="item">
											<a href=""><img class="img-responsive" src="admin_area/product_images/<?php echo $food_img3; ?>" alt="food 3"></a>
										</div>
									</div>

									<a href="#myCarousel" class="left carousel-control" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a href="#myCarousel" class="right carousel-control" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Next</span>
									</a>
								</div><!-- #myCarousel finish -->
							</div><!-- #mainImage finish -->
							<div class="row" id="thumbs">
								<div class="col-xs-4">
									<div class="thumbs_radius">
										<a data-target="#myCarousel" data-slide-to="0" href="" class="thumb">
											<img src="admin_area/product_images/<?php echo $food_img1; ?>" alt="food 1" class="img-responsive">
										</a>
									</div>
								</div>

								<div class="col-xs-4">
									<div class="thumbs_radius">
										<a data-target="#myCarousel" data-slide-to="1" href="" class="thumb">
											<img src="admin_area/product_images/<?php echo $food_img2; ?>" alt="food 2" class="img-responsive">
										</a>
									</div>
								</div>

								<div class="col-xs-4">
									<div class="thumbs_radius">
										<a data-target="#myCarousel" data-slide-to="2" href="" class="thumb">
											<img src="admin_area/product_images/<?php echo $food_img3; ?>" alt="food 3" class="img-responsive">
										</a>
									</div>
								</div>
							</div>
							<a href="menu.php?f_cat_id=<?php echo $f_cat_id; ?>"><h3><?php echo $food_name; ?></h3></a>
							<span>by Admin &nbsp;|&nbsp; <?php echo $food_date . '&nbsp; | &nbsp;' . $f_cat_name; ?> &nbsp;|&nbsp; 8 Comments</span>
							<p><?php echo $food_desc; ?></p>
						</div><!-- col-intro finish -->
						<div class="box"><!-- box begin -->

							<form action="details.php?food_id=<?php echo $food_id ?>" class="form-horizontal" method="post">
								<div class="form-group">
									<label for="" class="col-md-5 control-label">
										Foods Quantity
									</label>
									<div class="col-md-5">
										<select name="food_qty" id="" class="form-control width-250">
											<option value="" disabled selected>Select a quantity</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-md-5 control-label">Food Size</label>
									<div class="col-md-5">
										<select name="food_size" id="" class="form-control width-250" oninput="setCustomValidity('')" oninvalid="setCustomValidity('Bạn phải chọn 1 size cho đồ ăn')" required>
											<option value="" disabled selected>Select a size</option>
											<option value="Small">Small</option>
											<option value="Medium">Medium</option>
											<option value="Large">Large</option>
										</select>
									</div>
								</div>

								<p class="price text-center"> $ <?php echo $food_price; ?> </p>

								<p class="text-center button">
									<input type="hidden" name="food_img1" value="<?php echo $food_img1; ?>">
									<input type="hidden" name="food_name" value="<?php echo $food_name; ?>">
									<input type="hidden" name="food_price" value="<?php echo $food_price; ?>">
									<input type="submit" name="add_to_cart" class="btn btn-lg btn-learn-more" value="ADD TO CART">
								</p>
							</form>
						</div><!-- box finish -->

						<div id="row same-height-row"> <!-- #row same-height-row begin -->
							<div class='col-xs-4'> <!-- col-md-3 col-sm-6 begin -->
								<div class='box same-height headline'> <!-- box same-height headline begin -->
									<h2 class='text-center'>Foods You Maybe Like</h2>
								</div> <!-- box same-height headline finish -->
							</div> <!-- col-md-3 col-sm-6 finish -->

							<?php

							$get_food = "select * from foods order by rand() LIMIT 0,5";

							$run_food = mysqli_query($conn,$get_food);

							while($row_food=mysqli_fetch_array($run_food)){

								$food_id = $row_food['food_id'];

								$food_name = $row_food['food_name'];

								$food_img1 = $row_food['food_img1'];

								$food_price = $row_food['food_price'];

								echo "

								<div class='col-xs-4 center-responsive'> <!-- col-md-3 col-sm-6 center-responsive begin -->
									<div class='product same-height'> <!-- product same-height begin -->
										<div class='same-radius'>
											<a href='details.php?food_id=$food_id'>
												<img src='admin_area/product_images/$food_img1' class='img-responsive'>
											</a>
										</div>
										<div class='text'> <!-- text begin -->
											<h3><a href='details.php?food_id=$food_id'> $food_name </a></h3>

												<p class='price'> $ $food_price </p>

										</div> <!-- text finish -->

									</div> <!-- product same-height finish -->
								</div> <!-- col-md-3 col-sm-6 center-responsive finish -->

								";

							}

							?>
							
						</div> <!-- #row same-height-row finish -->

					</div><!-- blog-col-8 finish -->
				</div><!-- col-md-8 finish -->
				<div class="col-md-4"><!-- col-md-4 begin -->
					
					<?php

					include("includes/sidebar.php");

					?>

				</div><!-- col-md-4 finish -->
			</div>
		</div>
	</div>

</main>

<footer>

	<?php

	include("includes/footer.php");

	?>
	
</footer>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- Owl-Carousel -->
<script src="js/owl.carousel.min.js"></script>

<!-- Font-Awesome -->
<script src="js/all.min.js"></script>

<!-- Wow-Js -->
<script src="js/wow.min.js"></script>

</body>
</html>

<?php


$food_ids = array();

//session_destroy();

//check if add to cart button has been submitted
if(filter_input(INPUT_POST, 'add_to_cart')){

	if(isset($_SESSION['cart'])){

		//đếm giỏ hàng xem có bao nhiêu sản phẩm
		$count_cart = count($_SESSION['cart']);

		$food_ids = array_column($_SESSION['cart'], 'food_id');

		if(!in_array(filter_input(INPUT_GET, 'food_id'), $food_ids)){

			$_SESSION['cart'][$count_cart] = array(

				'food_id' => filter_input(INPUT_GET, 'food_id'),
				'food_img1' => filter_input(INPUT_POST, 'food_img1'),
				'food_name' => filter_input(INPUT_POST, 'food_name'),
				'food_price' => filter_input(INPUT_POST, 'food_price'),
				'food_qty' => filter_input(INPUT_POST, 'food_qty'),
				'food_size' => filter_input(INPUT_POST, 'food_size')

			);

		}else{

			//nếu tồn tại mảng thì tăng số lượng sản phẩm khớp với food_id của sản phẩm
			for($i = 0; $i < count($food_ids); $i++){

				if($food_ids[$i] == filter_input(INPUT_GET, 'food_id')){

					//thêm số lượng sản phẩm đang tồn tại trong mảng
					$_SESSION['cart'][$i]['food_qty'] += filter_input(INPUT_POST, 'food_qty');

				}

			}

		}

	}else{ 
	
		$_SESSION['cart'][0] = array(

			'food_id' => filter_input(INPUT_GET, 'food_id'),
			'food_img1' => filter_input(INPUT_POST, 'food_img1'),
			'food_name' => filter_input(INPUT_POST, 'food_name'),
			'food_price' => filter_input(INPUT_POST, 'food_price'),
			'food_qty' => filter_input(INPUT_POST, 'food_qty'),
			'food_size' => filter_input(INPUT_POST, 'food_size')

		);

	}

}

//pre_r($_SESSION);

/*function pre_r($array){

	echo "<pre>";
	print_r($array);

}*/

?>