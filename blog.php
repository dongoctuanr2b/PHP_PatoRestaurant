<?php

$active = 'BLOG';
include("includes/header.php");

?>

<!-- Welcome -->
<div class="welcome_blog">
	<div class="container-fluid">
		<div class="row">
			<div class="title text-about-us">
				<h3>BLOG</h3>
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
						<li class="">Blog</li>
					</ul> <!-- breadcrumb finish -->

				</div>
			</div>
		</div>
	</div>

	<!-- categories -->
	<div class="categories">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="blog-col-8">
						<div class="logo-blog">
							<p>20</p>
							<span>Dec, 2018</span>
						</div>
						<div class="col-intro">
							<div class="img-col-blog">	
								<a href=""><img class="img-responsive" src="images/images-blog/blog-05.jpg" alt=""></a>
							</div>	
							<a href=""><h3>COOKING RECIPE DELICIOUS</h3></a>
							<span>by Admin &nbsp;|&nbsp; 28 December, 2018 &nbsp;|&nbsp; Cooking, Food &nbsp;|&nbsp; 8 Comments</span>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius</p>
							<a href="index.php"><button class="btn btn-lg btn-learn-more">CONTINUE READING &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>
					</div>
					<div class="blog-col-8">
						<div class="logo-blog">
							<p>20</p>
							<span>Dec, 2018</span>
						</div>
						<div class="col-intro">	
							<div class="img-col-blog">						
								<a href=""><img class="img-responsive" src="images/images-blog/blog-06.jpg" alt=""></a>
							</div>
							<a href=""><h3>PIZZA IS PREPARED FRESH</h3></a>
							<span>by Admin &nbsp;|&nbsp; 20 December, 2018 &nbsp;|&nbsp; Cooking, Food &nbsp;|&nbsp; 8 Comments</span>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius</p>
							<a href="index.php"><button class="btn btn-lg btn-learn-more">CONTINUE READING &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>
					</div>
					<div class="blog-col-8">
						<div class="logo-blog">
							<p>20</p>
							<span>Dec, 2018</span>
						</div>
						<div class="col-intro">	
							<div class="img-col-blog">						
								<a href=""><img class="img-responsive" src="images/images-blog/blog-04.jpg" alt=""></a>
							</div>
							<a href=""><h3>STYLE THE WEDDING PARTY</h3></a>
							<span>by Admin &nbsp;|&nbsp; 16 December, 2018 &nbsp;|&nbsp; Cooking, Food &nbsp;|&nbsp; 8 Comments</span>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius</p>
							<a href="index.php"><button class="btn btn-lg btn-learn-more">CONTINUE READING &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>
					</div>
					<div class="blog-col-8">
						<div class="logo-blog">
							<p>20</p>
							<span>Dec, 2018</span>
						</div>
						<div class="col-intro">	
							<div class="img-col-blog">						
								<a href=""><img class="img-responsive" src="images/images-blog/blog-07.jpg" alt=""></a>
							</div>
							<a href=""><h3>BEST PLACES FOR WINE</h3></a>
							<span>by Admin &nbsp;|&nbsp; 15 December, 2018 &nbsp;|&nbsp; Cooking, Food &nbsp;|&nbsp; 8 Comments</span>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius</p>
							<a href="index.php"><button class="btn btn-lg btn-learn-more">CONTINUE READING &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>
					</div>
					<div class="blog-col-8">
						<div class="logo-blog">
							<p>20</p>
							<span>Dec, 2018</span>
						</div>
						<div class="col-intro wine">
							<div class="img-col-blog">							
								<a href=""><img class="img-responsive" src="images/images-blog/blog-10.jpg" alt=""></a>
							</div>
							<a href=""><h3>BEST PLACES FOR WINE</h3></a>
							<span>by Admin &nbsp;|&nbsp; 12 December, 2018 &nbsp;|&nbsp; Cooking, Food &nbsp;|&nbsp; 8 Comments</span>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius</p>
							<a href="index.php"><button class="btn btn-lg btn-learn-more">CONTINUE READING &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>
					</div>
					<div class="page-blog">
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
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