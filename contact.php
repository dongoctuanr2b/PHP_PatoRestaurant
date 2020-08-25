<?php

$active = 'CONTACT';
include("includes/header.php");

?>

<!-- Welcome -->
<div class="welcome_contact">
  <div class="container-fluid">
    <div class="row">
      <div class="title text-about-us">
        <h3>CONTACT</h3>
      </div>
    </div>
  </div> <!-- /.container-welcome -->
</div>

<main>

  <!-- Book-table -->
  <div class="book-table">
    <div class="container-fluid">
      <div class="row">
        <form action="contact.php" method="POST" role="form">
          <div class="title title_contact">
            <h3>SEND US A MESSAGE</h3>
          </div>
          <div class="container-book">
            <div class="row">
              <div class="col-md-4">
                <div class="date-name">
                  <div class="form-group">
                    <label class="control-label" for="">Name</label>
                    <input type="text" name="name" class="form-control width-250" id="" placeholder="Nguyen Van A">
                  </div>                       
                </div>
              </div>
              <div class="col-md-4">
                <div class="time-phone">
                  <div class="form-group">
                    <label class="control-label" for="">Email</label>
                    <input type="email" name="email" class="form-control width-250" id="" placeholder="dog@gmail.com">
                  </div>           
                </div>
              </div>
              <div class="col-md-4">
                <div class="people-email">
                  <div class="form-group">
                    <label class="control-label" for="">Phone</label>
                    <input type="tel" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control width-250" id="" placeholder="0824567894">
                  </div>
                </div>
              </div>
              <div>
                <div class="message">
                  <label class="control-label" for="">Message</label>
                  <textarea name="message" class="form-control" placeholder="Message" rows="6"></textarea>
                </div> 
              </div>
              <div class="col-md-offset-4 active-book">
                <button type="submit" name="submit" class="btn btn-lg button_contact">SUBMIT</button>
              </div>


            </div> <!-- /.row-form -->
          </div>
        </form>

        <?php

        if(isset($_POST['submit'])){

          /// Admin receives message with this ///

          $sender_name = $_POST['name'];

          $sender_email = $_POST['email'];

          $sender_phone = $_POST['phone'];

          $sender_message = $_POST['message'];

          $receiver_email = "dongoctuanr2b@gmail.com";

          mail($receiver_email,$sender_name,$sender_phone,$sender_message,$sender_email);

          /// Tự động trả lời message ///

          $email = $_POST['email'];

          $subject = "Chào mừng bạn đến với trang web của tôi";

          $msg = "Cảm ơn bạn đã phản hồi với chúng tôi. Chúng tôi sẽ sớm trả lời bạn";

          $from = "dongoctuanr2b@gmail.com";

          mail($email,$subject,$msg,$from);

          echo "<script>alert('Bạn đã gửi thư thành công!')</script>";


        }

        ?>

        <div class="phone-booking">
          <div class="row">
            <div class="col-md-6">
              <div class="reservation-phone">
                <h3>RESERVE BY PHONE</h3> 
                <p>Donec quis euismod purus. Donec feugiat ligula rhoncus, varius nisl sed, tincidunt lectus. Nulla vulputate , lectus vel volutpat efficitur, orci lacus sodales sem, sit amet quam: <span>(001) 345 6889</span></p> 
              </div>
            </div>
            <div class="col-md-6">
              <div class="reservation-booking">
                <h3>FOR EVENT BOOKING</h3>  
                <p>Donec feugiat ligula rhoncus: <span>(001) 345 6889</span> , varius nisl sed, tinci-dunt lectus sodales sem.</p> 
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.row-book -->
    </div><!-- /.container-book -->
  </div>

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

<script>
  $(document).ready(function() {
    $('.owl-carousel-events').owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>']
    });
    $('.owl-review').owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>']
    });
  });
</script> 
</body>
</html>