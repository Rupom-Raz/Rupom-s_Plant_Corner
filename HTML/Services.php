<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font css -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@1,900&family=Roboto+Slab:wght@200&  display=swap"
    rel="stylesheet" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" href="../image/favicon.png" />
  <!------------------- Font Awesome cdn link ---------------->
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="../css/services.css">

  <title>Services</title>
</head>

<body>
  <!------------------- Navbar Start From Here ------------------------>
  <nav class="menu">
    <a class="navbar-brand" href="../Home.php">Rupom's Plant Corner</a>
    <ol>
      <li class="menu-item"><a href="../Home.php">Home</a></li>
      <li class="menu-item"><a href="./About.php">About</a></li>

      <div class="dropdown">
        <a class="dropbtn">Services
          <i class="fa fa-caret-down"></i>
        </a>
        <div class="dropdown-content">
          <a href="#">Free Shipping</a>
          <a href="#">24/7 Support</a>
          <a href="#">Help Partner</a>
        </div>
      </div>

      <li class="menu-item"><a href="./PricePlan.php">Price Plan</a></li>
      <li class="menu-item"><a href="../crud/crud_index.php">Add Plants</a></li>
      <li class="menu-item"><a href="./contact.php">Contact</a></li>
      <li class="menu-item"><a href="./Registration.php">Registration</a></li>
      <li class="menu-item"><a href="./HTML/Logout.php"><input
            style="padding: 5px; color: #fff; background-color: #008e79; border: none; cursor: pointer;" type="button"
            value="Logout" name="logout"></a></li>
            <?php
            $count = 0;
            if(isset($_SESSION['cart'])){
              $count = count($_SESSION['cart']);

            }
            
            ?>
      <i onclick="location.href = './cart/cart.php'" class="fa fa-shopping-cart" aria-hidden="true"></i>
      <span
        onclick="location.href = './cart/cart.php'" id="cart_number"><?php echo $count ?></span>

    </ol>

  </nav>

  <!----------------------------- Navbar end here--------------- -->

  <!------------ Services section  start  here -------------->

  <section class="services">
    <h2>Our Services</h2>
    <div class="services_container">
      <div class="service1">
        <div class="item">
          <img src="../image/asset 8.png" alt="">
          <h5>Free Shipping</h5>
          <p>On order over ৳1500</p>
        </div>

      </div>
      <div class="service2">
        <div class="item">
          <img src="../image/asset 9.png" alt="">
          <h5>Support</h5>
          <p>LIFE TIME SUPPORT </p>
        </div>

      </div>
      <div class="service3">
        <div class="item">
          <img src="../image/asset 10.png" alt="">
          <h5>Help Center</h5>
          <p>Help All Aspects</p>
        </div>

      </div>
      <div class="service4">
        <div class="item">
          <img src="../image/asset 11.png" alt="">
          <h5>Contact With Us</h5>
          <p>Phone:01123456258</p>
        </div>

      </div>
    </div>

  </section>


  <!------------ Services section  end here -------------->


  <!----------------- Footer section start here --------------------------------------->

  <section class="footer_section">

    <div class="footer_top">
      <div class="copyright">
        Copyright © 2021 <a href="" title="">Rupom's Plant Corner</a>.Powered by <a
          href="http://engotheme.com/">RazTheme</a>.
      </div>
      <div class="countries">
        <img src="../image/flag.png" alt=""><span class="country_name">United States</span>
      </div>
    </div>

    <div class="footer_bottom">
      <div class="footer_menu">
        <ul>
          <li><a href="#">Gift Center</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Buying Guildes</a></li>
          <li><a href="../comment-system/comment.php">Leave a comment</a></li>
        </ul>
      </div>


      <div class="social_icon">
        <a href="#" title="facebook">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="#" title="facebook">
          <i class="fa fa-instagram"></i>
        </a>
        <a href="#" title="Pinterest">
          <i class="fa fa-pinterest-p"></i>
        </a>
      </div>
    </div>



  </section>



  <!----------------- Footer section end here --------------------------------------->

</body>

</html>