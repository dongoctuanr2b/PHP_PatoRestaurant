<?php

if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<div class="row"><!-- begin row 1 -->
	<div class="col-lg-12"><!-- begin col-lg-12 -->
		<ol class="breadcrumb"><!-- begin breadcrumb -->
			<li class="active"><!-- begin active -->
				
				<i class="fas fa-tachometer-alt"></i> Dashboard / View Foods

			</li><!-- finish active -->
		</ol><!-- finish breadcrumb -->
	</div><!-- finish col-lg-12 -->
</div><!-- finish row 1 -->

<div class="row"><!-- begin row 2 -->
	<div class="col-lg-12"><!-- begin col-lg-12 -->
		<div class="panel panel-default"><!-- begin panel panel-default -->
			<div class="panel-heading"><!-- begin panel-heading -->
				
				<h3 class="panel-title"><!-- begin panel-title -->
					
					<i class="fa fa-tags"></i> View Foods

				</h3><!-- finish panel-title -->

			</div><!-- finish panel-heading -->

			<div class="panel-body"><!-- begin panel-body -->
				<div class="table-responsive"><!-- begin table-responsive -->
					<table class="table table-striped table-bordered table-hover"><!-- begin table table-striped table-bordered table-hover -->
						
						<thead><!-- begin thead -->
							<tr><!-- begin tr -->
								<th> Food ID: </th>
								<th> Food Name: </th>
								<th> Food Image: </th>
								<th> Food Price: </th>
								<th> Food Sold: </th>
								<th> Food Keywords: </th>
								<th> Food Date: </th>
								<th> Food Delete: </th>
								<th> Food Edit: </th>
							</tr><!-- finish tr -->
						</thead><!-- finish thead -->

						<tbody><!-- begin tbody -->
							
						<?php

						$i = 0;

						$get_foods = "select * from foods";

						$run_foods = mysqli_query($conn,$get_foods);

						while($row_foods=mysqli_fetch_array($run_foods)){

							$food_id = $row_foods['food_id'];

							$food_name = $row_foods['food_name'];

							$food_img1 = $row_foods['food_img1'];

							$food_price = $row_foods['food_price'];

							$food_keywords = $row_foods['food_keywords'];

							$food_date = $row_foods['date'];

							$i++;

						?>

						<tr><!-- begin tr -->
							<td><?php echo $i; ?></td>
							<td><?php echo $food_name; ?></td>
							<td><img class="img-responsive" src="product_images/<?php echo $food_img1; ?>" alt="" width="80" height="80"></td>
							<td> $<?php echo $food_price; ?></td>
							<td>

								<?php 

								$get_p_orders = "select * from pending_orders where food_id='$food_id'";

								$run_p_orders = mysqli_query($conn,$get_p_orders);

								$count_p_orders = mysqli_num_rows($run_p_orders);

								echo $count_p_orders;

							 	?>
							 	
							 </td>
							<td><?php echo $food_keywords; ?></td>
							<td><?php echo $food_date; ?></td>
							<td>
								
								<a href="index.php?delete_food=<?php echo $food_id; ?>">
									
									<i class="fa fa-trash-alt"></i> Delete

								</a>

							</td>
							<td>
								
								<a href="index.php?edit_food=<?php echo $food_id; ?>">
									
									<i class="fa fa-pencil-alt"></i> Edit

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