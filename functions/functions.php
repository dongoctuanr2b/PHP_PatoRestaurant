<?php

// Create connection
$db = mysqli_connect('localhost','root','','pato_food');

// Check connection
if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
}

/// begin getfcatL ///

function getfcatL(){

	global $db;

	if(isset($_GET['f_cat_id'])){

		// $per_page = 6: moi trang chi duoc co 6 san pham 
		$per_page = 6;
		if(isset($_GET['page'])){

			$page = $_GET['page'];

		}else{

			$page = 1;
		}

		$start_from = ($page - 1) * $per_page;

		$f_cat_id = $_GET['f_cat_id'];

		$get_foods = "select * from foods where f_cat_id='$f_cat_id' and cat_id=1 order by 1 DESC LIMIT $start_from,$per_page";

		$run_foods = mysqli_query($db,$get_foods);

		while($row_foods=mysqli_fetch_array($run_foods)){

			$food_id = $row_foods['food_id'];

			$food_name = $row_foods['food_name'];

			$food_price = $row_foods['food_price'];

			$food_img1 = $row_foods['food_img1'];

			echo "
	
			<div class='col-md-6 center-responsive'>
					
				<div class='row'>
					<div class='col-md-3'>
								
						<div class='img-three-menu'>
							<a href='details.php?food_id=$food_id'>
							<img class='img-responsive' src='admin_area/product_images/$food_img1' alt=''>
							</a>
						</div>
								
					</div>
							
					<div class='col-md-9'>
								
						<div class='font-three-menu'>
							<p>
								<a href='details.php?food_id=$food_id'>
								$food_name
								</a>
							</p>

							<span class='button-menu'>
								<h5>
									$ $food_price
								</h5>

								<a href='details.php?food_id=$food_id'>

									<button class='btn btn-lg btn-learn-more'>
										VIEW DETAILS &nbsp;&nbsp;
										<i class='fas fa-long-arrow-alt-right'>
										</i>
									</button>

								</a>
							</span>

						</div>
									
								
					</div>
				</div>
					
			</div>

			";

		}

	}

	$query = "select * from foods where f_cat_id='$f_cat_id' and cat_id=1";

	$result = mysqli_query($db,$query);

	$total_records = mysqli_num_rows($result);

	$total_pages = ceil($total_records / $per_page);

		echo "

		<center>

			<ul class='pagination'>

				<li>

					<a href='menu.php?page=1'>".'First Page'."</a>

				</li>

				";

				for($i=1; $i <= $total_pages; $i++) {

					echo "

					<li>

						<a href='menu.php?page=".$i."'>".$i."</a>

					</li>

					";
				}

				echo "

				<li>

					<a href='menu.php?page=$total_pages'>".'Last Page'."</a>

				</li>

			</ul>

		</center>

		";

}

/// finish getfcatL ///


/// begin getfcatD ///

