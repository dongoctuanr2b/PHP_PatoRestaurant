<?php

session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<?php

if(isset($_GET['c_id'])){

	$customer_id = $_GET['c_id'];

	$status = "pending";

	$invoice_no = mt_rand();

	foreach($_SESSION['cart'] as $key => $value){

		$food_id = $value['food_id'];

		$food_qty = $value['food_qty'];

		$food_size = $value['food_size'];

		$get_foods = "select * from foods where food_id='$food_id'";

		$run_foods = mysqli_query($conn,$get_foods);

		$sub_total = $value['food_price'] * $value['food_qty'];

		while($row_foods=mysqli_fetch_array($run_foods)){

			$insert_c_orders = "insert into customer_orders (customer_id,due_amount,invoice_no,qty,size,order_date,status) values ('$customer_id','$sub_total','$invoice_no','$food_qty','$food_size',NOW(),'$status')";

			$run_c_orders = mysqli_query($conn,$insert_c_orders);

			$insert_pending_orders = "insert into pending_orders (customer_id,food_id,invoice_no,qty,size,order_status) values ('$customer_id','$key','$invoice_no','$food_qty','$food_size','$status')";

			$run_pending_orders = mysqli_query($conn,$insert_pending_orders);

			echo "<script>alert('Đơn hàng của bạn đã được gửi đi. Cảm ơn!')</script>";

			echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

			if($run_c_orders && $run_pending_orders){

				unset($_SESSION['cart'][$key]);
			}

		}

	}

}

?>
