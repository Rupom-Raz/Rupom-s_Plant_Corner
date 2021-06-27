<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My css -->
    <link rel="stylesheet" href="../css/Registration.css">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="../image/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <title>Signup Page</title>
</head>

<body>

    <form action="../php_action/insert.php" method="POST">
        <div class="reg_form">
            <div class="logo"></div>

            <div class="sub-title">
                Signup Form
            </div>
            <div class="input-fields">
                <div class="fname">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="r_name" placeholder="Enter your username" id="fname" />
                </div>

                <div class="email">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="text" name="r_email" placeholder="Enter your email" id="email" />
                </div>


                <div class="phone">
                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                    <input type="text" name="r_phone" placeholder="Enter your phone number" id="phone" />
                </div>


                <div class="password">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="r_pass" placeholder="Enter your password" id="password" />
                </div>

                <div class="confirm_password">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="r_con_pass" placeholder="Confirm your password" id="confirm_password" />
                </div>
                
            </div>
            <input class="btn" type="submit" name="r_submit" value="Register">

            <div class="link"><a href="#">
                    Forgot password?</a> already have an account?
                <a href="./Login.php">SignIN</a>
            </div>
        </div>
    </form>
</body>
<script src="../JS/Reg validation.js"></script>

</html>