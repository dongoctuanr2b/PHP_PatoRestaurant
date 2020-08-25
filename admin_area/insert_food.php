<?php
if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

	?>
	
	<div class="row"> <!-- row begin -->
		
		<div class="col-lg-12"> <!-- col-lg-12 begin -->
			
			<ol class="breadcrumb"> <!-- breadcrumb begin -->
				
				<li class="active"> <!-- active begin -->
					
					<i class="fas fa-tachometer-alt"></i> Dashboard / Insert Foods

				</li> <!-- active finish -->

			</ol> <!-- breadcrumb finish -->

		</div> <!-- col-lg-12 finish -->

	</div> <!-- row finish -->

	<div class="row"> <!-- row begin -->
		
		<div class="col-lg-12"> <!-- col-lg-12 begin -->
			
			<div class="panel panel-default"> <!-- panel panel-default begin -->
				
				<div class="panel-heading"> <!-- panel-heading begin -->
					
					<h3 class="panel-title"> <!-- panel-title begin -->
						
						<i class="fas fa-money-bill-wave"></i> Insert Foods	

					</h3> <!-- panel-title finish -->

				</div> <!-- panel-heading finish -->

			</div> <!-- panel panel-default finish -->

			<div class="panel-body"> <!-- panel-body begin -->
				
				<form action="" class="form-horizontal" method="post" enctype="multipart/form-data"> <!-- form-horizontal begin -->
					
					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label">Food Name</label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="text" class="form-control" name="food_name" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label">Food Category</label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<select name="f_cat_id" id="" class="form-control"> <!-- form-control begin -->
								
								<option value="">Select a Category Food</option>

								<?php

								$get_f_cat = "select * from food_categories";
								$run_f_cat = mysqli_query($conn,$get_f_cat);

								while($row_f_cat=mysqli_fetch_array($run_f_cat)){

									$f_cat_id = $row_f_cat['f_cat_id'];
									$f_cat_name = $row_f_cat['f_cat_name'];
									
									echo "

									<option value='$f_cat_id'> $f_cat_name </option>

									";

								}

								?>

							</select> <!-- form-control finish -->
						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"> Category</label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<select name="cat_id" id="" class="form-control"> <!-- form-control begin -->
								
								<option value="">Select a Category </option>

								<?php

								$get_cat = "select * from categories";
								$run_cat = mysqli_query($conn,$get_cat);

								while ($row_cat=mysqli_fetch_array($run_cat)) {
									
									$cat_id = $row_cat['cat_id'];
									$cat_name = $row_cat['cat_name'];

									echo"

									<option value='$cat_id'> $cat_name </option>

									";
								}

								?>

							</select> <!-- form-control finish -->
						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label">Food Image 1 </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="file" class="form-control" name="food_img1" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label">Food Image 2 </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="file" class="form-control" name="food_img2">

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label">Food Image 3 </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="file" class="form-control" name="food_img3">

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label">Food Price</label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="text" class="form-control" name="food_price" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label">Food Keywords </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="text" class="form-control" name="food_keywords" required>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label">Food Desc </label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<textarea name="food_desc" class="form-control" cols="19" rows="6"></textarea>

						</div> <!-- col-md-6 finish -->

					</div> <!-- form-group finish -->

					<div class="form-group"> <!-- form-group begin -->
						
						<label for="" class="col-md-3 control-label"></label>

						<div class="col-md-6"> <!-- col-md-6 begin -->
							
							<input type="submit" class="btn btn-primary form-control" name="submit" value="Insert Food">

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

		$food_name = $_POST['food_name'];
		$f_cat_id = $_POST['f_cat_id'];
		$cat_id = $_POST['cat_id'];
		$food_price = $_POST['food_price'];
		$food_keywords = $_POST['food_keywords'];
		$food_desc = $_POST['food_desc'];

		$food_img1 = $_FILES['food_img1']['name'];
		$food_img2 = $_FILES['food_img2']['name'];
		$food_img3 = $_FILES['food_img3']['name'];

		$tmp_name1 = $_FILES['food_img1']['tmp_name'];
		$tmp_name2 = $_FILES['food_img2']['tmp_name'];
		$tmp_name3 = $_FILES['food_img3']['tmp_name'];

		move_uploaded_file($tmp_name1, "product_images/$food_img1");
		move_uploaded_file($tmp_name2, "product_images/$food_img2");
		move_uploaded_file($tmp_name3, "product_images/$food_img3");

		$get_food = "insert into foods (f_cat_id,cat_id,date,food_img1,food_img2,food_img3,food_name,food_price,food_keywords,food_desc) value ('$f_cat_id','$cat_id',NOW(),'$food_img1','$food_img2','$food_img3','$food_name','$food_price','$food_keywords','$food_desc')";

		$run_food = mysqli_query($conn,$get_food);

		if($run_food){
			echo"<script>alert('Insert Food Successfully')</script>";
			echo"<script>window.open('index.php?view_food','_self')</script>";
		}

	}

	?>

	<?php } ?>