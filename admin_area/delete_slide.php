<?php
if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<?php

	if(isset($_GET['delete_slide'])){

		$delete_slide_id = $_GET['delete_slide'];

		$delete_slide = "delete from slider where slide_id='$delete_slide_id'";

		$run_delete_slide = mysqli_query($conn,$delete_slide);

		if($run_delete_slide){

			echo "<script>alert('1 Slide của bạn đã được xóa!')</script>";

			echo "<script>window.open('index.php?view_slide','_self')</script>";

		}

	}

?>

<?php } ?>