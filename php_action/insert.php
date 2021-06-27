<?php
include "./config.php";
if (isset($_POST['r_submit'])) {
    $r_username = $_POST['r_name'];
    $r_email = $_POST['r_email'];
    $r_phone = $_POST['r_phone'];
    $r_pass = $_POST['r_pass'];
    $r_con_pass = $_POST['r_con_pass'];
}
$insert_query = "INSERT INTO `register`(`name`, `email`, `phone`, `password`) VALUES ('$r_username','$r_email','$r_phone','$r_pass')";
$duplicate_username = mysqli_query($conn, "
SELECT * FROM `register` WHERE name = '$r_username'");
$phone_regex = "/(\+88)?-?01[1-9]\d{8}$/";
$email_regex = "/^[0-9A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/";

if (strlen($r_username)<3 || strlen($r_username)>20) {
    echo"<script>alert('Username should be 3-20 charecter!')</script>";
    echo"<script>location.href='../HTML/Registration.php'</script>";
} elseif (!preg_match($email_regex, $r_email)) {
    echo"<script>alert('Enter a valid email')</script>";
    echo"<script>location.href='../HTML/Registration.php'</script>";
} elseif (!preg_match($phone_regex, $r_phone)) {
    echo"<script>alert('Enter a valid phone number')</script>";
    echo"<script>location.href='../HTML/Registration.php'</script>";
} elseif ($r_pass!=$r_con_pass) {
    echo"<script>alert('Password not match')</script>";
    echo"<script>location.href='../HTML/Registration.php'</script>";
} elseif (mysqli_num_rows($duplicate_username)>0) {
    echo"<script>alert('Username already taken')</script>";
    echo"<script>location.href='../HTML/Registration.php'</script>";
} else {
    if (!mysqli_query($conn, $insert_query)) {
        echo"<script>alert('Not inserted')</script>";
    } else {
        echo"<script>alert('Successfully inserted')</script>";
        echo"<script>location.href='../HTML/Login.php'</script>";
    }
}
