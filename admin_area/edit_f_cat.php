<?php
if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<?php

	if(isset($_GET['edit_f_cat'])){

		$edit_f_cat_id = $_GET['edit_f_cat'];

		$get_edit_f_cat = "select * from food_categories where f_cat_id='$edit_f_cat_id'";

		$run_edit_f_cat = mysqli_query($conn,$get_edit_f_cat);

		$row_edit_f_cat = mysqli_fetch_array($run_edit_f_cat);

		$f_cat_id = $row_edit_f_cat['f_cat_id'];

		$f_cat_name = $row_edit_f_cat['f_cat_name'];

		$f_cat_desc = $row_edit_f_cat['f_cat_desc'];

	}
	
?>
	
	<div class="row"> <!-- row begin -->
		
		<div class="col-lg-12"> <!-- col-lg-12 begin -->
			
			<ol class="breadcrumb"> <!-- breadcrumb begin -->
				
				<li class="active"> <!-- active begin -->
					
					<i class="fas fa-tachometer-alt"></i> Dashboard / Edit Food Category

				</li> <!-- active finish -->

			</ol> <!-- breadcrumb finish -->

		</div> <!-- col-lg-12 finish -->

	</div> <!-- row finish -->

	<div class="row"> <!-- row begin -->
		
		<div class="col-lg-12"> <!-- col-lg-12 begin -->
			
			<div class="panel panel-default"> <!-- panel panel-default begin -->
				
				<div class="panel-heading"> <!-- panel-heading begin -->
					
					<h3 class="panel-title"> <!-- panel-title begin -->
						
						<i class="fas fa-money-bill-wave"></i> Edit Food Category	

					</h3> <!-- panel-title finish -->

				</div> <!-- panel-heading finish -->

			</div> <!-- panel panel-default finish -->

			<div class="panel-body"> <!-- panel-body begin -->
				
				<form action="" class="form-horizontal" method="post" enctype="multipart/form-data"> <!-- form-horizontal begin -->
					
					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label">Food Category Name</label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="text" class="form-control" name="f_cat_name" value="<?php echo $f_cat_name; ?>" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label">Food Category Desc </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<textarea name="f_cat_desc" class="form-control" cols="30" rows="10">
								
								<?php echo $f_cat_desc; ?>

							</textarea>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"></label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="submit" class="btn btn-primary form-control" name="update" value="Update Food Category">

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

				</form> <!-- form-horizontal finish -->

			</div> <!-- panel-body finish -->

		</div> <!-- col-lg-12 finish -->

	</div> <!-- row finish -->

	<!-- Tinymce-Js -->
	<script src="js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({ selector: 'textarea'})</script>

	<?php

	if(isset($_POST['update'])){

		$f_cat_name = $_POST['f_cat_name'];
		
		$f_cat_desc = $_POST['f_cat_desc'];

		$update_f_cat = "update food_categories set f_cat_name='$f_cat_name', f_cat_desc='$f_cat_desc' where f_cat_id='$f_cat_id'";

		$run_f_cat = mysqli_query($conn,$update_f_cat);

		if($run_f_cat){
			echo"<script>alert('Update Food Category Successfully')</script>";
			echo"<script>window.open('index.php?view_f_cat','_self')</script>";
		}

	}

	?>

	<?php } ?>