<?php
include 'navbar.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cart</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg- my-5">
                <h1>MY CART</h1>

            </div>
            <div class="col-lg-9">
                <table class="table table-dark table-hover ">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial Number</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
  $total = 0;
  if (isset($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $key => $value) {
          $serial = $key+1;
          $total = $total+$value['Price'];
          echo "
      <tr>
      <td>$serial</td>
      <td>$value[Item_name]</td>
      <td>$value[Price]</td>
      <td><input class = 'text-center' type='number' value='$value[quantity]' min ='1' max = '10'></td>
      <td>
      <form action ='manage_cart.php' method = 'POST'>
     
      <button name ='remove_item' class = 'btn-outline-danger btn-sm'>Remove</button>
      <input type='hidden' name ='Item_name' value ='$value[Item_name]' >
      </form>
      </td>
      </tr>
      ";
      }
  }
  
  ?>



                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4  ">
                    <h4>Total:</h4>
                    <h5 class="text-right mt-1 "><?php echo $total?>
                        <br>
                    </h5>
                    <form action="">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Cash on delivary
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Bkash
                            </label>
                        </div>

                        <button class="btn-outline-primary col-12">Buy Now</button>


                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>