<?php

session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<?php

if(isset($_GET['food_id'])){

	$food_id = $_GET['food_id'];

	$get_food = "select * from foods where food_id='$food_id'";

	$run_food = mysqli_query($conn,$get_food);

	$row_food = mysqli_fetch_array($run_food);

	$f_cat_id = $row_food['f_cat_id'];

	$food_name = $row_food['food_name'];

	$food_price = $row_food['food_price'];

	$food_date = $row_food['date'];

	$food_desc = $row_food['food_desc'];

	$food_img1 = $row_food['food_img1'];

	$food_img2 = $row_food['food_img2'];

	$food_img3 = $row_food['food_img3'];

	$get_f_cat = "select * from food_categories where f_cat_id='$f_cat_id'";

	$run_f_cat = mysqli_query($conn,$get_f_cat);

	$row_f_cat = mysqli_fetch_array($run_f_cat);

	$f_cat_name = $row_f_cat['f_cat_name'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Home</title>
	<!-- icon in the title bar -->
	<link rel="icon" href="images/icons/favicon.png">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<!-- Owl-Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="css/all.min.css">

	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- My-style -->
	<link rel="stylesheet" href="css/stylee.css">
</head>
<body>
	<header>
		<!-- Navbar -->
		<div class="nav-main">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2">
						<div class="logo_welcome">
							<a href="#" class="btn btn-success btn-sm">
								
								<?php

								if(isset($_SESSION['customer_email'])){

									echo "Welcome: " . $_SESSION['customer_email'] . "";

								}else{

									echo "Welcome to Pato Restaurant";

								}

								?>

							</a>
						</div>
						<div class="logo">
							<ul>
								<a href="index.php"><img src="images/icons/logo.png" alt=""></a>
							</ul>
						</div>
					</div>
					<div class="col-md-8">
						<nav class="navbar navbar-default nav-menu" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">

									<button type="button" class="navbar-toggle nav-span" data-toggle="collapse" data-target=".main-home-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse main-home-collapse">
									<ul class="main-home clearfix">
										<li class="<?php if($active == 'HOME') echo"active"; ?>">
											<a href="index.php">HOME</a>
										</li>
										<li class="<?php if($active == 'MENU') echo"active"; ?>">
											<a href="menu.php">MENU</a>
										</li>
										<li class="<?php if($active == 'RESERVATION') echo"active"; ?>">
											<a href="reservation.php">RESERVATION</a>
										</li>
										<li class="<?php if($active == 'GALLERY') echo"active"; ?>">
											<a href="gallery.php">GALLERY</a>
										</li>
										<li class="<?php if($active == 'MY ACCOUNT') echo"active"; ?>">

											<?php

											if(!isset($_SESSION['customer_email'])){

												echo "<a href='checkout.php'>MY ACCOUNT</a>";

											}else{

												echo "<a href='customer/my_account.php?my_orders'>MY ACCOUNT</a>";

											}

											?>
											
										</li>
										<li class="<?php if($active == 'BLOG') echo"active"; ?>">
											<a href="blog.php">BLOG</a>
										</li>
										<li class="<?php if($active == 'CONTACT') echo"active"; ?>">
											<a href="contact.php">CONTACT</a>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
							</div>
						</nav>
					</div>
					<div class="col-md-2">
						<div class="icon">
							<ul>

								<li><a href="register.php"><i class="far fa-registered"></i>egister</a></li>
								<li>
									<a href="checkout.php">

										<?php

										if(isset($_SESSION['customer_email'])){

											echo "<a href='logout.php'><i class='fas fa-sign-out-alt'></i> Log Out</a>";

										}else{

											echo "<a href='checkout.php'><i class='fas fa-sign-in-alt'></i> Login</a>";

										}

										?>
										
									</a>
								</li>
								<li>

								<?php

									$item = 0;

									$total = 0;

									if(isset($_SESSION['cart'])){

										$cart = $_SESSION['cart'];

										foreach ($cart as $value) {
			
											$item = count($cart);

											$total += $value["food_qty"] * $value["food_price"];

										}

									}

									?>

									<a href="cart.php" class="btn navbar-btn btn-primary right"> <!-- btn navbar-btn btn-primary right begin -->

										<i class="fa fa-shopping-cart"></i>

										<span> <?php echo $item; ?> Foods | Total: $<?php echo $total; ?></span>
									</a> <!-- btn navbar-btn btn-primary right finish -->

								</li>
							</ul>
						</div>
					</div>
				</div><!-- /.row-navbar -->
			</div> <!-- /.container-navbar -->
		</div>
	</header>
