<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My css -->
    <link rel="stylesheet" href="../css/login.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="../image/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <title>Login Page</title>
</head>

<body>

    <form action="../php_action/loginAction.php" method="POST">
        <div class="login_form">
            <div class="logo"></div>

            <div class="sub-title">
                Login Form
            </div>
            <div class="input-fields">
                <div class="email">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="text" name="l_username" placeholder="Enter your email" id="email" />
                </div>

                <div class="password">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="l_pass" placeholder="Enter your password" id="password" />
                </div>

            </div>
            <a href="../Home.php"><input class="btn" type="submit" name="l_submit" value="Login"></a>

            <div class="link"><a href="#">
                    Forgot password?</a> or
                <a href="../HTML/Registration.php">Signup</a>
            </div>
        </div>
    </form>
</body>


</html>