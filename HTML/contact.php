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
    <link rel="stylesheet" href="../css/contact.css">

    <title>Contact Us</title>
</head>

<body>
    <!------------------- Navbar Start From Here ------------------------>
    <nav class="menu">
        <a class="navbar-brand" href="../Home.php">Rupom's Plant Corner</a>
        <ol>
            <li class="menu-item"><a href="../Home.php">Home</a></li>
            <li class="menu-item"><a href="./About.php">About</a></li>

            <div class="dropdown">
                <a class="dropbtn" href="./Services.php">Services
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
                        style="padding: 5px; color: #fff; background-color: #008e79; border: none; cursor: pointer;"
                        type="button" value="Logout" name="logout"></a></li>
            <?php
            $count = 0;
            if (isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
            }
            
            ?>
            <i onclick="location.href = './cart/cart.php'" class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span onclick="location.href = './cart/cart.php'" id="cart_number"><?php echo $count ?></span>

        </ol>

    </nav>

    <!----------------------------- Navbar end here--------------- -->


    <!----------------------- Contact start here -------------------------->
    <section class="contact_section">
        <h3>contact with us</h3>

        <div class="contact_container">

            <div class="contact_img">
                <img src="../image/contact.jpg" alt="">
            </div>

            <div class="address_info">

                <div class="wrap_address">
                    <div class="address_left">
                        <img src="../image/home.png" alt="">
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
                        <img src="../image/message.png" alt="">
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
                        <img src="../image/phone.png" alt="">
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
                <form action="./Home.html">
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