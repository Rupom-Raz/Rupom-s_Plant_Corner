<?php
include 'config.php';
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $imageTempLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $imageLocalLocation = "image/.$imageName";
    move_uploaded_file($imageTempLocation, $imageLocalLocation);
    $insert_query = "INSERT INTO `card`(`name`, `price`, `image`) VALUES ('$name','$price','$imageLocalLocation')";
    if (mysqli_query($conn, $insert_query)) {
        echo"<script>alert(Database Inserted)</script>";
        echo"<script>location.href='crud_index.php'</script>";
    }
}
