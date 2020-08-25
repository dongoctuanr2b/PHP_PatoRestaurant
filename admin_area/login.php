<?php

session_start();

include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Login</title>
	<!-- icon in the title bar -->
	<link rel="icon" href="images/icons/favicon.png">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<!-- Owl-Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="css/all.min.css">

	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- My-style -->
	<link rel="stylesheet" href="css/style_admin.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>

	<div class="container"><!-- begin container -->
		<form action="" class="form-login" method="post"><!-- begin form-login -->
			<h2 class="form-login-heading"> Admin Login </h2>

			<input type="email" class="form-control" placeholder="Email Address" name="admin_email" required>

			<input type="password" class="form-control" placeholder="Your Password" name="admin_pass" required>

			<button class="btn btn-lg btn-primary btn-block" name="admin_login"><!-- btn btn-lg btn-primary btn-block begin -->
				
				Login

			</button><!-- btn btn-lg btn-primary btn-block finish -->

		</form><!-- finish form-login -->
	</div><!-- finish container -->
	
</body>
</html>

<?php

if(isset($_POST['admin_login'])){

	$admin_email = mysqli_real_escape_string($conn,$_POST['admin_email']);

	$admin_pass = mysqli_real_escape_string($conn,$_POST['admin_pass']);

	$get_admins = "select * from admins where admin_email='$admin_email' and admin_pass='$admin_pass'";

	$run_admins = mysqli_query($conn,$get_admins);

	$count = mysqli_num_rows($run_admins);

	if($count == 1){

		$_SESSION['admin_email'] = $admin_email;

		echo "<script>alert('Đăng nhập thành công. Chào mừng bạn trở lại!')</script>";

		echo "<script>window.open('index.php?dashboard','_self')</script>";

	}else{

		echo "<script>alert('Sai tài khoản hoặc mật khẩu!')</script>";

	}

}

?>