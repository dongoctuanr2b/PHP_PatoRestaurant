<?php

	session_start();

	include("includes/db.php");
	include("includes/header.php");

	if(!isset($_SESSION['admin_email'])){

		echo "<script>window.open('login.php','_self')</script>";

	}else{

		$admin_email = $_SESSION['admin_email'];

		$get_admins = "select * from admins where admin_email='$admin_email'";

		$run_admins = mysqli_query($conn,$get_admins);

		$row_admins = mysqli_fetch_array($run_admins);

		$admin_id = $row_admins['admin_id'];

		$admin_name = $row_admins['admin_name'];

		$admin_img = $row_admins['admin_img'];

		$admin_country = $row_admins['admin_country'];

		$admin_about = $row_admins['admin_about'];

		$admin_contact = $row_admins['admin_contact'];

		$admin_job = $row_admins['admin_job'];

		$get_foods = "select * from foods";

		$run_foods = mysqli_query($conn,$get_foods);

		$count_foods = mysqli_num_rows($run_foods);

		$get_customers = "select * from customers";

		$run_customers = mysqli_query($conn,$get_customers);

		$count_customers = mysqli_num_rows($run_customers);

		$get_f_c = "select * from food_categories";

		$run_f_c = mysqli_query($conn,$get_f_c);

		$count_f_c = mysqli_num_rows($run_f_c);

		$get_p_orders = "select * from pending_orders";

		$run_p_orders = mysqli_query($conn,$get_p_orders);

		$count_p_orders = mysqli_num_rows($run_p_orders);

?>



<body>
	<div id="wrapper"><!-- #wrapper begin -->

		<?php 

		include("includes/sidebar.php"); 

		?>

		<div id="page-wrapper"><!-- #page-wrapper begin -->
			<div class="container-fluid"><!-- container-fluid begin -->

				<?php

				if(isset($_GET['dashboard'])){

					include("dashboard.php");

				}

				if(isset($_GET['insert_food'])){

					include("insert_food.php");

				}

				if(isset($_GET['view_food'])){

					include("view_food.php");

				}

				if(isset($_GET['delete_food'])){

					include("delete_food.php");

				}

				if(isset($_GET['edit_food'])){

					include("edit_food.php");

				}

				if(isset($_GET['insert_f_cat'])){

					include("insert_f_cat.php");

				}

				if(isset($_GET['view_f_cat'])){

					include("view_f_cat.php");

				}

				if(isset($_GET['edit_f_cat'])){

					include("edit_f_cat.php");

				}

				if(isset($_GET['delete_f_cat'])){

					include("delete_f_cat.php");

				}

				if(isset($_GET['insert_cat'])){

					include("insert_cat.php");

				}

				if(isset($_GET['view_cat'])){

					include("view_cat.php");

				}

				if(isset($_GET['edit_cat'])){

					include("edit_cat.php");

				}

				if(isset($_GET['delete_cat'])){

					include("delete_cat.php");

				}

				if(isset($_GET['insert_slide'])){

					include("insert_slide.php");

				}

				if(isset($_GET['view_slide'])){

					include("view_slide.php");

				}

				if(isset($_GET['delete_slide'])){

					include("delete_slide.php");

				}

				if(isset($_GET['edit_slide'])){

					include("edit_slide.php");

				}

				if(isset($_GET['view_customers'])){

					include("view_customers.php");

				}

				if(isset($_GET['delete_customer'])){

					include("delete_customer.php");

				}

				if(isset($_GET['view_orders'])){

					include("view_orders.php");

				}

				if(isset($_GET['delete_order'])){

					include("delete_order.php");

				}

				if(isset($_GET['view_payments'])){

					include("view_payments.php");

				}

				if(isset($_GET['delete_payment'])){

					include("delete_payment.php");

				}

				if(isset($_GET['insert_user'])){

					include("insert_user.php");

				}

				if(isset($_GET['view_users'])){

					include("view_users.php");

				}

				if(isset($_GET['edit_user'])){

					include("edit_user.php");

				}

				if(isset($_GET['delete_user'])){

					include("delete_user.php");

				}

				?>

			</div><!-- container-fluid finish -->
		</div><!-- #page-wrapper finish -->
	</div><!-- wrapper finish -->

	<!-- jQuery -->
	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Owl-Carousel -->
	<script src="js/owl.carousel.min.js"></script>

	<!-- Font-Awesome -->
	<script src="js/all.min.js"></script>

	<!-- Wow-Js -->
	<script src="js/wow.min.js"></script>
</body>
</html>

<?php } ?>