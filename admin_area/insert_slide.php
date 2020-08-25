<?php
    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('../login.php','_self')</script>";

    }else{

?>

<div class="row"><!-- row 1 begin -->
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		<ol class="breadcrumb"><!-- breadcrumb begin -->
			<li>
				
				<i class="fa fa-tachometer-alt"></i> Dashboard / Insert Slide

			</li>
		</ol><!-- breadcrumb finish -->
	</div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		<div class="panel panel-default"><!-- panel panel-default begin -->
			<div class="panel-heading"><!-- panel-heading begin -->
				<h3 class="panel-title"><!-- panel-title begin -->
					
					<i class="fa fa-money-bill"></i> Insert Slide

				</h3><!-- panel-title finish -->
			</div><!-- panel-heading finish -->

			<div class="panel-body"><!-- panel-body begin -->
				<form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form form-horizontal begin -->
					<div class="form-group"><!-- form-group begin -->
						<label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->
							
							Slide Name

						</label><!-- control-label col-md-3 finish -->

						<div class="col-md-6">
							<input type="text" class="form-control" name="slide_name">
						</div>

					</div><!-- form-group finish -->

					<div class="form-group"><!-- form-group begin -->
						<label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->
							
							Slide Image

						</label><!-- control-label col-md-3 finish -->

						<div class="col-md-6">
							<input type="file" class="form-control" name="slide_image">
						</div>

					</div><!-- form-group finish -->

					<div class="form-group"><!-- form-group begin -->
						<label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->
							
							

						</label><!-- control-label col-md-3 finish -->

						<div class="col-md-6">
							<input type="submit" name="submit" class="form-control btn btn-primary" value="Submit Slide">

					</div><!-- form-group finish -->

				</form><!-- form form-horizontal finish -->

			</div><!-- panel-body finish -->

		</div><!-- panel panel-default finish -->
	</div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

	<!-- Tinymce-Js -->
	<script src="js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({ selector: 'textarea'})</script>

<?php

	if(isset($_POST['submit'])){

		$slide_name = $_POST['slide_name'];

		$slide_image = $_FILES['slide_image']['name'];

		$tmp_name = $_FILES['slide_image']['tmp_name'];

		$get_slide = "select * from slider";

		$run_slide = mysqli_query($conn,$get_slide);

		$count_slide = mysqli_num_rows($run_slide);

		if($count_slide < 3){

			move_uploaded_file($tmp_name, "slides_images/$slide_image");

			$insert_slide = "insert into slider (slide_name,slide_image) values ('$slide_name','$slide_image')";

			$run_insert_slide = mysqli_query($conn,$insert_slide);

			echo "<script>alert('Slide mới của bạn đã được thêm!')</script>";

			echo "<script>window.open('index.php?view_slide','_self')</script>";

		}else{

			echo "<script>alert('Bạn đã có 3 slide! Nếu bạn muốn thêm Slide, xin hãy xóa bớt slide!')</script>";

		}

	}

?>

<?php } ?>