function getfcatD(){

	global $db;

	if(isset($_GET['f_cat_id'])){

		// $per_page = 6: moi trang chi duoc co 6 san pham 
		$per_page = 6;
		if(isset($_GET['page'])){

			$page = $_GET['page'];

		}else{

			$page = 1;
		}

		$start_from = ($page - 1) * $per_page;

		$f_cat_id = $_GET['f_cat_id'];

		$get_foods = "select * from foods where f_cat_id='$f_cat_id' and cat_id=2 order by 1 DESC LIMIT $start_from,$per_page";

		$run_foods = mysqli_query($db,$get_foods);

		while($row_foods=mysqli_fetch_array($run_foods)){

			$food_id = $row_foods['food_id'];

			$food_name = $row_foods['food_name'];

			$food_price = $row_foods['food_price'];

			$food_img1 = $row_foods['food_img1'];

			echo "
	
			<div class='col-md-6 center-responsive'>
					
				<div class='row'>
					<div class='col-md-3'>
								
						<div class='img-three-menu'>
							<a href='details.php?food_id=$food_id'>
							<img class='img-responsive' src='admin_area/product_images/$food_img1' alt=''>
							</a>
						</div>
								
					</div>
							
					<div class='col-md-9'>
								
						<div class='font-three-menu'>
							<p>
								<a href='details.php?food_id=$food_id'>
								$food_name
								</a>
							</p>

							<span class='button-menu'>
								<h5>
									$ $food_price
								</h5>

								<a href='details.php?food_id=$food_id'>

									<button class='btn btn-lg btn-learn-more'>
										VIEW DETAILS &nbsp;&nbsp;
										<i class='fas fa-long-arrow-alt-right'>
										</i>
									</button>

								</a>
							</span>

						</div>
									
								
					</div>
				</div>
					
			</div>

			";

		}

	}

	$query = "select * from foods where f_cat_id='$f_cat_id' and cat_id=2";

	$result = mysqli_query($db,$query);

	$total_records = mysqli_num_rows($result);

	$total_pages = ceil($total_records / $per_page);

		echo "

		<center>

			<ul class='pagination'>

				<li>

					<a href='menu.php?page=1'>".'First Page'."</a>

				</li>

				";

				for($i=1; $i <= $total_pages; $i++) {

					echo "

					<li>

						<a href='menu.php?page=".$i."'>".$i."</a>

					</li>

					";
				}

				echo "

				<li>

					<a href='menu.php?page=$total_pages'>".'Last Page'."</a>

				</li>

			</ul>

		</center>

		";				

}

/// finish getfcatD ///


/// begin getfcatHH ///

function getfcatHH(){

	global $db;

	if(isset($_GET['f_cat_id'])){

		// $per_page = 6: moi trang chi duoc co 6 san pham 
		$per_page = 6;
		if(isset($_GET['page'])){

			$page = $_GET['page'];

		}else{

			$page = 1;
		}

		$start_from = ($page - 1) * $per_page;

		$f_cat_id = $_GET['f_cat_id'];

		$get_foods = "select * from foods where f_cat_id='$f_cat_id' and cat_id=3 order by 1 DESC LIMIT $start_from,$per_page";

		$run_foods = mysqli_query($db,$get_foods);

		while($row_foods=mysqli_fetch_array($run_foods)){

			$food_id = $row_foods['food_id'];

			$food_name = $row_foods['food_name'];

			$food_price = $row_foods['food_price'];

			$food_img1 = $row_foods['food_img1'];

			echo "
	
			<div class='col-md-6 center-responsive'>
					
				<div class='row'>
					<div class='col-md-3'>
								
						<div class='img-three-menu'>
							<a href='details.php?food_id=$food_id'>
							<img class='img-responsive' src='admin_area/product_images/$food_img1' alt=''>
							</a>
						</div>
								
					</div>
							
					<div class='col-md-9'>
								
						<div class='font-three-menu'>
							<p>
								<a href='details.php?food_id=$food_id'>
								$food_name
								</a>
							</p>

							<span class='button-menu'>
								<h5>
									$ $food_price
								</h5>

								<a href='details.php?food_id=$food_id'>

									<button class='btn btn-lg btn-learn-more'>
										VIEW DETAILS &nbsp;&nbsp;
										<i class='fas fa-long-arrow-alt-right'>
										</i>
									</button>

								</a>
							</span>

						</div>
									
								
					</div>
				</div>
					
			</div>

			";

		}

	}

	$query = "select * from foods where f_cat_id='$f_cat_id' and cat_id=3";

	$result = mysqli_query($db,$query);

	$total_records = mysqli_num_rows($result);

	$total_pages = ceil($total_records / $per_page);

		echo "

		<center>

			<ul class='pagination'>

				<li>

					<a href='menu.php?page=1'>".'First Page'."</a>

				</li>

				";

				for($i=1; $i <= $total_pages; $i++) {

					echo "

					<li>

						<a href='menu.php?page=".$i."'>".$i."</a>

					</li>

					";
				}

				echo "

				<li>

					<a href='menu.php?page=$total_pages'>".'Last Page'."</a>

				</li>

			</ul>

		</center>

		";				

}

