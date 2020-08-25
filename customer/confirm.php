<?php

$active = 'MY ACCOUNT';
include("includes/header.php");

if(isset($_GET['order_id'])){

	$order_id = $_GET['order_id'];

}

?>


<!-- Welcome -->
<div class="welcome_blog">
	<div class="container-fluid">
		<div class="row">
			<div class="title text-about-us">
				<h3>CONFIRM</h3>
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
						<li class="">Confirm</li>
					</ul> <!-- breadcrumb finish -->

				</div>
			</div>
		</div>
	</div>

	<div id="content_account"> <!-- #content begin -->
		<div class="container-fluid"> <!-- container begin -->

			<div class="col-md-8"> <!-- col-md-8 begin -->

				<div class="box"> <!-- box begin -->

					<h1 align="center"> Please confirm your payment</h1>

					<form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" class="payment_center" enctype="multipart/form-data"> <!-- form begin -->

						<div class="form-group"> <!-- form-group begin -->
							<div class="col-md-6">

							<label for=""> Invoice No: </label>

							</div>

							<input type="text" class="form-control width-250" name="invoice_no" required>

						</div> <!-- form-group finish -->

						<div class="form-group"> <!-- form-group begin -->

							<div class="col-md-6">

							<label for=""> Amount Sent: </label>

							</div>

							<input type="text" class="form-control width-250" name="amount_sent" required>

						</div> <!-- form-group finish -->

						<div class="form-group"> <!-- form-group begin -->

							<div class="col-md-6">
								
							<label for=""> Select Payment Mode: </label>

							</div>

							<select name="payment_mode" class="form-control width-250"> <!-- form-control begin -->

								<option> Select Payment Mode </option>
								<option> Back Code </option>
								<option> Paypal </option>
								<option> Payoneer </option>
								<option> Western Union </option>

							</select> <!-- form-control finish -->

						</div> <!-- form-group finish -->

						<div class="form-group"> <!-- form-group begin -->

							<div class="col-md-6">

							<label for=""> Transaction / Reference ID: </label>

							</div>

							<input type="text" class="form-control width-250" name="ref_no" required>

						</div> <!-- form-group finish -->

						<div class="form-group"> <!-- form-group begin -->

							<div class="col-md-6">

							<label for=""> Paypal / Payoneer / Western Union Code: </label>

							</div>

							<input type="text" class="form-control width-250" name="code" required>

						</div> <!-- form-group finish -->

						<div class="form-group"> <!-- form-group begin -->

							<div class="col-md-6">					

							<label for=""> Payment Date: </label>

							</div>

							<input type="text" class="form-control width-250" name="date" required>

						</div> <!-- form-group finish -->

						<div class="text-center"> <!-- text-center begin -->

							<button class="btn btn-lg btn-learn-more" name="confirm_payment">

								<i class="fa fa-user-md"></i> Confirm Payment

							</button>

						</div> <!-- text-center finish -->

					</form> <!-- form finish -->

					<?php

					if(isset($_POST['confirm_payment'])){

						$update_id = $_GET['update_id'];

						$invoice_no = $_POST['invoice_no'];

						$amount_sent = $_POST['amount_sent'];

						$payment_mode = $_POST['payment_mode'];

						$ref_no = $_POST['ref_no'];

						$code = $_POST['code'];

						$date = $_POST['date'];

						$complete = 'complete';

						$insert_payments = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount_sent','$payment_mode','$ref_no','$code','$date')";

						$run_payments = mysqli_query($conn,$insert_payments);

						$update_c_orders = "update customer_orders set status='$complete' where order_id='$update_id'";

						$run_c_orders = mysqli_query($conn,$update_c_orders);

						$update_p_orders = "update pending_orders set order_status='$complete' where order_id='$update_id'";

						$run_p_orders = mysqli_query($conn,$update_p_orders);

						if($run_p_orders){

							echo "<script>alert('Cảm ơn bạn đã mua đồ ăn! Đơn đặt hàng của bạn sẽ được hoàn thành trong 24 tiếng.')</script>";

							echo "<script>window.open('my_account.php?my_orders','_self')</script>";

						}

					}

					?>

				</div> <!-- box finish -->

			</div> <!-- col-md-8 finish -->

			<div class="col-md-4"> <!-- col-md-4 begin -->

				<?php 

				include("includes/sidebar.php");

				?>

			</div> <!-- col-md-4 finish -->

		</div> <!-- container finish -->
	</div> <!-- #content finish -->

</main>

<?php 

include("includes/footer.php");

?>

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