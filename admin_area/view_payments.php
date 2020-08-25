<?php

if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<div class="row"><!-- begin row 1 -->
	<div class="col-lg-12"><!-- begin col-lg-12 -->
		<ol class="breadcrumb"><!-- begin breadcrumb -->
			<li class="active"><!-- begin active -->
				
				<i class="fas fa-tachometer-alt"></i> Dashboard / View Payments

			</li><!-- finish active -->
		</ol><!-- finish breadcrumb -->
	</div><!-- finish col-lg-12 -->
</div><!-- finish row 1 -->

<div class="row"><!-- begin row 2 -->
	<div class="col-lg-12"><!-- begin col-lg-12 -->
		<div class="panel panel-default"><!-- begin panel panel-default -->
			<div class="panel-heading"><!-- begin panel-heading -->
				
				<h3 class="panel-title"><!-- begin panel-title -->
					
					<i class="fa fa-tags"></i> View Payments

				</h3><!-- finish panel-title -->

			</div><!-- finish panel-heading -->

			<div class="panel-body"><!-- begin panel-body -->
				<div class="table-responsive"><!-- begin table-responsive -->
					<table class="table table-striped table-bordered table-hover"><!-- begin table table-striped table-bordered table-hover -->
						
						<thead><!-- begin thead -->
							<tr><!-- begin tr -->
								<th> No: </th>
								<th> Invoice No: </th>
								<th> Amount Paid: </th>
								<th> Method: </th>
								<th> Reference No: </th>
								<th> Payment Code: </th>
								<th> Payment Date: </th>
								<th> Delete Payment: </th>
							</tr><!-- finish tr -->
						</thead><!-- finish thead -->

						<tbody><!-- begin tbody -->
							
						<?php

						$i = 0;

						$get_payments = "select * from payments";

						$run_payments = mysqli_query($conn,$get_payments);

						while($row_payments=mysqli_fetch_array($run_payments)){

							$payment_id = $row_payments['payment_id'];

							$invoice_no = $row_payments['invoice_no'];

							$amount = $row_payments['amount'];

							$payment_mode = $row_payments['payment_mode'];

							$ref_no = $row_payments['ref_no'];

							$code = $row_payments['code'];

							$payment_date = $row_payments['payment_date'];

							$i++;

						?>

						<tr><!-- begin tr -->
							<td> <?php echo $i; ?> </td>
							<td> <?php echo $invoice_no; ?> </td>
							<td> $<?php echo $amount; ?> </td>
							<td> <?php echo $payment_mode; ?> </td>
							<td> <?php echo $ref_no; ?> </td>
							<td> <?php echo $code; ?> </td>
							<td> <?php echo $payment_date; ?> </td>
							<td>
								
								<a href="index.php?delete_payment=<?php echo $payment_id; ?>">
									
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