/// finish getfcatHH ///


/// begin getFoodLunch ///
function getFoodLunch(){
	global $db;

	// $per_page = 6: moi trang chi duoc co 6 san pham 
	$per_page = 6;
	if(isset($_GET['page'])){

		$page = $_GET['page'];

	}else{

		$page = 1;
	}

	$start_from = ($page - 1) * $per_page;

	$get_food = "select * from foods where cat_id=1 order by 1 LIMIT $start_from,$per_page";

	$run_food = mysqli_query($db,$get_food);
	$i=0;
	while($row_food=mysqli_fetch_array($run_food)){
		$i++;
		$food_id = $row_food['food_id'];
		$food_name = $row_food['food_name'];
		$food_price = $row_food['food_price'];
		$food_img1 = $row_food['food_img1'];

		echo"

		<div class='col-md-6 center-responsive'>
					
			<div class='row'>
				<div class='col-md-3'>
								
					<div class='img-three-menu'>
						<a href='details.php?food_id=$food_id'>
							<img class='img-responsive' src='admin_area/product_images/$food_img1' alt=''>
						</a>
					</div>
								
				</div>
							
				<div class='col-md-9'>
								
					<div class='font-three-menu'>
						<p>
							<a href='details.php?food_id=$food_id'>
								$food_name
							</a>
						</p>

						<span class='button-menu'>
							<h5>
								$ $food_price
							</h5>

							<a href='details.php?food_id=$food_id'>

								<button class='btn btn-lg btn-learn-more'>
									VIEW DETAILS &nbsp;&nbsp;
									<i class='fas fa-long-arrow-alt-right'>
									</i>
								</button>

							</a>
						</span>

					</div>
									
								
				</div>
			</div>
					
		</div>


		";
		if($i%2==0){
			echo "<div style='clear:both'></div>";
		}	
	}

	$query = "select * from foods where cat_id=1";

	$result = mysqli_query($db,$query);

	$total_records = mysqli_num_rows($result);

	$total_pages = ceil($total_records / $per_page);

		echo "

		<center>

			<ul class='pagination'>

				<li>

					<a href='menu.php?page=1'>".'First Page'."</a>

				</li>

				";

				for($i=1; $i <= $total_pages; $i++) {

					echo "

					<li>

						<a href='menu.php?page=".$i."'>".$i."</a>

					</li>

					";
				}

				echo "

				<li>

					<a href='menu.php?page=$total_pages'>".'Last Page'."</a>

				</li>

			</ul>

		</center>

		";				
				
}
/// finish getFoodLunch ///


