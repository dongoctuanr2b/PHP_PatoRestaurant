<?php
    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('../login.php','_self')</script>";

    }else{

?>

<div class="row"><!-- row 1 begin -->
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		<ol class="breadcrumb"><!-- breadcrumb begin -->
			<li>
				
				<i class="fa fa-tachometer-alt"></i> Dashboard / Insert Food Category

			</li>
		</ol><!-- breadcrumb finish -->
	</div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		<div class="panel panel-default"><!-- panel panel-default begin -->
			<div class="panel-heading"><!-- panel-heading begin -->
				<h3 class="panel-title"><!-- panel-title begin -->
					
					<i class="fa fa-money-bill"></i> Insert Food Category

				</h3><!-- panel-title finish -->
			</div><!-- panel-heading finish -->

			<div class="panel-body"><!-- panel-body begin -->
				<form action="" class="form-horizontal" method="post"><!-- form form-horizontal begin -->
					<div class="form-group"><!-- form-group begin -->
						<label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->
							
							Food Category Name

						</label><!-- control-label col-md-3 finish -->

						<div class="col-md-6">
							<input type="text" class="form-control" name="f_cat_name">
						</div>

					</div><!-- form-group finish -->

					<div class="form-group"><!-- form-group begin -->
						<label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->
							
							Food Category Description

						</label><!-- control-label col-md-3 finish -->

						<div class="col-md-6">
							<textarea name="f_cat_desc" id="" cols="30" rows="10" class="form-control"></textarea>
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

		$f_cat_name = $_POST['f_cat_name'];

		$f_cat_desc = $_POST['f_cat_desc'];

		$insert_f_cat = "insert into food_categories (f_cat_name,f_cat_desc) values ('$f_cat_name','$f_cat_desc')";

		$run_f_cat = mysqli_query($conn,$insert_f_cat);

		if($run_f_cat){

			echo "<script>alert('Food Category mới của bạn đã được thêm!')</script>";

			echo "<script>window.open('index.php?view_f_cat','_self')</script>";

		}

	}

?>

<?php } ?>