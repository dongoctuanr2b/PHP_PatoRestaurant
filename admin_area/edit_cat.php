<?php
if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<?php

	if(isset($_GET['edit_cat'])){

		$edit_cat_id = $_GET['edit_cat'];

		$get_edit_cat = "select * from categories where cat_id='$edit_cat_id'";

		$run_edit_cat = mysqli_query($conn,$get_edit_cat);

		$row_edit_cat = mysqli_fetch_array($run_edit_cat);

		$cat_id = $row_edit_cat['cat_id'];

		$cat_name = $row_edit_cat['cat_name'];

		$cat_desc = $row_edit_cat['cat_desc'];

	}
	
?>
	
	<div class="row"> <!-- row begin -->
		
		<div class="col-lg-12"> <!-- col-lg-12 begin -->
			
			<ol class="breadcrumb"> <!-- breadcrumb begin -->
				
				<li class="active"> <!-- active begin -->
					
					<i class="fas fa-tachometer-alt"></i> Dashboard / Edit Category

				</li> <!-- active finish -->

			</ol> <!-- breadcrumb finish -->

		</div> <!-- col-lg-12 finish -->

	</div> <!-- row finish -->

	<div class="row"> <!-- row begin -->
		
		<div class="col-lg-12"> <!-- col-lg-12 begin -->
			
			<div class="panel panel-default"> <!-- panel panel-default begin -->
				
				<div class="panel-heading"> <!-- panel-heading begin -->
					
					<h3 class="panel-title"> <!-- panel-title begin -->
						
						<i class="fas fa-money-bill-wave"></i> Edit Category	

					</h3> <!-- panel-title finish -->

				</div> <!-- panel-heading finish -->

			</div> <!-- panel panel-default finish -->

			<div class="panel-body"> <!-- panel-body begin -->
				
				<form action="" class="form-horizontal" method="post" enctype="multipart/form-data"> <!-- form-horizontal begin -->
					
					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"> Category Name</label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="text" class="form-control" name="cat_name" value="<?php echo $cat_name; ?>" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"> Category Desc </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<textarea name="cat_desc" class="form-control" cols="30" rows="10">
								
								<?php echo $cat_desc; ?>

							</textarea>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"></label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="submit" class="btn btn-primary form-control" name="update" value="Update Category">

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

		$cat_name = $_POST['cat_name'];
		
		$cat_desc = $_POST['cat_desc'];

		$update_cat = "update categories set cat_name='$cat_name', cat_desc='$cat_desc' where cat_id='$cat_id'";

		$run_cat = mysqli_query($conn,$update_cat);

		if($run_cat){
			echo"<script>alert('Update Category Successfully')</script>";
			echo"<script>window.open('index.php?view_cat','_self')</script>";
		}

	}

	?>

	<?php } ?>