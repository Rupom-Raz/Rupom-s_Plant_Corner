<?php
session_start();
if (isset($_SESSION['name'])) {
} else {
    echo"<script>alert('Login frist to access home')</script>";
    echo"<script>location.href='../HTML/Login.php'</script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- -----------Font Css------- -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@1,900&family=Roboto+Slab:wght@200&  display=swap"
    rel="stylesheet" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" href="./image/favicon.png" />
  <!------------------- Font Awesome cdn link ---------------->
  <link rel="stylesheet" href="./css/font-awesome.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="./css/home.css" />


  <?php echo "<title>".'Hi,'.$_SESSION['name']."</title>" ?>;
  </title>
</head>

<body>
  <!------------------- Navbar Start From Here ------------------------>
  <nav class="menu">
    <a class="navbar-brand" href="./Home.php"><?php echo $_SESSION['name']?>'s Plant Corner</a>

    <ol>
      <li class="menu-item"><a href="./Home.php">Home</a></li>
      <li class="menu-item"><a href="./HTML/About.php">About</a></li>

      <div class="dropdown">
        <a class="dropbtn" href="./HTML/Services.php">Services
          <i class="fa fa-caret-down"></i>
        </a>
        <div class="dropdown-content">
          <a href="#">Free Shipping</a>
          <a href="#">24/7 Support</a>
          <a href="#">Help Partner</a>
        </div>
      </div>

      <li class="menu-item"><a href="./HTML/PricePlan.php">Price Plan</a></li>
      <li class="menu-item"><a href="./crud/crud_index.php">Add Plants</a></li>
      <li class="menu-item"><a href="./HTML/contact.php">Contact</a></li>
      <li class="menu-item"><a href="./HTML/Registration.php">Registration</a></li>
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

  <!------------------------ Home page start---------------------- -->

  <section class="home_container">
    <!-- Sidebar start here--------------- -->
    <div class="social">
      <ul>
        <li class="twitter"><a href="#">Twitter<i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li class="facebook"><a href="#">Facebook<i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li class="google-plus"><a href="#">Google plus<i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        <li class="instagram"><a href="#">Instagram<i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
    </div>
    <!-- Sidebar end here--------------- -->
    <div class="hero_section">
      <h1 class="hey">Hey there, I'm </h1>
      <?php echo "<span class='name'>".$_SESSION['name']."</span><br>" ?>;
      <span class="profession">A Plant Lover guy,who loves plants for their own sake and knows how to cherish
        them</span>
      <p>
        Green is the prime color of the world,And that from which it's loveliness arises <br> <span
          class="qoute_owner">- Pedro Calderon </span>
      </p>
      <button class="home_btn"><a href="./HTML/contact.php">Contact Us</a></button>
      <div class="overlay"></div>
    </div>
  </section>
  <!---------------------------- Home page section end here----------------------- -->

  <!------------ About section  start  here -------------->
  <section class=" about">
    <div class="overlay"></div>
    <div class="about_container">
      <div class="owner">
        <img src="./image/about.jpg" alt="">
      </div>
      <div class="owner_words">
        <h3>Who We Are</h3>
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
          unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
          passages, and more recently with desktop publishing software like Aldus PageMaker including versions...</p>

      </div>
    </div>

  </section>
  <!------------ About section  end here -------------->


  <!-------------- Plants gallery start here ------------------>

  <section class="gallery_sec">
    <h3>Our Plant's Gallery</h3>
    <div class="gallery_container">
      <div><img src="./image/plants image/sqr1.jpeg" alt=""></div>
      <div class="ver"><img src="./image/plants image/ver1.jpeg" alt=""></div>
      <div><img src="./image/plants image/sqr2.jpeg" alt=""></div>
      <div class="land"><img src="./image/plants image/land1.jpeg" alt=""></div>
      <div><img src="./image/plants image/sqr3.jpeg" alt=""></div>
      <div class="huge"><img src="./image/plants image/huge_land.jpeg" alt=""></div>
      <div><img src="./image/plants image/sqr4.jpeg" alt=""></div>
      <div class="ver"><img src="./image/plants image/ver3.jpeg" alt=""></div>
      <div class="ver"><img src="./image/plants image/ver4.jpeg" alt=""></div>
      <div class="land"><img src="./image/plants image/land2.jpeg" alt=""></div>
      <div class="ver"><img src="./image/plants image/ver6.jpeg" alt=""></div>
      <div class="land"><img src="./image/plants image/land3.jpeg" alt=""></div>
      <div class="ver"><img src="./image/plants image/ver2.jpeg" alt=""></div>
      <div class="ver"><img src="./image/plants image/ver10.jpeg" alt=""></div>
      <div><img src="./image/plants image/sqr3.jpeg" alt=""></div>
      <div class="land"><img src="./image/plants image/huge_land.jpeg" alt=""></div>

      <div><img src="./image/plants image/sqr1.jpeg" alt=""></div>
      <div><img src="./image/plants image/sqr5.jpeg" alt=""></div>

    </div>
  </section>

  <!-------------- Plants gallery end here ------------------>
  <!-------------- Services section start here ------------------->
  <section class="services">
    <h3>Our Services</h3>
    <div class="services_container">
      <div class="service1">
        <div class="item">
          <img src="./image/asset 8.png" alt="">
          <h5>Free Shipping</h5>
          <p>On order over ৳1500</p>
        </div>

      </div>
      <div class="service2">
        <div class="item">
          <img src="./image/asset 9.png" alt="">
          <h5>Support</h5>
          <p>LIFE TIME SUPPORT </p>
        </div>

      </div>
      <div class="service3">
        <div class="item">
          <img src="./image/asset 10.png" alt="">
          <h5>Help Center</h5>
          <p>Help All Aspects</p>
        </div>

      </div>
      <div class="service4">
        <div class="item">
          <img src="./image/asset 11.png" alt="">
          <h5>Contact With Us</h5>
          <p>Phone:01123456258</p>
        </div>

      </div>
    </div>

  </section>

  <!----------------------------------- Services end here ----------------------->


  <!-------------------------- Plant store start here ------------------------------->


  <section class="plant_store">
    <h3>Our Plant's Store</h3>
    <div class="store_container">
      <div class="single_store">
        <div class="store_item">
          <form action="./cart/manage_cart.php" method="POST">
            <img src="./image/asset 7.jpeg" alt="">
            <h5>Pramire</h5>
            <p>৳-2000</p>
            <button type="submit" name="add_to_cart" onclick="location.href = './cart/cart.php'" id="btn">Add to
              cart</button>
            <input type="hidden" name="item_name" value="Pramire">
            <input type="hidden" name="price" value="2000">
          </form>
        </div>

      </div>
      <div class="single_store">
        <div class="store_item">
          <form action="./cart/manage_cart.php" method="POST">
            <img src="./image/asset 12.jpeg" alt="">
            <h5>Ocean Poisonberry</h5>
            <p>৳-400</p>
            <button type="submit" name="add_to_cart" onclick="location.href = './cart/cart.php'" id="btn">Add to
              cart</button>
            <input type="hidden" name="item_name" value="Ocean Poisonberry">
            <input type="hidden" name="price" value="400">
          </form>
        </div>

      </div>
      <div class="single_store">
        <div class="store_item">
          <form action="./cart/manage_cart.php" method="POST">
            <img src="./image/asset 13.jpeg" alt="">
            <h5>Bleeding Houseleek</h5>
            <p>৳-1500</p>
            <button type="submit" name="add_to_cart" onclick="location.href = './cart/cart.php'" id="btn">Add to
              cart</button>
            <input type="hidden" name="item_name" value="Bleeding Houseleek">
            <input type="hidden" name="price" value="1500">
          </form>
        </div>

      </div>
      <div class="single_store">
        <div class="store_item">
          <form action="./cart/manage_cart.php" method="POST">
            <img src="./image/asset 14.jpeg" alt="">
            <h5>Hammer Nightshade</h5>
            <p>৳-2400</p>
            <button type="submit" name="add_to_cart" onclick="location.href = './cart/cart.php'" id="btn">Add to
              cart</button>
            <input type="hidden" name="item_name" value="Hammer Nightshade">
            <input type="hidden" name="price" value="2400">
          </form>
        </div>

      </div>
    </div>


    <div class="store_container">
      <div class="single_store">
        <div class="store_item">
          <form action="./cart/manage_cart.php" method="POST">
            <img src="./image/asset 15.jpeg" alt="">
            <h5>Aching Thistle</h5>
            <p>৳-1000</p>
            <button type="submit" name="add_to_cart" onclick="location.href = './cart/cart.php'" id="btn">Add to
              cart</button>
            <input type="hidden" name="item_name" value="Aching Thistle">
            <input type="hidden" name="price" value="1000">
          </form>
        </div>

      </div>
      <div class="single_store">
        <div class="store_item">
          <form action="./cart/manage_cart.php" method="POST">
            <img src="./image/asset 16.jpeg" alt="">
            <h5>Tiny Wineberry</h5>
            <p>৳-200</p>
            <button type="submit" name="add_to_cart" onclick="location.href = './cart/cart.php'" id="btn">Add to
              cart</button>
            <input type="hidden" name="item_name" value="Tiny Wineberry">
            <input type="hidden" name="price" value="200">
          </form>
        </div>

      </div>
      <div class="single_store">
        <div class="store_item">
          <form action="./cart/manage_cart.php" method="POST">
            <img src="./image/asset 17.jpeg" alt="">
            <h5>Ikririn</h5>
            <p>৳-800</p>
            <button type="submit" name="add_to_cart" onclick="location.href = './cart/cart.php'" id="btn">Add to
              cart</button>
            <input type="hidden" name="item_name" value="Ikririn">
            <input type="hidden" name="price" value="800">
          </form>
        </div>

      </div>
      <div class="single_store">
        <div class="store_item">
          <form action="./cart/manage_cart.php" method="POST">
            <img src="./image/asset 18.jpeg" alt="">
            <h5>Sheek</h5>
            <p>৳-100</p>
            <button type="submit" name="add_to_cart" onclick="location.href = './cart/cart.php'" id="btn">Add to
              cart</button>
            <input type="hidden" name="item_name" value="Sheek">
            <input type="hidden" name="price" value="100">
          </form>
        </div>

      </div>
    </div>
    <div class="store_container">
      <div class="single_store">
        <div class="store_item">
          <form action="./cart/manage_cart.php" method="POST">
            <img src="./image/asset 19.jpeg" alt="">
            <h5>Trehmanor</h5>
            <p>৳-4000</p>
            <button type="submit" name="add_to_cart" onclick="location.href = './cart/cart.php'" id="btn">Add to
              cart</button>
            <input type="hidden" name="item_name" value="Trehmanor">
            <input type="hidden" name="price" value="4000">
          </form>
        </div>

      </div>
      <div class="single_store">
        <div class="store_item">
          <form action="./cart/manage_cart.php" method="POST">
            <img src="./image/asset 20.jpeg" alt="">
            <h5>Chruffip</h5>
            <p>৳-300</p>
            <button type="submit" name="add_to_cart" onclick="location.href = './cart/cart.php'" id="btn">Add to
              cart</button>
            <input type="hidden" name="item_name" value="Chruffip">
            <input type="hidden" name="price" value="300">
          </form>
        </div>

      </div>
      <div class="single_store">
        <div class="store_item">
          <form action="./cart/manage_cart.php" method="POST">
            <img src="./image/asset 21.jpeg" alt="">
            <h5>Aithranfanor</h5>
            <p>৳-780</p>
            <button type="submit" name="add_to_cart" onclick="location.href = './cart/cart.php'" id="btn">Add to
              cart</button>
            <input type="hidden" name="item_name" value="Aithranfanor">
            <input type="hidden" name="price" value="780">
          </form>
        </div>

      </div>
      <div class="single_store">
        <div class="store_item">
          <form action="./cart/manage_cart.php" method="POST">
            <img src="./image/asset 16.jpeg" alt="">
            <h5>Ash Thistle</h5>
            <p>৳-900</p>
            <button type="submit" name="add_to_cart" onclick="location.href = './cart/cart.php'" id="btn">Add to
              cart</button>
            <input type="hidden" name="item_name" value="Ash Thistle">
            <input type="hidden" name="price" value="900">
          </form>
        </div>

      </div>
    </div>

  </section>

  <!------------------ Plant store end here ---------------------->

  <!---------------- Price plan Start here ------------------------->
  <section class="price_plan">
    <h3>Our Price Plan</h3>
    <div class="container group">
      <div class="grid-1-5">
        <h2>Basic</h2>
        <h3><span class="uppercase">Basic</span></h3>
        <p>Limited Plants</p>
        <ul>
          <li>Limited Support</li>
          <li>Help Partner</li>
          <li>24/7 Support</li>
        </ul>
        <a href="" class="button">Order</a>
      </div>
      <div class="grid-1-5">
        <h2>Standrad</h2>
        <h3><sup>৳</sup>79<span class="small">/mo</span></h3>
        <p>100 Indoor Plants</p>
        <ul>
          <li>Unlimited Support</li>
          <li>Unlimited Help Partner</li>
          <li>24/7 Support</li>
        </ul>
        <a href="" class="button">Order</a>
      </div>
      <div class="grid-1-5">
        <h2>Primium</h2>
        <h3><sup>৳</sup>179<span class="small">/mo</span></h3>
        <p>500 Indoor Plants</p>
        <ul>
          <li>Unlimited Support</li>
          <li>Unlimited Help Partner</li>
          <li>24/7 Support</li>
        </ul>
        <a href="" class="button">Order</a>
      </div>


    </div>

  </section>
  <!---------------- Price Plan end here ------------------------->

  <!----------------------- Contact start here -------------------------->
  <section class="contact_section">
    <h3>contact with us</h3>

    <div class="contact_container">

      <div class="contact_img">
        <img src="./image/contact.jpg" alt="">
      </div>

      <div class="address_info">

        <div class="wrap_address">
          <div class="address_left">
            <img src="./image/home.png" alt="">
          </div>
          <div class="address_right">
            <h5>ADDRESS</h5>
            <p><span>France:</span> Contrada Isola 14, Macerata, 62100 France</p>
            <p><span>Filand:</span> Via Cavour, 14 30026 Portogruaro Filand</p>
            <p><span>Viet Nam:</span> 76 Le Lai Street, District 1, Ho Chi Minh City, Vietnam</p>
          </div>
        </div>
        <div class="wrap_address">
          <div class="address_left">
            <img src="./image/message.png" alt="">
          </div>
          <div class="address_right">
            <h5>E-MAIL</h5>
            <p><span>France:</span> Contrada Isola 14, Macerata, 62100 France</p>
            <p><span>Filand:</span> Via Cavour, 14 30026 Portogruaro Filand</p>
            <p><span>Viet Nam:</span> 76 Le Lai Street, District 1, Ho Chi Minh City, Vietnam</p>
          </div>
        </div>
        <div class="wrap_address">
          <div class="address_left">
            <img src="./image/phone.png" alt="">
          </div>
          <div class="address_right">
            <h5>PHONE</h5>
            <p><span>France:</span> Contrada Isola 14, Macerata, 62100 France</p>
            <p><span>Filand:</span> Via Cavour, 14 30026 Portogruaro Filand</p>
            <p><span>Viet Nam:</span> 76 Le Lai Street, District 1, Ho Chi Minh City, Vietnam</p>
          </div>
        </div>
      </div>
    </div>


    <div class="secondContact">
      <div class="newsletter_section">
        <form action="./Home.php">
          <div class="login_form">


            <h4>Get In Touch</h4>
            <div class="input-fields">
              <div class="name">

                <input type="text" placeholder="Enter your name" id="email" />
              </div>
              <div class="email">

                <input type="text" placeholder="Enter your email" id="email" />
              </div>
              <div class="phone">

                <input type="text" placeholder="Enter your phone number" id="email" />
              </div>
              <div class="subject">
                <input type="text" placeholder="Enter your subject" id="email" />
              </div>
              <div class="message">
                <input type="text" placeholder="Enter Your message">
              </div>



            </div>
            <button class="btn">Send</button>


          </div>
        </form>



      </div>
      <div class="map_section">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d177328.86602838655!2d-118.10604233836547!3d34.32928569761513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2dbef4714d959%3A0xaa04bea62fc51d91!2sAngeles%20National%20Forest!5e0!3m2!1sbn!2sbd!4v1617778194257!5m2!1sbn!2sbd"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

      </div>
    </div>

  </section>
  <!----------------------- Contact end here -------------------------->

  <!----------------- Footer section start here --------------------------------------->

  <section class="footer_section">

    <div class="footer_top">
      <div class="copyright">
        Copyright © 2021 <a href="" title="">Rupom's Plant Corner</a>.Powered by <a
          href="http://engotheme.com/">RazTheme</a>.
      </div>
      <div class="countries">
        <img src="./image/flag.png" alt=""><span class="country_name">United States</span>
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
          <li><a href="./comment-system/comment.php">Leave a comment</a></li>
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
<script type="text/javascript" src="./JS/main.js"></script>


</html>