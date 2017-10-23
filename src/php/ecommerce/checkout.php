<?php
    include '../database/connect.php';

    session_start();

    $cart = $_SESSION['cart'];
    $userId = $_SESSION['usuario'];

    mysqli_select_db($dbconnection, "login") or print(mysqli_error());

    mysqli_begin_transaction($dbconnection, MYSQLI_TRANS_START_READ_WRITE);

    $totalValue = 0.0;
    $saleId = 0;

    foreach ($cart as $item) {
        $totalValue += $item->quantity * $item->price;
    }
    
    $statement = mysqli_prepare($dbconnection, "INSERT INTO sale (user_id, value, created_date) VALUES (?, ?, now())");
    
    if (isset($statement)) {
        mysqli_stmt_bind_param($statement, "id", $userId, $totalValue);
        mysqli_stmt_execute($statement);
    }

    $saleId = mysqli_insert_id($dbconnection);
    
    foreach ($cart as $item) {
        $statement = mysqli_prepare($dbconnection, "INSERT INTO sale_item (product_id, quantity, value, sale_id) ".
                                                   "VALUES (?, ?, ?, ?)");
                                                   
        $itemTotalValue = $item->quantity * $item->price;
        
        if (isset($statement)) {
            mysqli_stmt_bind_param($statement, "iidi", $item->id, $item->quantity, $itemTotalValue, $saleId);
            mysqli_stmt_execute($statement);
        }
    }
    
    mysqli_stmt_close($statement);
    mysqli_commit($dbconnection);
    mysqli_close($dbconnection);

    unset($_SESSION['cart']);
?>