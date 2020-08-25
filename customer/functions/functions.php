<?php

// Create connection
$db = mysqli_connect('localhost','root','','pato_food');

// Check connection
if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
}


/// begin item ///
function item(){

	global $db;

	$get_item = "select * from food_cart where f_id";

	$run_item = mysqli_query($db,$get_item);

	$count_item = mysqli_num_rows($run_item);

	echo "$count_item";

}
/// finish item ///


/// begin total ///
function total_price(){

	global $db;

	$total = 0;

	$get_total = "select * from food_cart where f_id";

	$run_total = mysqli_query($db,$get_total);

	while($row_total = mysqli_fetch_array($run_total)){

		$food_id = $row_total['f_id'];

		$food_qty = $row_total['food_qty'];

		$get_price = "select * from foods where food_id=$food_id";

		$run_price = mysqli_query($db,$get_price);

		while($row_price = mysqli_fetch_array($run_price)){

			$sub_total = $row_price['food_price'] * $food_qty;

			$total += $sub_total;

		}

	}

	echo "$" . $total;

}
/// finish total ///

?>