<?php

if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<div class="row"><!-- begin row 1 -->
	<div class="col-lg-12"><!-- begin col-lg-12 -->
		<ol class="breadcrumb"><!-- begin breadcrumb -->
			<li class="active"><!-- begin active -->
				
				<i class="fas fa-tachometer-alt"></i> Dashboard / View Orders

			</li><!-- finish active -->
		</ol><!-- finish breadcrumb -->
	</div><!-- finish col-lg-12 -->
</div><!-- finish row 1 -->

<div class="row"><!-- begin row 2 -->
	<div class="col-lg-12"><!-- begin col-lg-12 -->
		<div class="panel panel-default"><!-- begin panel panel-default -->
			<div class="panel-heading"><!-- begin panel-heading -->
				
				<h3 class="panel-title"><!-- begin panel-title -->
					
					<i class="fa fa-tags"></i> View Orders

				</h3><!-- finish panel-title -->

			</div><!-- finish panel-heading -->

			<div class="panel-body"><!-- begin panel-body -->
				<div class="table-responsive"><!-- begin table-responsive -->
					<table class="table table-striped table-bordered table-hover"><!-- begin table table-striped table-bordered table-hover -->
						
						<thead><!-- begin thead -->
							<tr><!-- begin tr -->
								<th> No: </th>
								<th> Customer Email: </th>
								<th> Invoice No: </th>
								<th> Food Name: </th>
								<th> Food Quantity: </th>
								<th> Food Size: </th>
								<th> Order Date: </th>
								<th> Total Amount: </th>
								<th> Status: </th>
								<th> Delete: </th>
							</tr><!-- finish tr -->
						</thead><!-- finish thead -->

						<tbody><!-- begin tbody -->
							
						<?php

						$i = 0;

						$get_p_orders = "select * from pending_orders";

						$run_p_orders = mysqli_query($conn,$get_p_orders);

						while($row_p_orders=mysqli_fetch_array($run_p_orders)){

							$order_id = $row_p_orders['order_id'];

							$customer_id = $row_p_orders['customer_id'];

							$food_id = $row_p_orders['food_id'];

							$invoice_no = $row_p_orders['invoice_no'];

							$qty = $row_p_orders['qty'];

							$size = $row_p_orders['size'];

							$order_status = $row_p_orders['order_status'];

							$get_c_orders = "select * from customer_orders where order_id='$order_id'";

							$run_c_orders = mysqli_query($conn,$get_c_orders);

							$row_c_orders = mysqli_fetch_array($run_c_orders);

							$due_amount = $row_c_orders['due_amount'];

							$order_date = $row_c_orders['order_date'];

							$get_customers = "select * from customers where customer_id='$customer_id'";

							$run_customers = mysqli_query($conn,$get_customers);

							$row_customers = mysqli_fetch_array($run_customers);

							$customer_email = $row_customers['customer_email'];

							$get_foods = "select * from foods where food_id='$food_id'";

							$run_foods = mysqli_query($conn,$get_foods);

							$row_foods = mysqli_fetch_array($run_foods);

							$food_name = $row_foods['food_name'];

							$i++;

						?>

						<tr><!-- begin tr -->
							<td> <?php echo $i; ?> </td>
							<td> <?php echo $customer_email; ?> </td>
							<td> <?php echo $invoice_no; ?> </td>
							<td> <?php echo $food_name; ?> </td>
							<td> <?php echo $qty; ?> </td>
							<td> <?php echo $size; ?> </td>
							<td> <?php echo $order_date; ?> </td>
							<td> $<?php echo $due_amount; ?> </td>
							<td> <?php echo $order_status; ?> </td>
							<td>
								
								<a href="index.php?delete_order=<?php echo $order_id; ?>">
									
									<i class="fa fa-trash-alt"></i> Delete

								</a>

							</td>
							
						</tr><!-- finish tr -->

						<?php } ?>

						</tbody><!-- finish tbody -->

					</table><!-- finish table table-striped table-bordered table-hover -->
				</div><!-- finish table-responsive -->
			</div><!-- finish panel-body -->

		</div><!-- finish panel panel-default -->
	</div><!-- finish col-lg-12 -->
</div><!-- finish row 2 -->

<?php } ?>