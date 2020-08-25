<?php
if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<?php

	if(isset($_GET['delete_customer'])){

		$delete_c_id = $_GET['delete_customer'];

		$delete_c = "delete from customers where customer_id='$delete_c_id'";

		$run_delete_c = mysqli_query($conn,$delete_c);

		if($run_delete_c){

			echo "<script>alert('1 Customer của bạn đã được xóa!')</script>";

			echo "<script>window.open('index.php?view_customers','_self')</script>";

		}

	}

?>

<?php } ?>