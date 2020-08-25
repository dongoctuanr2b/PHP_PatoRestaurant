<?php

$active = 'MY ACCOUNT';
include("includes/header.php");

?>

<!-- Welcome -->
<div class="welcome_blog">
	<div class="container-fluid">
		<div class="row">
			<div class="title text-about-us">
				<h3>REGISTER</h3>
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
						<li class="">Register</li>
					</ul> <!-- breadcrumb finish -->

				</div>
			</div>
		</div>
	</div>

	<div id="content_register"> <!-- #content begin -->
		<div class="container-fluid"> <!-- container begin -->
			<div class="row">
				<div class="col-md-8"> <!-- col-md-8 begin -->

					<div class="box"> <!-- box begin -->

						<div class="box-header"> <!-- box-header begin -->

							<center> <!-- center begin -->

								<h2>

									Register a new account

								</h2>

							</center> <!-- center finish -->

							<form action="register.php" method="post" enctype="multipart/form-data"> <!-- form begin -->
								<div class="col-md-6 register_left">
									<div class="form-group row"> <!-- form-group begin -->

										<label>Your Name</label>

										<input type="text" class="form-control width-250" name="c_name" required>

									</div> <!-- form-group finish -->

									<div class="form-group row"> <!-- form-group begin -->

										<label>Your Email</label>

										<input type="email" class="form-control width-250" name="c_email" required>

									</div> <!-- form-group finish -->

									<div class="form-group row"> <!-- form-group begin -->

										<label>Your Password</label>

										<input type="password" class="form-control width-250" name="c_pass" required>

									</div> <!-- form-group finish -->

									<div class="form-group row"> <!-- form-group begin -->

										<label>Your Country</label>

										<input type="text" class="form-control width-250" name="c_country" required>

									</div> <!-- form-group finish -->
								</div>

								<div class="col-md-6 register_right">
									<div class="form-group row"> <!-- form-group begin -->

										<label>Your City</label>

										<input type="text" class="form-control width-250" name="c_city" required>

									</div> <!-- form-group finish -->

									<div class="form-group row"> <!-- form-group begin -->

										<label>Your Contact</label>

										<input type="text" class="form-control width-250" name="c_contact" required>

									</div> <!-- form-group finish -->

									<div class="form-group row"> <!-- form-group begin -->

										<label>Your Address</label>

										<input type="text" class="form-control width-250" name="c_address" required>

									</div> <!-- form-group finish -->

									<div class="form-group row"> <!-- form-group begin -->

										<label>Your Profile Picture</label>

										<input type="file" class="form-control width-250 form-height-custom" name="c_image" required>

									</div> <!-- form-group finish -->
								</div>
								<div class="text-center"> <!-- text-center begin -->

									<button type="submit" name="submit" class="btn btn-lg btn-learn-more">

										<i class="fa fa-user-md"></i> Register

									</button>

								</div> <!-- text-center finish -->

							</form> <!-- form finish -->

						</div> <!-- box-header finish -->

					</div> <!-- box finish -->

				</div> <!-- col-md-8 begin -->


				<div class="col-md-4"> <!-- col-md-4 begin -->

					<?php 

					include("includes/sidebar.php");

					?>

				</div> <!-- col-md-4 finish -->
			</div>

		</div> <!-- container finish -->
	</div> <!-- #content finish -->

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

if(isset($_POST['submit'])){

	$c_name = $_POST['c_name'];

	$c_email = $_POST['c_email'];

	$c_pass = $_POST['c_pass'];

	$c_country = $_POST['c_country'];

	$c_city = $_POST['c_city'];

	$c_contact = $_POST['c_contact'];

	$c_address = $_POST['c_address'];

	$c_img = $_FILES['c_image']['name'];

	$c_img_tmp = $_FILES['c_image']['tmp_name'];

	move_uploaded_file($c_img_tmp, "customer/customer_images/$c_img");

	$insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_img) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_img')";

	$run_customer = mysqli_query($conn,$insert_customer);

	$select_cart = "select * from food_cart where f_id";

	$run_cart = mysqli_query($conn,$select_cart);

	$check_cart = mysqli_num_rows($run_cart);

	if($check_cart>0){

		$_SESSION['customer_email'] = $c_email;

		echo "<script>alert('Bạn đã đăng ký tài khoản thành công!')</script>";

		echo "<script>window.open('checkout.php','_self')</script>";

	}else{

		$_SESSION['customer_email'] = $c_email;

		echo "<script>alert('Bạn đã đăng ký tài khoản thành công!')</script>";

		echo "<script>window.open('index.php','_self')</script>";

	}

}

?>