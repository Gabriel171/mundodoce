<?php
    $productId = $_POST['productId'];

    session_start();
    
    $cart = $_SESSION['cart'];

    $length = count($cart);
    $index = null;

    for ($i = 0; $i < $length; $i++) {
        if ($cart[$i] -> id == $productId) {
            $index = $i;
            break;
        }
    }

    if (isset($index)) {
        array_splice($cart, $index, 1);
    }

    $_SESSION['cart'] = $cart;

    echo sizeOf($_SESSION['cart']);
?>