<?php
    $product = json_decode($_POST['product']);

    session_start();
    
    $cart = $_SESSION['cart'];
    $exists = false;
    $total = 0;
    foreach ($cart as $value) {
        if ($value->id==$product->id) {
          $value->quantity++;
          $exists = true;
          break;
        }
    }

    if (!$exists) {
        array_push($cart, $product);
    }

    $_SESSION['cart'] = $cart;

    foreach ($cart as $value){
       $total = $total + $value->quantity;
    }
    echo $total;
?>