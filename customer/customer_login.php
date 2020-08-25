<?php

if(isset($_SESSION['cart'])){

	$count = count($_SESSION['cart']);
}

?>

<div class="box"> <!-- box begin -->

	<div class="box-header"> <!-- box-header begin -->

		<center> <!-- center begin -->

			<h2>

				Login

			</h2>

		</center> <!-- center finish -->

		<form class="checkout" action="checkout.php" method="post" enctype="multipart/form-data"> <!-- form begin -->
			<div class="col-md-12">
				<div class="form-group row"> <!-- form-group begin -->

					<label> Email </label>

					<input type="email" class="form-control width-250" name="c_email" required>

				</div> <!-- form-group finish -->

				<div class="form-group row"> <!-- form-group begin -->

					<label> Password </label>

					<input type="password" class="form-control width-250" name="c_pass" required>

				</div> <!-- form-group finish -->

			</div>

			<div class="text-center"> <!-- text-center begin -->

				<button type="submit" name="login" class="btn btn-lg btn-learn-more">

					<i class="fa fa-user-md"></i> Đăng nhập

				</button>

				<hr>

				<a href="register.php" class="btn btn-lg btn-learn-more"> 

					<h5> Tạo tài khoản </h5>

				</a>

			</div> <!-- text-center finish -->

		</form> <!-- form finish -->

	</div> <!-- box-header finish -->

</div> <!-- box finish -->


<?php 
	if(isset($_POST['login'])){

		$customer_email = $_POST['c_email'];

		$customer_pass = $_POST['c_pass'];

		$select_customer = "select * from customers where customer_email='$customer_email' and customer_pass='$customer_pass'";

		$run_customer = mysqli_query($conn,$select_customer);

		$row_customer = mysqli_fetch_array($run_customer);

		$check_customer = mysqli_num_rows($run_customer);

		if($check_customer == 0){

			echo "<script>alert('Tài khoản hoặc mật khẩu của bạn không đúng')</script>";

			exit();

		}if($check_customer == 1 and $count == 0){

			$_SESSION['customer_email'] = $customer_email;

			echo "<script>alert('Đăng nhập thành công')</script>";

			echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

		}else{

			$_SESSION['customer_email'] = $customer_email;

			echo "<script>alert('Đăng nhập thành công')</script>";

			echo "<script>window.open('checkout.php','_self')</script>";

		}

	}

?>