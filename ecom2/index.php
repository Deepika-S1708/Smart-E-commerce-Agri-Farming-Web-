<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parivartan Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation" style="background-color: #83c11f;">
      <ul class="title-area">
        <li class="name">
          <h1 style="background-color: #f7f7f7; "><a href="index.php" style="text-decoration: none; color: #83c11f;"> Parivartan </a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section" >
      <!-- Right Nav Section -->
        <ul class="right" >
        
          <li><a href="products.php" style="background-color: #83c11f;">Products</a></li>
          <li><a href="cart.php" style="background-color: #83c11f;">View Cart</a></li>
          <li><a href="orders.php"style="background-color: #83c11f;" >My Orders</a></li>
          <li><a href="contact.php" style="background-color: #83c11f;">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php" style="background-color: #83c11f;">Log In</a></li>';
            echo '<li><a href="register.php" style="background-color: #83c11f;">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <img data-interchange="[images/Swatantra.jpg, (retina)], [images/Swatantra.jpg, (large)], [images/Swatantra.jpg, (mobile)], [images/Swatantra.jpg, (medium)]">
    <noscript><img src="images/Swatantra.jpg" style="width: 100%; object-fit: fill;"></noscript>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Parivartan. All Rights Reserved.</p>
        </footer>

      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
