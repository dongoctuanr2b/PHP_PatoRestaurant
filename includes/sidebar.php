<div class="search">
	<form class="form-inline">
		<div class="form-group">
			<label class="sr-only" for="exampleInputAmount"></label>
			<div class="input-group width-search">
				<input type="text" class="form-control width-search" id="exampleInputAmount" placeholder="Search">
				<div class="input-group-addon border-search"><a href=""><i class="fas fa-search"></i></a></div>
			</div>
		</div>
	</form>
</div>
<div class="menu-categories">
	<h5 class="font-h5">CATEGORIES</h5><hr>
	<ul>

		<?php

		$get_f_cat = "select * from food_categories";

		$run_f_cat = mysqli_query($conn,$get_f_cat);

		while($row_f_cat=mysqli_fetch_array($run_f_cat)){

			$f_cat_id = $row_f_cat['f_cat_id'];

			$f_cat_name = $row_f_cat['f_cat_name'];

			echo "

				<li><a href='menu.php?f_cat_id=$f_cat_id'> $f_cat_name </a></li><hr>

			";

		}

		?>
	</ul>
</div>	
<div class="most-popular">
	<h5 class="font-h5">MOST POPULAR</h5>
	<div class="row">
		<div class="col-md-3">
			<div class="img-blog-popular">
				<a href=""><img src="images/images-blog/blog-11.jpg" alt=""></a>
			</div>
			<div class="img-blog-popular">
				<a href=""><img src="images/images-blog/blog-12.jpg" alt=""></a>
			</div>
			<div class="img-blog-popular">
				<a href=""><img src="images/images-blog/blog-13.jpg" alt=""></a>
			</div>
			<div class="img-blog-popular">
				<a href=""><img src="images/images-blog/blog-14.jpg" alt=""></a>
			</div>
			<div class="img-blog-popular">
				<a href=""><img src="images/images-blog/blog-15.jpg" alt=""></a>
			</div>
		</div>
		<div class="col-md-9">
			<div class="menu-popular">
				<a href=""><p>BEST PLACES FOR WINE</p></a>
				<span>3 days ago</span>
			</div>
			<div class="menu-popular">
				<a href=""><p>EGGS AND CHEESE</p></a>
				<span>July 2, 2019</span>
			</div>
			<div class="menu-popular">
				<a href=""><p>STYLE THE WEDDING PARTY</p></a>
				<span>May 28, 2019</span>
			</div>
			<div class="menu-popular">
				<a href=""><p>COOKING RECIPE DELICIOUS</p></a>
				<span>May 25, 2019</span>
			</div>
			<div class="menu-popular">
				<a href=""><p>PIZZA IS PREPARED FRESH</p></a>
				<span>May 2, 2019</span>
			</div>
		</div>
	</div>
</div>
<div class="archive">
	<h5 class="font-h5">ARCHIVE</h5>
	<div class="row">
		<div class="col-md-6">	
			<div class="archive-month">
				<ul>
					<li><a href="">JULY 2018</a></li>
					<li><a href="">JUNE 2018</a></li>
					<li><a href="">MAY 2018</a></li>
					<li><a href="">APRIL 2018</a></li>
					<li><a href="">MARCH 2018</a></li>
					<li><a href="">FEBRUARY 2018</a></li>
					<li><a href="">JANUARY 2018</a></li>
					<li><a href="">DECEMBER 2017</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-6">
			<div class="archive-menu">
				<ul>
					<li>(9)</li>
					<li>(39)</li>
					<li>(29)</li>
					<li>(35)</li>
					<li>(22)</li>
					<li>(32)</li>
					<li>(21)</li>
					<li>(26)</li>
				</ul>
			</div>
		</div>
	</div>
</div>
