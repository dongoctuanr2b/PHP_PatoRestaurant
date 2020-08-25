<center> <!-- center begin -->
	
	<h1> My Orders </h1>

	<p class="lead"> Your orders on one place </p>

	<p class="text-muted"> If you have any questions, feel free to <a href="../contact.php">Contact Us</a>. Our Customer Service work <strong>24/7</strong> </p>

</center> <!-- center finish -->

<hr>

<div class="table-responsive"> <!-- table-responsive begin -->
	
	<table class="table table-bordered table-hover"> <!-- table begin -->
		
		<thead> <!-- thead begin -->
			
			<tr> <!-- tr begin -->
				
				<th> ON </th>
				<th> Due Amount: </th>
				<th> Invoice No: </th>
				<th> Quantity: </th>
				<th> Size: </th>
				<th> Order Date: </th>
				<th> Paid / Unpaid: </th>
				<th> Status: </th>

			</tr> <!-- tr finish -->

		</thead> <!-- thead finish -->

		<tbody> <!-- tbody begin -->

			<?php

				$i = 0;

				$customer_email = $_SESSION['customer_email'];

				$get_c = "select * from customers where customer_email='$customer_email'";

				$run_c = mysqli_query($conn,$get_c);

				$row_c = mysqli_fetch_array($run_c);

				$customer_id = $row_c['customer_id'];

				$get_c_orders = "select * from customer_orders where customer_id='$customer_id' order by 1 DESC LIMIT 0,6";

				$run_c_orders = mysqli_query($conn,$get_c_orders);

				while($row_c_orders=mysqli_fetch_array($run_c_orders)){

					$order_id = $row_c_orders['order_id'];

					$due_amount = $row_c_orders['due_amount'];

					$invoice_no = $row_c_orders['invoice_no'];

					$c_orders_qty = $row_c_orders['qty'];

					$c_orders_size = $row_c_orders['size'];

					$c_orders_date = $row_c_orders['order_date'];

					$c_orders_status = $row_c_orders['status'];

					$i++;

					if($c_orders_status == 'pending'){

						$c_orders_status = 'Unpaid';

					}else{

						$c_orders_status = 'Paid';

					}

				?>
			
			<tr> <!-- tr begin -->
				
				<th> <?php echo "#".$i ?> </th>

				<td> <?php echo $due_amount ?> </td>
				<td> <?php echo $invoice_no ?> </td>
				<td> <?php echo $c_orders_qty ?> </td>
				<td> <?php echo $c_orders_size ?> </td>
				<td> <?php echo $c_orders_date ?> </td>
				<td> <?php echo $c_orders_status ?> </td>

				<td>
					<?php if($c_orders_status == 'Paid'){
						echo "
					
						<a href='confirm.php?order_id=$order_id' target='_blank' class='btn btn-lg margin-top-20 disabled'>Confirm Paid</a>

						";
					}else {

						echo "
									
						<a href='confirm.php?order_id=$order_id' target='_blank' class='btn btn-lg margin-top-20'>Confirm Paid</a>

						";
					}
					
					?>
				</td>

			</tr> <!-- tr finish -->

			<?php } ?>

		</tbody> <!-- tbody finish -->

	</table> <!-- table finish -->

</div> <!-- table-responsive finish -->