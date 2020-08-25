<center> <!-- center begin -->

	<h1> Do You Really Want To Delete Your Account? </h1>

	<form action="" method="post"> <!-- form begin -->
		
		<input type="submit" class="btn btn-danger" name="Yes" value="Yes, I Want To Delete">

		<input type="submit" class="btn btn-primary" name="No" value="No, I Dont Want To Delete">

	</form> <!-- form finish -->

</center> <!-- center finish -->

<?php

$customer_email = $_SESSION['customer_email'];

if(isset($_POST['Yes'])){

	$delete_customers = "delete from customers where customer_email='$customer_email'";

	$run_customers = mysqli_query($conn,$delete_customers);

	if($run_customers){

		session_destroy();

		echo "<script>alert('Bạn đã xóa tài khoản thành công!')</script>";

		echo "<script>window.open('../index.php','_self')</script>";

	}

}

if(isset($_POST['No'])){

	echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}

?>