<?php
    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('../login.php','_self')</script>";

    }else{

?>

<div class="row"><!-- row 1 begin -->
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		<ol class="breadcrumb"><!-- breadcrumb begin -->
			<li>
				
				<i class="fa fa-tachometer-alt"></i> Dashboard / Insert Category

			</li>
		</ol><!-- breadcrumb finish -->
	</div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		<div class="panel panel-default"><!-- panel panel-default begin -->
			<div class="panel-heading"><!-- panel-heading begin -->
				<h3 class="panel-title"><!-- panel-title begin -->
					
					<i class="fa fa-money-bill"></i> Insert Category

				</h3><!-- panel-title finish -->
			</div><!-- panel-heading finish -->

			<div class="panel-body"><!-- panel-body begin -->
				<form action="" class="form-horizontal" method="post"><!-- form form-horizontal begin -->
					<div class="form-group"><!-- form-group begin -->
						<label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->
							
							Category Name

						</label><!-- control-label col-md-3 finish -->

						<div class="col-md-6">
							<input type="text" class="form-control" name="cat_name">
						</div>

					</div><!-- form-group finish -->

					<div class="form-group"><!-- form-group begin -->
						<label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->
							
							Category Description

						</label><!-- control-label col-md-3 finish -->

						<div class="col-md-6">
							<textarea name="cat_desc" id="" cols="30" rows="10" class="form-control"></textarea>
						</div>

					</div><!-- form-group finish -->

					<div class="form-group"><!-- form-group begin -->
						<label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->
							
							

						</label><!-- control-label col-md-3 finish -->

						<div class="col-md-6">
							<input type="submit" name="submit" class="form-control btn btn-primary" value="Submit">

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

		$cat_name = $_POST['cat_name'];

		$cat_desc = $_POST['cat_desc'];

		$insert_cat = "insert into categories (cat_name,cat_desc) values ('$cat_name','$cat_desc')";

		$run_cat = mysqli_query($conn,$insert_cat);

		if($run_cat){

			echo "<script>alert('Category mới của bạn đã được thêm!')</script>";

			echo "<script>window.open('index.php?view_cat','_self')</script>";

		}

	}

?>

<?php } ?>