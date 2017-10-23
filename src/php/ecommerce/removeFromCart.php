<?php
    $productId = $_POST['productId'];

    session_start();
    
    $cart = $_SESSION['cart'];

    $length = count($cart);
    $index = null;
    $total = 0;
    $updatedQuantity = 0;
    $updateTotalValue = 0;
    $updatedSalePrice = 0;

    for ($i = 0; $i < $length; $i++) {
        if ($cart[$i] -> id == $productId) {
            $index = $i;
            $cart[$i]->quantity -= 1;

            $updatedQuantity = $cart[$i]->quantity;
            $updateTotalValue = $updatedQuantity * $cart[$i]->price;
            break;
        }
    }
    
    if ($cart[$index]->quantity < 1) {
        array_splice($cart, $index, 1);
    }
    
    $_SESSION['cart'] = $cart;
    
    foreach($cart as $product) {
        $total += $product->quantity;
        $updatedSalePrice += $product->quantity * $product->price;
    }

    $result = array('total' => $total, 'updatedQuantity' => $updatedQuantity, 'updatedTotalValue' => $updateTotalValue,
    'updatedSalePrice' => $updatedSalePrice);
    
    echo json_encode($result);
?>