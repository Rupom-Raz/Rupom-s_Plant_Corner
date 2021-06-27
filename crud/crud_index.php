<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
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
    <?php include 'navbar.php'?>
    <div class="container-fluid crud">
        <div class="row justify-content-center py-4">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form  action="insert.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        Name: <input class="form-control" type="text" name="name" id="">
                    </div>
                    <div class="mb-3">
                        Price: <input class="form-control" type="text" name="price" id="">
                    </div>
                    <div class="mb-3">
                        Image: <input class="form-control" type="file" name="image" id="">
                    </div>
                    <input class=" btn-outline-primary col-12" type="submit" name="insert" class="form-control"
                        value="Add plant">



                </form>

            </div>

        </div>
    </div>
    <div class="container-fluid crud py-4">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include 'config.php';
            $alldata = mysqli_query($conn, "SELECT * FROM `card`");
            while ($row = mysqli_fetch_array($alldata)) {
                echo "
                <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[price]</td>
                <td><img src='$row[image]' width='80px'></td>
                <td><a class=' btn-outline-warning' href='update.php? id=$row[id]'>Update</a></td>
                <td><a class=' btn-outline-danger' href='delete.php? id=$row[id]'>Delete</a></td>
                <td></td>
                
                
                </tr>
                ";
            }


            
            ?>
        


            </tbody>

        </table>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>