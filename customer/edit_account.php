<?php

$customer_email = $_SESSION['customer_email'];

$get_customers = "select * from customers where customer_email='$customer_email'";

$run_customers = mysqli_query($conn,$get_customers);

$row_customers = mysqli_fetch_array($run_customers);

$customer_id = $row_customers['customer_id'];

$customer_name = $row_customers['customer_name'];

$customer_email = $row_customers['customer_email'];

$customer_country = $row_customers['customer_country'];

$customer_city = $row_customers['customer_city'];

$customer_contact = $row_customers['customer_contact'];

$customer_address = $row_customers['customer_address'];

$customer_img = $row_customers['customer_img'];

if(isset($_POST['update'])){

	$update_id = $customer_id;

	$c_name = $_POST['c_name'];

	$c_email = $_POST['c_email'];

	$c_country = $_POST['c_country'];

	$c_city = $_POST['c_city'];

	$c_contact = $_POST['c_contact'];

	$c_address = $_POST['c_address'];

	$c_image = $_FILES['c_image']['name'];

	$c_image_tmp = $_FILES['c_image']['tmp_name'];

	move_uploaded_file($c_image_tmp, "customer_images/$c_image");

	$update_customers = "update customers set customer_name='$c_name', customer_email='$c_email', customer_country='$c_country', customer_city='$c_city', customer_contact='$c_contact', customer_address='$c_address', customer_img='$c_image' where customer_id='$update_id'";

	$run_up_customers = mysqli_query($conn,$update_customers);

	if($run_up_customers){

		echo "<script>alert('Tài khoản của bạn đã được cập nhật! Xin hãy đăng nhập lại.')</script>";

		echo "<script>window.open('logout.php','_self')</script>";

	}


}

?>

<h1 align="center"> Edit Your Account </h1>

<form action="" method="post" enctype="multipart/form-data"> <!-- form begin -->
	
	<div class="form-group"> <!-- form-group begin -->
		
		<label for=""> Customer Name: </label>

		<input type="text" class="form-control" name="c_name" value="<?php echo $customer_name; ?>" required>

	</div> <!-- form-group finish -->

	<div class="form-group"> <!-- form-group begin -->
		
		<label for=""> Customer Email: </label>

		<input type="email" class="form-control" name="c_email" value="<?php echo $customer_email; ?>" required>

	</div> <!-- form-group finish -->

	<div class="form-group"> <!-- form-group begin -->
		
		<label for=""> Customer Country: </label>

		<input type="text" class="form-control" name="c_country" value="<?php echo $customer_country; ?>" required>

	</div> <!-- form-group finish -->

	<div class="form-group"> <!-- form-group begin -->
		
		<label for=""> Customer City: </label>

		<input type="text" class="form-control" name="c_city" value="<?php echo $customer_city; ?>" required>

	</div> <!-- form-group finish -->

	<div class="form-group"> <!-- form-group begin -->
		
		<label for=""> Customer Contact: </label>

		<input type="text" class="form-control" name="c_contact" value="<?php echo $customer_contact; ?>" required>

	</div> <!-- form-group finish -->

	<div class="form-group"> <!-- form-group begin -->
		
		<label for=""> Customer Address: </label>

		<input type="text" class="form-control" name="c_address" value="<?php echo $customer_address; ?>" required>

	</div> <!-- form-group finish -->

	<div class="form-group"> <!-- form-group begin -->
		
		<label for=""> Customer Image: </label>

		<input type="file" class="form-control form-height-custom" name="c_image">

		<img src="customer_images/<?php echo $customer_img; ?>" alt="Customer Image" class="img-responsive">

	</div> <!-- form-group finish -->

	<div class="text-center"> <!-- text-center begin -->
		
		<button class="btn btn-lg btn-learn-more" name="update"> <!-- btn btn-primary begin -->
			
			<i class="fa fa-user-md"></i> Update Now

		</button> <!-- btn btn-primary finish -->

	</div> <!-- text-center finish -->

</form> <!-- form finish -->