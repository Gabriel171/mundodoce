<?php
    $product = $_POST['product'];

    session_start();
    
    $cart = $_SESSION['cart'];

    array_push($cart, $product);

    $_SESSION['cart'] = $cart;

    echo sizeOf($_SESSION['cart']);
?>