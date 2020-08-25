<?php

$active = 'MENU';
include("includes/header.php");

?>

<!-- Welcome -->
<div class="welcome_menu">
	<div class="container-fluid">
		<div class="row">
			<div class="title text-about-us">
				<h3>MENU</h3>
			</div>
		</div>
	</div> <!-- /.container-welcome -->
</div>

<main>

	<!-- Italian restaurant -->
	<div class="bg-italian-menu">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 font-italian-menu">
					<div class="title">
						<span>Italian Restaurant</span>
						<h3>OUR STORY</h3>
					</div>
					<p>Fusce at risus eget mi auctor pulvinar. Suspendisse maximus venenatis pretium. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam purus purus, lacinia a scelerisque in, luctus vel felis. Donec odio diam, dignissim a efficitur at, efficitur et est. Pellentesque semper est ut pulvinar ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla et leo accumsan, egestas velit ac, fringilla tortor. Sed varius justo sed luctus mattis.</p>
				</div>
			</div><!-- /.row-italian -->
		</div>
	</div>

	<div class="menu_main">

		<div class="row">

			<div class="col-md-8">

				<?php

				if(!isset($_GET['f_cat_id'])){

				?>

				<!-- two-menu -->
				<div class="pato-bg-img_menu">

					<div class="row">
						<div class="col-md-12">
							<div class="title title-pato-bg-img">
								<h3>LUNCH</h3>
							</div>
						</div>
					</div>

				</div>

				<!-- three-menu -->
				<div class="three-menu">
					<div class="container-fluid">
						<div class="row">
							<?php

							getFoodLunch();

							?>

						</div>
					</div>

				</div>

				<!-- four-menu -->
				<div class="bg-four">

					<div class="row">
						<div class="col-md-12">
							<div class="title title-pato-bg-img">
								<h3>DINNER</h3>
							</div>
						</div>
					</div>

				</div>

				<!-- five-menu -->
				<div class="three-menu">
					<div class="container-fluid">
						<div class="row">
							<?php

							getFoodDinner();

							?>
						</div>
					</div>
				</div>

				<!-- six-menu -->
				<div class="bg-six">

					<div class="row">
						<div class="col-md-12">
							<div class="title title-pato-bg-img">
								<h3>HAPPY HOUR</h3>
							</div>
						</div>
					</div>

				</div>

				<!-- seven-menu -->
				<div class="three-menu">
					<div class="container-fluid">
						<div class="row">
							<?php

							getFoodHappy();

							?>
						</div>
					</div>
				</div>

				<?php }else{ ?>

					<!-- two-menu -->
					<div class="pato-bg-img_menu">

					<div class="row">
						<div class="col-md-12">
							<div class="title title-pato-bg-img">
								<h3>LUNCH</h3>
							</div>
						</div>
					</div>

				</div>

				<!-- three-menu -->
				<div class="three-menu">
					<div class="container-fluid">
						<div class="row">
							<?php

							getfcatL();

							?>

						</div>
					</div>

				</div>

				<!-- four-menu -->
				<div class="bg-four">

					<div class="row">
						<div class="col-md-12">
							<div class="title title-pato-bg-img">
								<h3>DINNER</h3>
							</div>
						</div>
					</div>

				</div>

				<!-- five-menu -->
				<div class="three-menu">
					<div class="container-fluid">
						<div class="row">
							<?php

							getfcatD();

							?>
						</div>
					</div>
				</div>

				<!-- six-menu -->
				<div class="bg-six">

					<div class="row">
						<div class="col-md-12">
							<div class="title title-pato-bg-img">
								<h3>HAPPY HOUR</h3>
							</div>
						</div>
					</div>

				</div>

				<!-- seven-menu -->
				<div class="three-menu">
					<div class="container-fluid">
						<div class="row">
							<?php

							getfcatHH();

							?>
						</div>
					</div>
				</div>

				<?php } ?>

			</div>

			<div class="col-md-4">

				<?php include("includes/sidebar.php"); ?>

			</div>
		</div>

	</div>

	<!-- SIGN UP -->
	<div class="sign-up">

		<div class="row">
			<div class="col-md-12">
				<form action="" method="POST" class="form-inline form-center" role="form">
					<div class="form-group text-sign-up">
						<h3>SPECIALS SIGN UP</h3>
					</div>
					<div class="form-group">
						<label class="sr-only control-label" for="">label</label>
						<div class="input-group input-width-80">
							<input type="email" class="form-control input-sign-up" id="" placeholder="Email Adress">
							<div class="input-group-addon icon-mail"><i class="fas fa-envelope"></i></div>
						</div>
					</div>
					<button type="submit" class="btn btn-sign-up">SIGN-UP</button>
				</form>
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