<?php

$active = 'RESERVATION';
include("includes/header.php");

?>

<!-- Welcome -->
<div class="welcome_reservation">
	<div class="container-fluid">
		<div class="row">
			<div class="title text-about-us">
				<h3>RESERVATION</h3>
			</div>
		</div>
	</div> <!-- /.container-welcome -->
</div>

<main>
	
	<!-- Book-table -->
	<div class="book-table">
		<div class="container-fluid">
			<div class="row">
				<form action="" method="POST" role="form">
					<div class="title title_reservation">
						<span>Reservation</span>
						<h3>BOOK TABLE</h3>
					</div>
					<div class="container-book">
						<div class="row">
							<div class="col-md-4">
								<div class="date-name">
									<div class="form-group">
										<label class="control-label" for="">Date</label>
										<input type="date" class="form-control width-250" id="" placeholder="Input field">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Name</label>
										<input type="text" class="form-control width-250" id="" placeholder="Name">
									</div>															
								</div>
							</div>
							<div class="col-md-4">
								<div class="time-phone">
									<div class="form-group">
										<label class="control-label" for="">Time</label>
										<input type="time" class="form-control width-250" id="" placeholder="Input field">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Phone</label>
										<input type="text" class="form-control width-250" id="" placeholder="Phone">
									</div>									
								</div>
							</div>
							<div class="col-md-4">
								<div class="people-email">
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
									<div class="form-group">
										<label class="control-label" for="">Email</label>
										<input type="text" class="form-control width-250" id="" placeholder="Email">
									</div>
								</div>
							</div>
							<div class="col-md-offset-4 active-book">
								<button type="submit" class="btn btn-lg button_reservation">BOOK TABLE</button>
							</div>
						</div> <!-- /.row-form -->
					</div>
				</form>	
				<div class="phone-booking">
					<div class="row">
						<div class="col-md-6">
							<div class="reservation-phone">
								<h3>RESERVE BY PHONE</h3>	
								<p>Donec quis euismod purus. Donec feugiat ligula rhoncus, varius nisl sed, tincidunt lectus. Nulla vulputate , lectus vel volutpat efficitur, orci lacus sodales sem, sit amet quam: <span>(001) 345 6889</span></p> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="reservation-booking">
								<h3>FOR EVENT BOOKING</h3>	
								<p>Donec feugiat ligula rhoncus: <span>(001) 345 6889</span> , varius nisl sed, tinci-dunt lectus sodales sem.</p> 
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.row-book -->
		</div><!-- /.container-book -->
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