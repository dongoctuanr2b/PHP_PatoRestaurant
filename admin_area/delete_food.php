<?php

if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<?php

	if(isset($_GET['delete_food'])){

		$delete_id = $_GET['delete_food'];

		$delete_foods = "delete from foods where food_id='$delete_id'";

		$run_delete_foods = mysqli_query($conn,$delete_foods);

		if($run_delete_foods){

			echo "<script>alert('1 food đã được xóa!')</script>";

			echo "<script>window.open('index.php?view_food','_self')</script>";

		}

	}

?>


<?php } ?>