<?php

if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<div class="row"><!-- begin row 1 -->
	<div class="col-lg-12"><!-- begin col-lg-12 -->
		<ol class="breadcrumb"><!-- begin breadcrumb -->
			<li class="active"><!-- begin active -->
				
				<i class="fas fa-tachometer-alt"></i> Dashboard / View Customers

			</li><!-- finish active -->
		</ol><!-- finish breadcrumb -->
	</div><!-- finish col-lg-12 -->
</div><!-- finish row 1 -->

<div class="row"><!-- begin row 2 -->
	<div class="col-lg-12"><!-- begin col-lg-12 -->
		<div class="panel panel-default"><!-- begin panel panel-default -->
			<div class="panel-heading"><!-- begin panel-heading -->
				
				<h3 class="panel-title"><!-- begin panel-title -->
					
					<i class="fa fa-tags"></i> View Customers

				</h3><!-- finish panel-title -->

			</div><!-- finish panel-heading -->

			<div class="panel-body"><!-- begin panel-body -->
				<div class="table-responsive"><!-- begin table-responsive -->
					<table class="table table-striped table-bordered table-hover"><!-- begin table table-striped table-bordered table-hover -->
						
						<thead><!-- begin thead -->
							<tr><!-- begin tr -->
								<th> No: </th>
								<th> Name: </th>
								<th> Image: </th>
								<th> Email: </th>
								<th> Country: </th>
								<th> City: </th>
								<th> Address: </th>
								<th> Contact: </th>
								<th> Delete: </th>
							</tr><!-- finish tr -->
						</thead><!-- finish thead -->

						<tbody><!-- begin tbody -->
							
						<?php

						$i = 0;

						$get_customers = "select * from customers";

						$run_customers = mysqli_query($conn,$get_customers);

						while($row_customers=mysqli_fetch_array($run_customers)){

							$customer_id = $row_customers['customer_id'];

							$customer_email = $row_customers['customer_email'];

							$customer_name = $row_customers['customer_name'];

							$customer_img = $row_customers['customer_img'];

							$customer_country = $row_customers['customer_country'];

							$customer_city = $row_customers['customer_city'];

							$customer_address = $row_customers['customer_address'];

							$customer_contact = $row_customers['customer_contact'];

							$i++;

						?>

						<tr><!-- begin tr -->
							<td><?php echo $i; ?></td>
							<td><?php echo $customer_name; ?></td>
							<td><img class="img-responsive" src="../customer/customer_images/<?php echo $customer_img; ?>" alt="" width="80" height="80"></td>
							<td> <?php echo $customer_email; ?> </td>
							<td> <?php echo $customer_country; ?> </td>
							<td> <?php echo $customer_city; ?> </td>
							<td> <?php echo $customer_address; ?> </td>
							<td> <?php echo $customer_contact; ?> </td>
							<td>
								
								<a href="index.php?delete_customer=<?php echo $customer_id; ?>">
									
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