<?php
    session_start();
    
    $cart = $_SESSION['cart'];

    array_push($cart, 'a');

    $_SESSION['cart'] = $cart;

    echo sizeOf($_SESSION['cart']);
?>