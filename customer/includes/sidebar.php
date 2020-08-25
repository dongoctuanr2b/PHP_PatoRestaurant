<div class="panel-heading"> <!-- panel-heading begin -->

	<?php

	$customer_email = $_SESSION['customer_email'];

	$get_customer = "select * from customers where customer_email='$customer_email'";

	$run_customer = mysqli_query($conn,$get_customer);

	$row_customer = mysqli_fetch_array($run_customer);

	$c_name = $row_customer['customer_name'];

	$c_img = $row_customer['customer_img'];

	if(isset($_SESSION['customer_email'])){

		echo "

		<center> <!-- center begin -->

		<img class='img-responsive img_account' src='customer_images/$c_img' alt='Pato_PHP Profile'>

		</center> <!-- center finish -->

		<br>

		<h3 align='center' class='panel-title'> <!-- panel-title begin -->

			Name: $c_name

		</h3> <!-- panel-title finish -->

		";

	}

	?>

	

</div> <!-- panel-heading finish -->
<div class="panel-body">
	<div class="menu-categories">
		<ul>
			<li class="<?php  if(isset($_GET['my_orders'])) {echo "active";} ?>">
				<a href="my_account.php?my_orders"><i class="fa fa-list"></i> My Orders</a>
			</li><hr>
			<li class="<?php  if(isset($_GET['pay_offline'])) {echo "active";} ?>">
				<a href="my_account.php?pay_offline"><i class="fa fa-bolt"></i> Pay Offline</a>
			</li><hr>
			<li class="<?php  if(isset($_GET['edit_account'])) {echo "active";} ?>">
				<a href="my_account.php?edit_account"><i class="fa fa-pencil-alt"></i> Edit Account</a>
			</li><hr>
			<li class="<?php  if(isset($_GET['change_pass'])) {echo "active";} ?>">
				<a href="my_account.php?change_pass"><i class="fa fa-user"></i> Change Password</a>
			</li><hr>
			<li class="<?php  if(isset($_GET['delete_account'])) {echo "active";} ?>">
				<a href="my_account.php?delete_account"><i class="fas fa-trash"></i> Delete Account</a>
			</li><hr>

			<li>

				<a href="logout.php">

					<i class="fa fa-sign-out-alt"></i> Log Out

				</a>

			</li>
		</ul>
	</div>
</div>