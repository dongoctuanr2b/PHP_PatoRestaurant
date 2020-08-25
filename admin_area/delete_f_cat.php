<?php
if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<?php

	if(isset($_GET['delete_f_cat'])){

		$delete_f_cat_id = $_GET['delete_f_cat'];

		$delete_f_cat = "delete from food_categories where f_cat_id='$delete_f_cat_id'";

		$run_delete_f_cat = mysqli_query($conn,$delete_f_cat);

		if($run_delete_f_cat){

			echo "<script>alert('1 Food Category của bạn đã được xóa!')</script>";

			echo "<script>window.open('index.php?view_f_cat','_self')</script>";

		}

	}

?>

<?php } ?>