<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Plant Store</title>
    <style>
        form {
            background-color: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php
include 'config.php';
$id = $_GET['id'];
$selectQuery  = "SELECT * FROM `card` WHERE id ='$id'";
$record = mysqli_query($conn, $selectQuery);
$data = mysqli_fetch_array($record);
?>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="updateAction.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        Name: <input class="form-control"
                            value="<?php echo $data['name']?>"
                            type="text" name="name" id="">
                    </div>
                    <div class="mb-3">
                        Price: <input class="form-control"
                            value="<?php echo $data['price']?>"
                            type="text" name="price" id="">
                    </div>
                    <div class="mb-3">
                        Image: <input class="form-control" type="file" name="image"
                            value="<?php echo $data['image']?>">
                    </div>
                    <div class="mb-3">
                        <img src="<?php echo $data['image']?>"
                            width="80px" alt="IMAGE">
                    </div>
                    <input type="hidden" name="id"
                        value="<?php echo $data['id']?>">

                    <input class="btn btn-primary col-12" type="submit" name="update" class="form-control"
                        value="Update">



                </form>

            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>