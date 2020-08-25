<div class="box"><!-- box begin -->

	<?php

	$customer_email = $_SESSION['customer_email'];

	$select_customer = "select * from customers where customer_email='$customer_email'";

	$run_customer = mysqli_query($conn,$select_customer);

	$row_customer = mysqli_fetch_array($run_customer);

	$customer_id = $row_customer['customer_id'];

	?>

	<h1 class="text-center"> Payment Options For You <!-- h1 begin -->
		<p class="lead text-center"><!-- .lead text-center begin -->
			<a href="order.php?c_id=<?php echo $customer_id ?>"> Offline Payment </a>
		</p><!-- .lead text-center finish -->

		<center><!-- center begin -->

			<p class="lead"><!-- lead begin -->
				
				<a href="#">
					
					Paypal Payment

					<img src="images/icons/paypal-logo.png" alt="img-paypal" class="img-responsive">

				</a>

			</p><!-- lead finish -->

		</center><!-- center finish -->
	</h1><!-- h1 finish -->
</div><!-- box finish -->