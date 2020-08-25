<?php
    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('../login.php','_self')</script>";

    }else{

?>

<div class="row"><!-- row 1 begin -->
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		<ol class="breadcrumb"><!-- breadcrumb begin -->
			<li>
				
				<i class="fa fa-tachometer-alt"></i> Dashboard / View Categories

			</li>
		</ol><!-- breadcrumb finish -->
	</div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		<div class="panel panel-default"><!-- panel panel-default begin -->
			<div class="panel-heading"><!-- panel-heading begin -->
				<h3 class="panel-title"><!-- panel-title begin -->
					
					<i class="fa fa-tags"></i> View Categories

				</h3><!-- panel-title finish -->
			</div><!-- panel-heading finish -->

			<div class="panel-body"><!-- panel-body begin -->
				
				<div class="table-responsive"><!-- table-responsive begin -->
					<table class="table table-hover table-striped table-bordered"><!-- table-hover table-striped table-bordered begin -->
						
						<thead><!-- thead begin -->
							<tr><!-- tr begin -->
								<th> Category ID: </th>
								<th> Category Name: </th>
								<th> Category Desc: </th>
								<th> Edit Category: </th>
								<th> Delete Category: </th>
							</tr><!-- tr finish -->
						</thead><!-- thead finish -->

						<tbody><!-- tbody begin -->

							<?php

							$i = 0;

							$get_cat = "select * from categories";

							$run_cat = mysqli_query($conn,$get_cat);

							while($row_cat=mysqli_fetch_array($run_cat)){

								$cat_id = $row_cat['cat_id'];

								$cat_name = $row_cat['cat_name'];

								$cat_desc = $row_cat['cat_desc'];

								$i++;


							?>
							
							<tr><!-- tr begin -->
								
								<td><?php echo $cat_id; ?></td>
								<td><?php echo $cat_name; ?></td>
								<td width="350"><?php echo $cat_desc; ?></td>
								<td>
									
									<a href="index.php?edit_cat=<?php echo $cat_id; ?>">
										
										<i class="fa fa-pencil-alt"></i> Edit

									</a>

								</td>
								<td>
									
									<a href="index.php?delete_cat=<?php echo $cat_id; ?>">
										
										<i class="fa fa-trash-alt"></i> Delete

									</a>

								</td>

							</tr><!-- tr begin -->

							<?php } ?>

						</tbody><!-- tbody finish -->

					</table><!-- table-hover table-striped table-bordered finish -->
				</div><!-- table-responsive finish -->

			</div><!-- panel-body finish -->

		</div><!-- panel panel-default finish -->
	</div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>