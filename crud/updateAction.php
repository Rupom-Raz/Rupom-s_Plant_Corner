<?php
include 'config.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];

    $imageTempLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $imageLocalLocation = "image/.$imageName";

    move_uploaded_file($imageTempLocation, $imageLocalLocation);
    $update_query = "UPDATE `card` SET `name`='$name',`price`='$price',`image`='$imageLocalLocation' WHERE id='$id'";
    if (mysqli_query($conn, $update_query)) {
        echo"<script>location.href='crud_index.php'</script>";
    } else {
        echo"<script>alert(Not Updated)</script>";
    }
}
