<?php
    include '../database/connect.php';
    
    $products = [];

    mysqli_select_db($dbconnection, "login") or print(mysqli_error());
    $sql = "SELECT id_produto, nomeproduto, valorvenda, estado FROM cadastroproduto";

    $result = mysqli_query($dbconnection, $sql);

    if ($result != null) {
        while ($row = mysqli_fetch_array($result)) {
            $product = array(
                'id' => $row[0],
                'name' => $row[1],
                'price' => $row[2],
                'state' => $row[3]
            );

            array_push($products, $product);
        }
    }

    mysqli_close($dbconnection);

    echo json_encode($products);
?>