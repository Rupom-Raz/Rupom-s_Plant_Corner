<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!-- -----------Font Css------- -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@1,900&family=Roboto+Slab:wght@200&  display=swap"
    rel="stylesheet" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" href="../image/favicon.png" />
  <!------------------- Font Awesome cdn link ---------------->
  <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>My Cart</title>
</head>

<body>
    <!------------------- Navbar Start From Here ------------------------>
    <nav class="menu">
        <a class="navbar-brand" href="../Home.php">Rupom's Plant Corner</a>

        <ol>
            <li class="menu-item"><a href="../Home.php">Home</a></li>
            <li class="menu-item"><a href="../HTML/About.html">About</a></li>

            <div class="dropdown">
                <a class="dropbtn" href="../HTML/Services.html">Services
                    <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-content">
                    <a href="#">Free Shipping</a>
                    <a href="#">24/7 Support</a>
                    <a href="#">Help Partner</a>
                </div>
            </div>

            <li class="menu-item"><a href="../HTML/PricePlan.html">Price Plan</a></li>
            <li class="menu-item"><a href="../crud/crud_index.php">Add Plants</a></li>
            <li class="menu-item"><a href="../HTML/contact.html">Contact</a></li>
            <li class="menu-item"><a href="../HTML/Registration.php">Registration</a></li>
            <li class="menu-item"><a href="../HTML/Logout.php"><input
                        style="padding: 5px; color: #fff; background-color: #008e79; border: none; cursor: pointer;"
                        type="button" value="Logout" name="logout"></a></li>
            <i onclick="location.href = 'cart.php'" class="fa fa-shopping-cart" aria-hidden="true"></i>
            <?php
            $count = 0;
            if(isset($_SESSION['cart'])){
              $count = count($_SESSION['cart']);

            }
            
            ?>
            <span
                onclick="location.href = 'cart.php'" id="cart_number"><?php echo $count?></span>
        </ol>

    </nav>

    <!----------------------------- Navbar end here--------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>