<?php
    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('../login.php','_self')</script>";

    }else{

?>

<div class="row"><!-- row 1 begin -->
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		<ol class="breadcrumb"><!-- breadcrumb begin -->
			<li>
				
				<i class="fa fa-tachometer-alt"></i> Dashboard / View Slides

			</li>
		</ol><!-- breadcrumb finish -->
	</div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		<div class="panel panel-default"><!-- panel panel-default begin -->
			<div class="panel-heading"><!-- panel-heading begin -->
				<h3 class="panel-title"><!-- panel-title begin -->
					
					<i class="fa fa-tags"></i> View Slides

				</h3><!-- panel-title finish -->
			</div><!-- panel-heading finish -->

			<div class="panel-body"><!-- panel-body begin -->
				
				<?php

				$get_slide = "select * from slider";

				$run_slide = mysqli_query($conn,$get_slide);

				while($row_slide=mysqli_fetch_array($run_slide)){

					$slide_id = $row_slide['slide_id'];

					$slide_name = $row_slide['slide_name'];

					$slide_image = $row_slide['slide_image'];

				?>

				<div class="col-lg-3 col-md-3"><!-- col-lg-3 col-md-3 begin -->
					<div class="panel panel-primary"><!-- panel panel-primary begin -->
						<div class="panel-heading"><!-- panel-heading begin -->
							<h3 class="panel-title" align="center"><!-- panel-title begin -->
								
								<?php echo $slide_name; ?>

							</h3><!-- panel-title finish -->
						</div><!-- panel-heading finish -->

						<div class="panel-body">
							<img src="slides_images/<?php echo $slide_image; ?>" alt="<?php echo $slide_image; ?>" class="img-responsive">
						</div>

						<div class="panel-footer">
							<center>
								
								<a href="index.php?delete_slide=<?php echo $slide_id; ?>" class="pull-right">
									<i class="fa fa-trash-alt"></i> Delete
								</a>

								<a href="index.php?edit_slide=<?php echo $slide_id; ?>" class="pull-left">
									<i class="fa fa-pencil-alt"></i> Edit
								</a>

								<div class="clearfix"></div>

							</center>
						</div>

					</div><!-- panel panel-primary finish -->
				</div><!-- col-lg-3 col-md-3 finish -->

				<?php } ?>

			</div><!-- panel-body finish -->

		</div><!-- panel panel-default finish -->
	</div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>