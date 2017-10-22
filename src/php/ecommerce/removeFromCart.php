<?php
    $productId = $_POST['productId'];

    session_start();
    
    $cart = $_SESSION['cart'];

    $length = count($cart);
    $index = null;
    $total = 0;
    $current = 0;

    for ($i = 0; $i < $length; $i++) {
        if ($cart[$i] -> id == $productId) {
            $index = $i;
            $cart[$i]->quantity = $cart[$i]->quantity - 1;
            $current = $cart[$i]->quantity;
            break;
        }
    }
    
    if ($cart[$index]->quantity < 1) {
        array_splice($cart, $index, 1);
    }
    
    $_SESSION['cart'] = $cart;
    
    foreach($cart as $product){
        $total = $total + $product->quantity;
    }

    $result = array('total' => $total, 'current' =>$current);
    
    echo json_encode($result);
?>