/// begin getFoodDinner ///
function getFoodDinner(){
	global $db;

	// $per_page = 6: moi trang chi duoc co 6 san pham 
	$per_page = 6;
	if(isset($_GET['page'])){

		$page = $_GET['page'];

	}else{

		$page = 1;
	}

	$start_from = ($page - 1) * $per_page;

	$get_food = "select * from foods where cat_id=2 order by 1 LIMIT $start_from,$per_page";

	$run_food = mysqli_query($db,$get_food);
	$i=0;
	while($row_food=mysqli_fetch_array($run_food)){
		$i++;
		$food_id = $row_food['food_id'];
		$food_name = $row_food['food_name'];
		$food_price = $row_food['food_price'];
		$food_img1 = $row_food['food_img1'];

		echo"

		<div class='col-md-6 center-responsive'>
					
			<div class='row'>
				<div class='col-md-3'>
								
					<div class='img-three-menu'>
						<a href='details.php?food_id=$food_id'>
							<img class='img-responsive' src='admin_area/product_images/$food_img1' alt=''>
						</a>
					</div>
								
				</div>
							
				<div class='col-md-9'>
								
					<div class='font-three-menu'>
						<p>
							<a href='details.php?food_id=$food_id'>
								$food_name
							</a>
						</p>

						<span class='button-menu'>
							<h5>
								$ $food_price
							</h5>

							<a href='details.php?food_id=$food_id'>

								<button class='btn btn-lg btn-learn-more'>
									VIEW DETAILS &nbsp;&nbsp;
									<i class='fas fa-long-arrow-alt-right'>
									</i>
								</button>

							</a>
						</span>

					</div>
									
								
				</div>
			</div>
					
		</div>


		";
		if($i%2==0){
			echo "<div style='clear:both'></div>";
		}	
	}

	$query = "select * from foods where cat_id=2";

	$result = mysqli_query($db,$query);

	$total_records = mysqli_num_rows($result);

	$total_pages = ceil($total_records / $per_page);

		echo "

		<center>

			<ul class='pagination'>

				<li>

					<a href='menu.php?page=1'>".'First Page'."</a>

				</li>

				";

				for($i=1; $i <= $total_pages; $i++) {

					echo "

					<li>

						<a href='menu.php?page=".$i."'>".$i."</a>

					</li>

					";
				}

				echo "

				<li>

					<a href='menu.php?page=$total_pages'>".'Last Page'."</a>

				</li>

			</ul>

		</center>

		";				
}
/// finish getFoodDinner ///


/// begin getFoodHappy ///
function getFoodHappy(){
	global $db;

	// $per_page = 6: moi trang chi duoc co 6 san pham 
	$per_page = 6;
	if(isset($_GET['page'])){

		$page = $_GET['page'];

	}else{

		$page = 1;
	}

	$start_from = ($page - 1) * $per_page;

	$get_food = "select * from foods where cat_id=3 order by 1 LIMIT $start_from,$per_page";

	$run_food = mysqli_query($db,$get_food);
	$i=0;
	while($row_food=mysqli_fetch_array($run_food)){
		$i++;
		$food_id = $row_food['food_id'];
		$food_name = $row_food['food_name'];
		$food_price = $row_food['food_price'];
		$food_img1 = $row_food['food_img1'];

		echo"

		<div class='col-md-6 center-responsive'>
					
			<div class='row'>
				<div class='col-md-3'>
								
					<div class='img-three-menu'>
						<a href='details.php?food_id=$food_id'>
							<img class='img-responsive' src='admin_area/product_images/$food_img1' alt=''>
						</a>
					</div>
								
				</div>
							
				<div class='col-md-9'>
								
					<div class='font-three-menu'>
						<p>
							<a href='details.php?food_id=$food_id'>
								$food_name
							</a>
						</p>

						<span class='button-menu'>
							<h5>
								$ $food_price
							</h5>

							<a href='details.php?food_id=$food_id'>

								<button class='btn btn-lg btn-learn-more'>
									VIEW DETAILS &nbsp;&nbsp;
									<i class='fas fa-long-arrow-alt-right'>
									</i>
								</button>

							</a>
						</span>

					</div>
									
								
				</div>
			</div>
					
		</div>


		";
		if($i%2==0){
			echo "<div style='clear:both'></div>";
		}	
	}

	$query = "select * from foods where cat_id=3";

	$result = mysqli_query($db,$query);

	$total_records = mysqli_num_rows($result);

	$total_pages = ceil($total_records / $per_page);

		echo "

		<center>

			<ul class='pagination'>

				<li>

					<a href='menu.php?page=1'>".'First Page'."</a>

				</li>

				";

				for($i=1; $i <= $total_pages; $i++) {

					echo "

					<li>

						<a href='menu.php?page=".$i."'>".$i."</a>

					</li>

					";
				}

				echo "

				<li>

					<a href='menu.php?page=$total_pages'>".'Last Page'."</a>

				</li>

			</ul>

		</center>

		";
}
/// finish getFoodHappy ///

?>