<?php

if(isset($_POST['update_pass'])){

	$customer_email = $_SESSION['customer_email'];

	$old_pass = $_POST['old_pass'];

	$new_pass = $_POST['new_pass'];

	$new_pass_again = $_POST['new_pass_again'];

	$get_old_pass = "select * from customers where customer_pass='$old_pass'";

	$run_old_pass = mysqli_query($conn,$get_old_pass);

	$check_old_pass = mysqli_fetch_array($run_old_pass);

	if($check_old_pass == 0){

		echo "<script>alert('Bạn đã nhập sai mật khẩu cũ.')</script>";

		echo "<script>window.open('my_account.php?change_pass','_self')</script>";

	}

	if($new_pass != $new_pass_again){

		echo "<script>alert('Xin lỗi, xác nhận mật khẩu không khớp.')</script>";

		echo "<script>window.open('my_account.php?change_pass','_self')</script>";

	}

	$update_customers_p = "update customers set customer_pass='$new_pass' where customer_email='$customer_email'";

	$run_customers_p = mysqli_query($conn,$update_customers_p);

	if($run_customers_p){

		echo "<script>alert('Mật khẩu của bạn đã được cập nhật.')</script>";

		echo "<script>window.open('my_account.php?my_orders','_self')</script>";

	}

}


?>

<h1 align="center"> Change Password </h1>

<form action="" method="post"> <!-- form begin -->
	
	<div class="form-group"> <!-- form-group begin -->
		
		<label for=""> Your Old Password: </label>

		<input type="password" class="form-control" name="old_pass" required>

	</div> <!-- form-group finish -->

	<div class="form-group"> <!-- form-group begin -->
		
		<label for=""> Your New Password: </label>

		<input type="password" class="form-control" name="new_pass" required>

	</div> <!-- form-group finish -->

	<div class="form-group"> <!-- form-group begin -->
		
		<label for=""> Confirm Your New Password: </label>

		<input type="password" class="form-control" name="new_pass_again" required>

	</div> <!-- form-group finish -->

	<div class="text-center"> <!-- text-center begin -->
		
		<button type="submit" class="btn btn-lg btn-learn-more" name="update_pass"> <!-- btn btn-primary begin -->
			
			<i class="fa fa-user-md"></i> Update Now

		</button> <!-- btn btn-primary finish -->

	</div> <!-- text-center finish -->

</form> <!-- form finish -->