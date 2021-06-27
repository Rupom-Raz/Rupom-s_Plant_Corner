<?php
include 'config.php';
if (isset($_POST['l_submit'])) {
    $l_username = $_POST['l_username'];
    $l_pass = $_POST['l_pass'];

    $result = mysqli_query($conn, "SELECT * FROM `register` WHERE name = '$l_username' And password='$l_pass'");
    if (mysqli_num_rows($result)) {
        session_start();
        $_SESSION['name'] = $l_username;
        echo"<script>location.href='../Home.php'</script>";
    }else{
        echo"<script>alert('Incorrect username and password')</script>";
        echo"<script>location.href='../HTML/Login.php'</script>";
    }
}
