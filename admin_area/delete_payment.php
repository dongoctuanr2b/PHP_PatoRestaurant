<?php
if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<?php

	if(isset($_GET['delete_payment'])){

		$delete_pay_id = $_GET['delete_payment'];

		$delete_pay = "delete from payments where payment_id='$delete_pay_id'";

		$run_delete_pay = mysqli_query($conn,$delete_pay);

		if($run_delete_pay){

			echo "<script>alert('1 Payment của bạn đã được xóa!')</script>";

			echo "<script>window.open('index.php?view_payments','_self')</script>";

		}

	}

?>

<?php } ?>