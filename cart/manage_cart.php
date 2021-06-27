<?php
session_start();

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST['add_to_cart'])) {
        if (isset($_SESSION['cart'])) {
            $myitems = array_column($_SESSION['cart'], 'Item_name');
            if (in_array($_POST['item_name'], $myitems)) {
                echo "<script>
                alert('Item already added');
                window.location.href='../Home.php';
                </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('Item_name'=>$_POST['item_name'],'Price'=>$_POST['price'],'quantity'=>1);
                echo "<script>
            alert('Item added');
            window.location.href='../Home.php';
            </script>";
            }
        } else {
            $_SESSION['cart'][0]=array('Item_name'=>$_POST['item_name'],'Price'=>$_POST['price'],'quantity'=>1);
            echo "<script>
            alert('Item added');
            window.location.href='../Home.php';
            </script>";
        }
    }

    if (isset($_POST['remove_item'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Item_name'] == $_POST['Item_name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                alert('Item Removed');
                window.location.href='cart.php';
                </script>";
            }
        }
    }
}
