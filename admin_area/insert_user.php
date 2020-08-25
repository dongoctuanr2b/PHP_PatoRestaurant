<?php
if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

	?>
	
	<div class="row"> <!-- row begin -->
		
		<div class="col-lg-12"> <!-- col-lg-12 begin -->
			
			<ol class="breadcrumb"> <!-- breadcrumb begin -->
				
				<li class="active"> <!-- active begin -->
					
					<i class="fas fa-tachometer-alt"></i> Dashboard / Insert Users

				</li> <!-- active finish -->

			</ol> <!-- breadcrumb finish -->

		</div> <!-- col-lg-12 finish -->

	</div> <!-- row finish -->

	<div class="row"> <!-- row begin -->
		
		<div class="col-lg-12"> <!-- col-lg-12 begin -->
			
			<div class="panel panel-default"> <!-- panel panel-default begin -->
				
				<div class="panel-heading"> <!-- panel-heading begin -->
					
					<h3 class="panel-title"> <!-- panel-title begin -->
						
						<i class="fas fa-money-bill-wave"></i> Insert Users	

					</h3> <!-- panel-title finish -->

				</div> <!-- panel-heading finish -->

			</div> <!-- panel panel-default finish -->

			<div class="panel-body"> <!-- panel-body begin -->
				
				<form action="" class="form-horizontal" method="post" enctype="multipart/form-data"> <!-- form-horizontal begin -->
					
					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label">Username</label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="text" class="form-control" name="admin_name" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label">Email</label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="email" class="form-control" name="admin_email" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"> Password </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="password" class="form-control" name="admin_pass" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"> Job </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="text" class="form-control" name="admin_job" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"> Country </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="text" class="form-control" name="admin_country" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"> Contact </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="text" class="form-control" name="admin_contact">

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"> Image </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="file" class="form-control" name="admin_img" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"> About </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<textarea class="form-control" name="admin_about" id="" cols="19" rows="6"></textarea>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"></label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="submit" class="btn btn-primary form-control" name="submit" value="Insert User">

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

	if(isset($_POST['submit'])){

		$admin_name = $_POST['admin_name'];

		$admin_email = $_POST['admin_email'];

		$admin_pass = $_POST['admin_pass'];

		$admin_job = $_POST['admin_job'];

		$admin_country = $_POST['admin_country'];

		$admin_contact = $_POST['admin_contact'];

		$admin_about = $_POST['admin_about'];

		$admin_img = $_FILES['admin_img']['name'];

		$tmp_name = $_FILES['admin_img']['tmp_name'];

		move_uploaded_file($tmp_name, "admin_images/$admin_img");

		$insert_admin = "insert into admins (admin_name,admin_email,admin_pass,admin_img,admin_country,admin_about,admin_contact,admin_job) values ('$admin_name','$admin_email',$admin_pass,'$admin_img','$admin_country','$admin_about','$admin_contact','$admin_job')";

		$run_admin = mysqli_query($conn,$insert_admin);

		if($run_admin){
			echo"<script>alert('Insert User Successfully')</script>";
			echo"<script>window.open('index.php?view_users','_self')</script>";
		}

	}

	?>

	<?php } ?>