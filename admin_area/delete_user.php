<?php
if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<?php

	if(isset($_GET['delete_user'])){

		$delete_user_id = $_GET['delete_user'];

		$delete_user = "delete from admins where admin_id='$delete_user_id'";

		$run_delete_user = mysqli_query($conn,$delete_user);

		if($run_delete_user){

			echo "<script>alert('1 User của bạn đã được xóa!')</script>";

			echo "<script>window.open('index.php?view_users','_self')</script>";

		}

	}

?>

<?php } ?>