<?php
    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('../login.php','_self')</script>";

    }else{

?>

<div class="row"><!-- row 1 begin -->
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		<ol class="breadcrumb"><!-- breadcrumb begin -->
			<li>
				
				<i class="fa fa-tachometer-alt"></i> Dashboard / View Food Categories

			</li>
		</ol><!-- breadcrumb finish -->
	</div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		<div class="panel panel-default"><!-- panel panel-default begin -->
			<div class="panel-heading"><!-- panel-heading begin -->
				<h3 class="panel-title"><!-- panel-title begin -->
					
					<i class="fa fa-tags"></i> View Food Categories

				</h3><!-- panel-title finish -->
			</div><!-- panel-heading finish -->

			<div class="panel-body"><!-- panel-body begin -->
				
				<div class="table-responsive"><!-- table-responsive begin -->
					<table class="table table-hover table-striped table-bordered"><!-- table-hover table-striped table-bordered begin -->
						
						<thead><!-- thead begin -->
							<tr><!-- tr begin -->
								<th> Food Category ID: </th>
								<th> Food Category Name: </th>
								<th> Food Category Desc: </th>
								<th> Edit Food Category: </th>
								<th> Delete Food Category: </th>
							</tr><!-- tr finish -->
						</thead><!-- thead finish -->

						<tbody><!-- tbody begin -->

							<?php

							$i = 0;

							$get_f_cat = "select * from food_categories";

							$run_f_cat = mysqli_query($conn,$get_f_cat);

							while($row_f_cat=mysqli_fetch_array($run_f_cat)){

								$f_cat_id = $row_f_cat['f_cat_id'];

								$f_cat_name = $row_f_cat['f_cat_name'];

								$f_cat_desc = $row_f_cat['f_cat_desc'];

								$i++;


							?>
							
							<tr><!-- tr begin -->
								
								<td><?php echo $f_cat_id; ?></td>
								<td><?php echo $f_cat_name; ?></td>
								<td width="350"><?php echo $f_cat_desc; ?></td>
								<td>
									
									<a href="index.php?edit_f_cat=<?php echo $f_cat_id; ?>">
										
										<i class="fa fa-pencil-alt"></i> Edit

									</a>

								</td>
								<td>
									
									<a href="index.php?delete_f_cat=<?php echo $f_cat_id; ?>">
										
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