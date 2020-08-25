<?php
if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<?php

	if(isset($_GET['edit_slide'])){

		$edit_slide_id = $_GET['edit_slide'];

		$get_edit_slide = "select * from slider where slide_id='$edit_slide_id'";

		$run_edit_slide = mysqli_query($conn,$get_edit_slide);

		$row_edit_slide = mysqli_fetch_array($run_edit_slide);

		$slide_id = $row_edit_slide['slide_id'];

		$slide_name = $row_edit_slide['slide_name'];

		$slide_image = $row_edit_slide['slide_image'];

	}
	
?>
	
	<div class="row"> <!-- row begin -->
		
		<div class="col-lg-12"> <!-- col-lg-12 begin -->
			
			<ol class="breadcrumb"> <!-- breadcrumb begin -->
				
				<li class="active"> <!-- active begin -->
					
					<i class="fas fa-tachometer-alt"></i> Dashboard / Edit Slide

				</li> <!-- active finish -->

			</ol> <!-- breadcrumb finish -->

		</div> <!-- col-lg-12 finish -->

	</div> <!-- row finish -->

	<div class="row"> <!-- row begin -->
		
		<div class="col-lg-12"> <!-- col-lg-12 begin -->
			
			<div class="panel panel-default"> <!-- panel panel-default begin -->
				
				<div class="panel-heading"> <!-- panel-heading begin -->
					
					<h3 class="panel-title"> <!-- panel-title begin -->
						
						<i class="fas fa-money-bill-wave"></i> Edit Slide	

					</h3> <!-- panel-title finish -->

				</div> <!-- panel-heading finish -->

			</div> <!-- panel panel-default finish -->

			<div class="panel-body"> <!-- panel-body begin -->
				
				<form action="" class="form-horizontal" method="post" enctype="multipart/form-data"> <!-- form-horizontal begin -->
					
					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"> Slide Name</label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="text" class="form-control" name="slide_name" value="<?php echo $slide_name; ?>" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"> Slide Image </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="file" class="form-control" name="slide_image">

							<br>

							<img src="slides_images/<?php echo $slide_image; ?>" alt="<?php echo $slide_image; ?>" class="img-responsive">

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"></label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="submit" class="btn btn-primary form-control" name="update" value="Update Slide">

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

		$slide_name = $_POST['slide_name'];
		
		$slide_image = $_FILES['slide_image']['name'];

		$tmp_name = $_FILES['slide_image']['tmp_name'];

		move_uploaded_file($tmp_name, "slides_images/$slide_image");

		$update_slide = "update slider set slide_name='$slide_name', slide_image='$slide_image' where slide_id='$slide_id'";

		$run_slide = mysqli_query($conn,$update_slide);

		if($run_slide){
			echo"<script>alert('Update Slide Successfully')</script>";
			echo"<script>window.open('index.php?view_slide','_self')</script>";
		}

	}

	?>

	<?php } ?>