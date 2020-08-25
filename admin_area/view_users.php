<?php

if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<div class="row"><!-- begin row 1 -->
	<div class="col-lg-12"><!-- begin col-lg-12 -->
		<ol class="breadcrumb"><!-- begin breadcrumb -->
			<li class="active"><!-- begin active -->
				
				<i class="fas fa-tachometer-alt"></i> Dashboard / View Users

			</li><!-- finish active -->
		</ol><!-- finish breadcrumb -->
	</div><!-- finish col-lg-12 -->
</div><!-- finish row 1 -->

<div class="row"><!-- begin row 2 -->
	<div class="col-lg-12"><!-- begin col-lg-12 -->
		<div class="panel panel-default"><!-- begin panel panel-default -->
			<div class="panel-heading"><!-- begin panel-heading -->
				
				<h3 class="panel-title"><!-- begin panel-title -->
					
					<i class="fa fa-tags"></i> View Users

				</h3><!-- finish panel-title -->

			</div><!-- finish panel-heading -->

			<div class="panel-body"><!-- begin panel-body -->
				<div class="table-responsive"><!-- begin table-responsive -->
					<table class="table table-striped table-bordered table-hover"><!-- begin table table-striped table-bordered table-hover -->
						
						<thead><!-- begin thead -->
							<tr><!-- begin tr -->
								<th> No: </th>
								<th> User Name: </th>
								<th> User Image: </th>
								<th> User Email: </th>
								<th> User Country: </th>
								<th> User Job: </th>
								<th> User Contact: </th>
								<th> User Edit: </th>
								<th> User Delete: </th>
							</tr><!-- finish tr -->
						</thead><!-- finish thead -->

						<tbody><!-- begin tbody -->
							
						<?php

						$i = 0;

						$get_admins = "select * from admins";

						$run_admins = mysqli_query($conn,$get_admins);

						while($row_admins=mysqli_fetch_array($run_admins)){

							$admin_id = $row_admins['admin_id'];

							$admin_email = $row_admins['admin_email'];

							$admin_name = $row_admins['admin_name'];

							$admin_img = $row_admins['admin_img'];

							$admin_country = $row_admins['admin_country'];

							$admin_job = $row_admins['admin_job'];

							$admin_contact = $row_admins['admin_contact'];

							$i++;

						?>

						<tr><!-- begin tr -->
							<td><?php echo $i; ?></td>
							<td><?php echo $admin_name; ?></td>
							<td><img class="img-responsive" src="admin_images/<?php echo $admin_img; ?>" alt="" width="80" height="80"></td>
							<td> <?php echo $admin_email; ?> </td>
							<td> <?php echo $admin_country; ?> </td>
							<td> <?php echo $admin_job; ?> </td>
							<td> <?php echo $admin_contact; ?> </td>
							<td> 
								<a href="index.php?edit_user=<?php echo $admin_id; ?>">
									
									<i class="fa fa-trash-alt"></i> Edit

								</a> 
							</td>
							<td>
								
								<a href="index.php?delete_user=<?php echo $admin_id; ?>">
									
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