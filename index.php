<?php

$active = 'HOME';
include("includes/header.php");

?>

<!-- Slider-Welcome -->
<div class="welcome">
	<div class="container-fluid">
		<div class="row">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<ol class="dot carousel-indicators">
					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
					<li data-target="#carousel-id" data-slide-to="1" class=""></li>
					<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner h1-size">

					<?php

					$get_slides = "select * from slider LIMIT 0,1";
					$run_slides = mysqli_query($conn,$get_slides);

					while($row_slides=mysqli_fetch_array($run_slides)){

						$slide_name = $row_slides['slide_name'];
						$slide_image = $row_slides['slide_image'];

						echo "

						<div class='item active'>
						<img class='img-blur' src='admin_area/slides_images/$slide_image' alt=''>
						<div class='container'>
						<div class='carousel-caption'>
						<h4 class='animated fadeInDownBig delay-.5s'>Welcome to</h4>
						<h2 class='animated fadeInUpBig delay-1s'>PATO PLACE</h2>
						<p class='look-menu animated jackInTheBox delay-2s'><a class='btn btn-lg' href='#'' role='button'>LOOK MENU</a></p>
						</div>
						</div>
						</div>

						";
					}

					$get_slides = "select * from slider LIMIT 1,2";
					$run_slides = mysqli_query($conn,$get_slides);

					while($row_slides=mysqli_fetch_array($run_slides)){

						$slide_name = $row_slides['slide_name'];
						$slide_image = $row_slides['slide_image'];

						echo "

						<div class='item'>
						<img class='img-blur' src='admin_area/slides_images/$slide_image' alt=''>
						<div class='container'>
						<div class='carousel-caption'>
						<h4 class='animated fadeInDownBig delay-.5s'>Welcome to</h4>
						<h2 class='animated fadeInUpBig delay-1s'>PATO PLACE</h2>
						<p class='look-menu animated jackInTheBox delay-2s'><a class='btn btn-lg' href='#'' role='button'>LOOK MENU</a></p>
						</div>
						</div>
						</div>

						";
					}

					?>

				</div><!-- /.carousel-inner -->
				<a class="arrow left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-menu-left"></span></a>
				<a class="arrow right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-menu-right"></span></a>
			</div><!-- /#carousel-id-welcome -->
		</div>
	</div> <!-- /.container-welcome -->
</div>


