<?php

session_start();

include("includes/db.php");


	if(isset($_GET['c_id'])){

		$delete_cart = "delete from food_cart where f_id";

		$run_cart = mysqli_query($conn,$delete_cart);

		if($run_cart){

			echo "<script>window.open('index.php','_self')</script>";
		}

	}

session_destroy();

echo "<script>window.open('index.php','_self')</script>";

?>