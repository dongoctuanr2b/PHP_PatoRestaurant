<?php

$active = 'CART';
include("includes/header.php");

?>

<!-- Welcome -->
<div class="welcome_cart">
  <div class="container-fluid">
    <div class="row">
      <div class="title text-about-us">
        <h3>CART</h3>
      </div>
    </div>
  </div> <!-- /.container-welcome -->
</div>

<main>

  <!-- navbar-blog -->
  <div class="navbar-blog">
    <div class="container-fluid">
      <div class="row">
        <div class="home-blog"> 

          <ul class="breadcrumb"> <!-- breadcrumb begin -->
            <li class=""><a href="index.php">Home</a></li>
            <li class="">Cart</li>
          </ul> <!-- breadcrumb finish -->

        </div>
      </div>
    </div>
  </div>

  <div id="content"> <!-- #content begin -->
    <div class="container"> <!-- container begin -->

      <div id="cart" class="col-md-9"> <!-- col-md-9 begin -->

        <div class="box"> <!-- box begin -->

          <form action="cart.php" method="post" enctype="multipart/form-data"> <!-- form begin -->

            <h1>Shopping Cart</h1>

            <p class="text-muted">You currently have <?php if(isset($_SESSION['cart'])){ echo count($_SESSION['cart']); }else{echo "0";} ?> food(s) in your cart</p>

            <div class="table-responsive"> <!-- table-responsive begin -->

              <table class="table"> <!-- table begin -->

                <thead> <!-- thead begin -->

                  <tr> <!-- tr begin -->

                    <th colspan="2">Food</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Size</th>
                    <th colspan="1">Delete</th>
                    <th colspan="2">Sub-Total</th>

                  </tr> <!-- tr finish -->

                </thead> <!-- thead finish -->

                <tbody> <!-- tbody begin -->

                  <?php

                  if(!empty($_SESSION['cart'])){

                    $total = 0;

                    $subtotal = 0;

                    foreach ($_SESSION['cart'] as $key => $food_id) {

                      $subtotal = $food_id['food_price'] * $food_id['food_qty'];
                      $total = $total + ($food_id['food_price'] * $food_id['food_qty']);
                      
                  ?>

                    <tr> <!-- tr begin -->

                      <td>
                        <div class="same-radius">
                          <img src="admin_area/product_images/<?php echo $food_id['food_img1']; ?>" alt="Food 1" class="img-responsive">
                        </div>
                      </td>

                      <td>

                        <a href="details.php?food_id=<?php echo $food_id['food_id']; ?>"> <?php echo $food_id['food_name']; ?> </a>

                      </td>

                      <td>

                        <?php echo $food_id['food_qty']; ?>

                      </td>

                      <td>

                        $<?php echo $food_id['food_price']; ?>

                      </td>

                      <td>

                        <?php echo $food_id['food_size']; ?>

                      </td>

                      <td>

                        <a href="cart.php?action=delete&food_id=<?php echo $food_id['food_id']; ?>" class="btn btn-light btn-lg"><i class="far fa-trash-alt"></i></a>

                      </td>

                      <td>

                        $<?php echo $subtotal; ?>

                      </td>

                      </tr> <!-- tr finish -->
                <?php } ?> <!-- end foreach -->

                </tbody> <!-- tbody finish -->

                <tfoot> <!-- tfoot begin -->

                  <tr> <!-- tr begin -->

                    <th colspan="5">Total</th>
                    <th colspan="5">
                      $<?php 

                      echo $total;

                      ?>
                      
                    </th>

                  </tr> <!-- tr finish -->

                </tfoot> <!-- tfoot finish -->

              <?php } ?> <!-- end if -->

              </table> <!-- table finish -->

            </div> <!-- table-responsive finish -->

            <div class="box-footer"> <!-- box-footer begin -->

              <div class="pull-left"> <!-- pull-left begin -->

                <a href="menu.php" class="btn btn-lg btn-learn-more"> <!-- btn btn-default begin -->

                  <i class="fa fa-chevron-left"></i> Continue Shopping

                </a> <!-- btn btn-default finish -->

              </div> <!-- pull-left finish -->

              <div class="pull-right"> <!-- pull-right begin -->

                <?php

                if(empty($_SESSION['cart'])){

                  echo "<a href='menu.php' class='btn btn-lg btn-learn-more'>

                  MENU <i class='fa fa-chevron-right'></i>

                </a>";

                }else{

                  echo "<a href='checkout.php' class='btn btn-lg btn-learn-more'>

                  Proceed Checkout <i class='fa fa-chevron-right'></i>

                </a>";

                }

                ?>

                

              </div> <!-- pull-right finish -->

            </div> <!-- box-footer finish -->

          </form> <!-- form finish -->

        </div> <!-- box finish -->

        <div id="padding_cart row same-height-row"> <!-- #row same-height-row begin -->
          <div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 begin -->
            <div class="box same-height headline"> <!-- box same-height headline begin -->
              <h3 class="text-center">Products You Maybe Like</h3>
            </div> <!-- box same-height headline finish -->
          </div> <!-- col-md-3 col-sm-6 finish -->

          <?php 

          $get_food = "select * from foods order by rand() LIMIT 0,3";

          $run_food = mysqli_query($conn,$get_food);

          while($row_food=mysqli_fetch_array($run_food)){

            $food_id = $row_food['food_id'];

            $food_name = $row_food['food_name'];

            $food_price = $row_food['food_price'];

            $food_img1 = $row_food['food_img1'];

            echo "
  
            <div class='col-md-3 col-sm-6 center-responsive'> <!-- col-md-3 col-sm-6 center-responsive begin -->
              <div class='product same-height'> <!-- product same-height begin -->
               <div class='same-radius'>
                  <a href='details.php?food_id=$food_id'>
                    <img src='admin_area/product_images/$food_img1' alt='Food 1' class='img-responsive'>
                  </a>
                </div>
                <div class='text'> <!-- text begin -->
                  <h3><a href='details.php?food_id=$food_id'> $food_name </a></h3>

                  <p class='price'>$ $food_price</p>

                </div> <!-- text finish -->

              </div> <!-- product same-height finish -->
            </div> <!-- col-md-3 col-sm-6 center-responsive finish -->

            ";

          }

          ?>

        </div> <!-- #row same-height-row finish -->

      </div> <!-- col-md-9 finish -->

      <div class="col-md-3"> <!-- col-md-3 begin -->

        <div id="order-summary" class="box"> <!-- box begin -->

          <div class="box-header"> <!-- box-header begin -->

            <h3>Order Summary</h3>

          </div> <!-- box-header finish -->

          <p class="text-muted"> <!-- text-muted begin -->

            Shipping and additional costs are calculated based on value you have entered

          </p> <!-- text-muted finish -->

          <div class="table-responsive"> <!-- table-responsive begin -->

            <table class="table"> <!-- table begin -->

              <tbody> <!-- tbody begin -->

                <tr> <!-- tr begin -->

                  <td> Order-ALL-Sub-Total </td>
                  <th> $<?php echo $total; ?> </th>

                </tr> <!-- tr finish -->

                <tr> <!-- tr begin -->

                  <td> Shipping and Handling </td>
                  <th> $0 </th>

                </tr> <!-- tr finish -->

                <tr> <!-- tr begin -->

                  <td> Tax </td>
                  <th> $0 </th>

                </tr> <!-- tr finish -->

                <tr class="total"> <!-- tr begin -->

                  <td> Total </td>
                  <th> $<?php echo $total; ?> </th>

                </tr> <!-- tr finish -->

              </tbody> <!-- tbody finish -->

            </table> <!-- table finish -->

          </div> <!-- table-responsive finish -->

        </div> <!-- box finish -->

      </div> <!-- col-md-3 finish -->

    </div> <!-- container finish -->
  </div> <!-- #content finish -->


</main>

<footer>

  <?php

  include("includes/footer.php");

  ?>
  
</footer>

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

<?php

  if(filter_input(INPUT_GET, 'action') == 'delete'){

    //lặp tất cả các sp trong giỏ hàng cho đến khi match với food_id
    foreach ($_SESSION['cart'] as $key => $value) {
      
      if($value['food_id'] == filter_input(INPUT_GET, 'food_id')){

        unset($_SESSION['cart'][$key]);

      }

    } 

  }

?>
