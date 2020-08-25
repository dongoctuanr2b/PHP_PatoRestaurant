<?php

if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<?php

	if(isset($_GET['delete_order'])){

		$delete_order_id = $_GET['delete_order'];

		$delete_orders = "delete from pending_orders where order_id='$delete_order_id'";

		$run_delete_orders = mysqli_query($conn,$delete_orders);

		if($run_delete_orders){

			echo "<script>alert('1 Order đã được xóa!')</script>";

			echo "<script>window.open('index.php?view_orders','_self')</script>";

		}

	}

?>


<?php } ?>