<?php
$active = 'MY ACCOUNT';
include("includes/header.php");

?>

<!-- Welcome -->
<div class="welcome_blog">
	<div class="container-fluid">
		<div class="row">
			<div class="title text-about-us">
				<h3>MY ACCOUNT</h3>
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
						<li class="">My Account</li>
					</ul> <!-- breadcrumb finish -->

				</div>
			</div>
		</div>
	</div>

	<div id="content_account"> <!-- #content begin -->
		<div class="container-fluid"> <!-- container begin -->

			<div class="col-md-8"> <!-- col-md-8 begin -->

				<?php 

				if(isset($_GET['my_orders'])) {
					include('my_orders.php');
				}

				?>

				<?php 

				if(isset($_GET['pay_offline'])) {
					include('pay_offline.php');
				}

				?>

				<?php 

				if(isset($_GET['edit_account'])) {
					include('edit_account.php');
				}

				?>

				<?php 

				if(isset($_GET['change_pass'])) {
					include('change_pass.php');
				}

				?>

				<?php 

				if(isset($_GET['delete_account'])) {
					include('delete_account.php');
				}

				?>

			</div> <!-- col-md-8 finish -->

			<div class="col-md-4"> <!-- col-md-4 begin -->

				<?php 

				include("includes/sidebar.php");

				?>

			</div> <!-- col-md-4 finish -->

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

<script>
	$(document).ready(function() {
		$('.owl-carousel-events').owlCarousel({
			items: 1,
			loop: true,
			nav: true,
			navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>']
		});
		$('.owl-review').owlCarousel({
			items: 1,
			loop: true,
			nav: true,
			navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>']
		});
	});
</script> 
</body>
</html>