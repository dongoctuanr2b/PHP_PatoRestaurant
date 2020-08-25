<?php

$active = 'MY ACCOUNT';
include("includes/header.php");

?>

<!-- Welcome -->
<div class="welcome_blog">
	<div class="container-fluid">
		<div class="row">
			<div class="title text-about-us">
				<h3>	
					<?php

					if(isset($_SESSION['customer_email'])){

						echo "PAYMENT";

					}else{

						echo "LOGIN";

					}
					
					?>

				</h3>
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
						<li class="">

							<?php

							if(isset($_SESSION['customer_email'])){

								echo "Payment";

							}else{

								echo "Login";

							}

							?>

						</li>
					</ul> <!-- breadcrumb finish -->

				</div>
			</div>
		</div>
	</div>

	<div id="content_register"> <!-- #content begin -->
		<div class="container-fluid"> <!-- container begin -->
			<div class="row">
				<div class="col-md-8"> <!-- col-md-8 begin -->

					<?php

					if(isset($_SESSION['customer_email'])){

						include("payment_options.php");

					}else{

						include("customer/customer_login.php");

					}

					?>

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