<main>

	<!-- Italian restaurant -->
	<div class="bg-italian">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 font-italian">
					<div class="title">
						<span>Italian Restaurant</span>
						<h3>WELCOME</h3>
					</div>
					<p>Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.</p>
					<a class="btn-story" href="about.php"><button class="btn btn-lg btn-story">OUR STORY &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button></a>
				</div>
				<div class="col-md-6">
					<div class="img-italian">
						<img class="img-responsive" src="images/our-story-01.jpg" alt="">
					</div>
				</div>
			</div><!-- /.row-italian -->
		</div><!-- /.container-italian -->
	</div>

	<!-- Intro -->
	<div class="intro">
		<div class="pato-bg-img">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="title title-pato-bg-img">
							<span>Discover</span>
							<h3>PATO PLACE</h3>
						</div>
					</div>
				</div>
			</div><!-- /.container-bg-img -->
		</div>
		<div class="intro-menu">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<div class="col-intro romantic">
							<div class="img-intro">
								<a href=""><img class="img-responsive" src="images/IMG_7842-720x428.jpg" alt=""></a>
							</div>
							<a href=""><h3>ROMANTIC RESTAURANT</h3></a>
							<p>Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.</p>
							<a class="learn-more" href="index.php"><button class="btn btn-lg btn-learn-more">LEARN MORE &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-intro food">
							<div class="img-intro">
								<a href=""><img class="img-responsive" src="images/DSC3281-720x428-1.jpg" alt=""></a>
							</div>
							<a href=""><h3>DELICIOUS FOOD &nbsp;</h3></a>
							<p>Aliquam eget aliquam magna, quis posuere risus ac justo ipsum nibh urna</p>
							<a class="learn-more" href="index.php"><button class="btn btn-lg btn-learn-more">LEARN MORE &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-intro red-wines">
							<div class="img-intro">
								<a href="#"><img class="img-responsive" src="images/canh-bao-luong-nicotine-trong-xi-ga-nhieu-hon-trong-thuoc-la-a-1023.jpg" alt=""></a>
							</div>
							<a href="#"><h3>RED WINES YOU LOVE</h3></a>
							<p>Sed ornare ligula eget tortor tempor, quis porta tellus dictum.</p>
							<a class="learn-more" href="index.php"><button class="btn btn-lg btn-learn-more">LEARN MORE &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>
					</div>
				</div><!-- /.row-intro -->
			</div><!-- /.container-intro -->
		</div>
	</div>

	<!-- OUR-MENU -->
	<div class="our-menu">
		<div class="container-fluid">
			<div class="row">
				<div class="title">
					<span>Discover</span>
					<h3>OUR MENU</h3>
				</div>
				<div class="container">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6">
								<div class="main-our-menu">
									<div id="carousel-id" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">		
											<div class="item active padding-30">
												<div class="img-our-menu">
													<img class="img-responsive" src="images/our-menu-01.jpg" alt="">
												</div>
												<div class="container">
													<div class="carousel-caption">
														<p><a class="btn btn-lg btn-center-lunch" href="#" role="button">LUNCH</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="main-our-menu">
									<div id="carousel-id" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="item active padding-30">
												<div class="img-our-menu">
													<img class="img-responsive" src="images/our-menu-05.jpg" alt="">
												</div>
												<div class="container">
													<div class="carousel-caption">
														<p><a class="btn btn-lg btn-center-lunch" href="#" role="button">DINNER</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="main-our-menu">
									<div id="carousel-id" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="item active padding-30">
												<div class="img-our-menu">
													<img class="img-responsive" src="images/our-menu-13.jpg" alt="">
												</div>
												<div class="container">
													<div class="carousel-caption">
														<p><a class="btn btn-lg btn-center btn-width-255" href="#" role="button">HAPPY HOUR</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	<!-- /.col-md-8	 -->
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								<div class="main-our-menu">
									<div id="carousel-id" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">							
											<div class="item active padding-30">
												<div class="img-our-menu">
													<img class="img-responsive" src="images/our-menu-08.jpg" alt="">
												</div>
												<div class="container">
													<div class="carousel-caption">
														<p><a class="btn btn-lg btn-center" href="#" role="button">DRINK</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="main-our-menu">
									<div id="carousel-id" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">							
											<div class="item active padding-30">
												<div class="img-our-menu">
													<img class="img-responsive" src="images/our-menu-10.jpg" alt="">
												</div>
												<div class="container">
													<div class="carousel-caption">
														<p><a class="btn btn-lg btn-center" href="#" role="button">STARTERS</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="main-our-menu">
									<div id="carousel-id" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">							
											<div class="item active padding-30">
												<div class="img-our-menu">
													<img class="img-responsive" src="images/our-menu-16.jpg" alt="">
												</div>
												<div class="container">
													<div class="carousel-caption">
														<p><a class="btn btn-lg btn-center" href="#" role="button">DESSERT</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.col-md-4	 -->
				</div>
			</div><!-- /.row-our-menu -->
		</div><!-- /.container-our-menu -->
	</div>

	<!-- EVENTS -->
	<div class="events">
		<div class="container-fluid">
			<div class="row">
				<div class="title">
					<span>Upcomming</span>
					<h3>EVENTS</h3>
				</div>
				<div class="container main-events">
					<div class="owl-banner">
						<div class="owl-carousel owl-carousel-events owl-theme">

							<div class="radius-10 wow animated zoomInDown">
								<div class="row">
									<div class="col-md-6">
										<img  src="admin_area/slides_images/slide-4.jpg" alt="">
									</div>
									<div class="col-md-6">
										<div class="text-events">
											<h1>WINES DURING SPECIFIC NIGHTS</h1>
											<p>Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia</p>
											<div class="coutdown-events">
												<div class="inline-coutdown">
													<span class="number">25</span><br>
													<span class="time-events">DAYS</span>
												</div>
												<div class="inline-coutdown">
													<span class="number">12</span><br>
													<span class="time-events">HOURS</span>
												</div>
												<div class="inline-coutdown">
													<span class="number">53</span><br>
													<span class="time-events">MINUTES</span>
												</div>
												<div class="inline-coutdown"> 
													<span class="number">20</span><br>
													<span class="time-events">SECONDS</span>
												</div>
											</div>
											<p class="view-details"><a class="btn btn-lg" href="#" role="button">VIEW DETAILS &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></a></p>
										</div>
									</div>


								</div>
							</div>

							<div class="radius-10 wow animated zoomInDown">
								<div class="row">
									<div class="col-md-6">
										<img  src="admin_area/slides_images/slide-5.jpeg" alt="">
									</div>
									<div class="col-md-6">
										<div class="text-events">
											<h1>WINES DURING SPECIFIC NIGHTS</h1>
											<p>Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia</p>
											<div class="coutdown-events">
												<div class="inline-coutdown">
													<span class="number">25</span><br>
													<span class="time-events">DAYS</span>
												</div>
												<div class="inline-coutdown">
													<span class="number">12</span><br>
													<span class="time-events">HOURS</span>
												</div>
												<div class="inline-coutdown">
													<span class="number">53</span><br>
													<span class="time-events">MINUTES</span>
												</div>
												<div class="inline-coutdown"> 
													<span class="number">20</span><br>
													<span class="time-events">SECONDS</span>
												</div>
											</div>
											<p class="view-details"><a class="btn btn-lg" href="#" role="button">VIEW DETAILS &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></a></p>
										</div>
									</div>

																
								</div>
							</div>

							<div class="radius-10 wow animated zoomInDown">
								<div class="row">
									<div class="col-md-6">
										<img  src="admin_area/slides_images/slide-6.jpeg" alt="">
									</div>
									<div class="col-md-6">
										<div class="text-events">
											<h1>WINES DURING SPECIFIC NIGHTS</h1>
											<p>Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia</p>
											<div class="coutdown-events">
												<div class="inline-coutdown">
													<span class="number">25</span><br>
													<span class="time-events">DAYS</span>
												</div>
												<div class="inline-coutdown">
													<span class="number">12</span><br>
													<span class="time-events">HOURS</span>
												</div>
												<div class="inline-coutdown">
													<span class="number">53</span><br>
													<span class="time-events">MINUTES</span>
												</div>
												<div class="inline-coutdown"> 
													<span class="number">20</span><br>
													<span class="time-events">SECONDS</span>
												</div>
											</div>
											<p class="view-details"><a class="btn btn-lg" href="#" role="button">VIEW DETAILS &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></a></p>
										</div>
									</div>

																
								</div>
							</div>

						</div><!-- /.owl-carousel -->
					</div>
				</div><!-- /.container-main-events -->
			</div>
		</div><!-- /.container-events -->
	</div>

	<!-- Book-table -->
	<div class="book-table">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<form action="" method="POST" role="form">
						<div class="title title-book-table">
							<span>Reservation</span>
							<h3>BOOK TABLE</h3>
						</div>
						<div class="container-book">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="">Date</label>
										<input type="date" class="form-control width-250" id="" placeholder="Input field">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Time</label>
										<input type="time" class="form-control width-250" id="" placeholder="Input field">
									</div>
									<div class="form-group">
										<label class="control-label" for="">People</label>
										<select name="" class="form-control width-250">
											<option value="">1 person</option>
											<option value="">3 people</option>
											<option value="">4 people</option>
											<option value="">5 people</option>
											<option value="">6 people</option>
											<option value="">7 people</option>
											<option value="">8 people</option>
											<option value="">9 people</option>
											<option value="">10 people</option>
											<option value="">11 people</option>
											<option value="">12 people</option>
											<option value=""> >12 people</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="">Name</label>
										<input type="text" class="form-control width-250" id="" placeholder="Name">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Phone</label>
										<input type="text" class="form-control width-250" id="" placeholder="Phone">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Email</label>
										<input type="text" class="form-control width-250" id="" placeholder="Email">
									</div>
								</div>
								<div class="col-md-offset-4 active-book">
									<button type="submit" class="btn btn-lg margin-top-20">BOOK TABLE</button>
								</div>
							</div> <!-- /.row-form -->
						</div>
					</form>
				</div>
				<div class="col-xs-6">
					<div class="img-book-table">
						<img class="img-responsive" src="images/booking-01.jpg" alt="">
					</div>				
				</div>
			</div><!-- /.row-book -->
		</div><!-- /.container-book -->
	</div>

	<!-- review -->
	<div class="review">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="title title-review">
						<span>Customers Say</span>
						<h3>REVIEW</h3>
					</div>
					<div class="container main-review">
						<div class="row">
							<div class="owl-banner">
								<div class="owl-carousel owl-review owl-theme">
									<div class="">
										<div class="wow animated zoomIn img-review">
											<img  src="images/avatar-01.jpg" alt="">
										</div>
										<div class="">
											<div class="wow animated fadeInUp text-review">
												<h1>“ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”</h1>
												<div class="star-review">
													<div class="inline"><i class="fas fa-star"></i></div>
													<div class="inline"><i class="fas fa-star"></i></div>
													<div class="inline"><i class="fas fa-star"></i></div>
													<div class="inline"><i class="fas fa-star"></i></div>
													<div class="inline"><i class="fas fa-star"></i></div>
												</div>
												<p>Marie Simmons ˗ New York</p>
											</div>
										</div>								
									</div>
									<div class="">
										<div class="wow animated zoomIn img-review">
											<img src="images/avatar-04.jpg" alt="">
										</div>
										<div class="">
											<div class="wow animated fadeInUp text-review">
												<h1>“ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”</h1>
												<div class="star-review">
													<div class="inline"><i class="fas fa-star"></i></div>
													<div class="inline"><i class="fas fa-star"></i></div>
													<div class="inline"><i class="fas fa-star"></i></div>
													<div class="inline"><i class="fas fa-star"></i></div>
													<div class="inline"><i class="fas fa-star"></i></div>
												</div>
												<p>Marie Simmons ˗ New York</p>
											</div>
										</div>									
									</div>
									<div class="">
										<div class="animated zoomIn img-review">
											<img src="images/avatar-05.jpg" alt="">
										</div>
										<div class="">
											<div class="wow animated fadeInUp text-review">
												<h1>“ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”</h1>
												<div class="star-review">
													<div class="inline"><i class="fas fa-star"></i></div>
													<div class="inline"><i class="fas fa-star"></i></div>
													<div class="inline"><i class="fas fa-star"></i></div>
													<div class="inline"><i class="fas fa-star"></i></div>
													<div class="inline"><i class="fas fa-star"></i></div>
												</div>
												<p>Marie Simmons ˗ New York</p>
											</div>
										</div>									
									</div>
								</div><!-- /.owl-carousel -->
							</div>
						</div>
					</div><!-- /.container-main-review -->
				</div>
			</div><!-- /.row-review -->
		</div> <!-- /.container-review -->
	</div>

	<!-- Our-video -->
	<div class="our-video">	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<span>Discover</span>
						<h3>OUR VIDEO</h3>
					</div>
				</div>
			</div>
		</div><!-- /.container-video -->
	</div>

	<!-- The-blog -->
	<div class="the-blog">
		<div class="container-fluid">
			<div class="title">
				<span>Latest News</span>
				<h3>THE BLOG </h3>
			</div>
			<div class="intro-menu">
				<div class="row">
					<div class="col-md-4">
						<div class="col-intro romantic">
							<div class="img-intro">
								<a href=""><img class="img-responsive" src="images/blog-01.jpg" alt=""></a>
							</div>
							<a href=""><h3>BEST PLACES FOR WINE</h3></a>
							<p>Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.</p>
							<a href="index.php"><button class="btn btn-lg btn-learn-more">CONTINUE READING &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-intro food">
							<div class="img-intro">
								<a href=""><img class="img-responsive" src="images/blog-02.jpg" alt=""></a>
							</div>
							<a href=""><h3>EGGS AND CHEESE</h3></a>
							<p>Duis elementum, risus sit amet lobortis nunc justo condimentum ligula, vitae feugiat</p>
							<a href="index.php"><button class="btn btn-lg btn-learn-more">CONTINUE READING &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-intro red-wines">
							<div class="img-intro">
								<a href=""><img class="img-responsive" src="images/blog-03.jpg" alt=""></a>
							</div>
							<a href=""><h3>STYLE THE WEDDING PARTY</h3></a>
							<p>Sed ornare ligula eget tortor tempor, quis porta tellus dictum.</p>
							<a href="index.php"><button class="btn btn-lg btn-learn-more">CONTINUE READING &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>
					</div>
				</div><!-- /.row-the-blog -->
			</div>
		</div> <!-- /.container-the-blog -->
	</div>

	<!-- SIGN UP -->
	<div class="sign-up">
		<div class="container-fluid">
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
		</div><!-- /.container-sign-up -->
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

		// wow js
		new WOW().init();
		//owl-carousel
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