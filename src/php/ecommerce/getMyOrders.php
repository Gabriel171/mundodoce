
<?php
    include '../database/connect.php';

    session_start();

    $userId = $_SESSION['usuario'];

    $orders = [];

    mysqli_select_db($dbconnection, "login") or print(mysqli_error());

    $statement = mysqli_prepare($dbconnection, "SELECT s.id, s.value, s.created_date, i.product_id, i.quantity, i.value ".
                                               "FROM sale s ".
                                               "INNER JOIN sale_item i on i.sale_id = s.id ".
                                               "WHERE s.user_id = ?");
    
        mysqli_stmt_bind_param($statement, "i", $userId);
        mysqli_stmt_execute($statement);

        $result = mysqli_stmt_get_result($statement);

        while ($row = mysqli_fetch_array($result)) {
            $currentOrder = null;
            
            foreach ($orders as $order) {
                if ($order->saleId == $row[0]) {
                    $currentOrder = $order;
                    break;
                }
            }

            if ($currentOrder == null) {
                $currentOrder = new stdClass();
                $currentOrder->saleId = $row[0];
                $currentOrder->saleValue = (double) $row[1];
                $currentOrder->createdDate = $row[2];
                $currentOrder->items = [];

                array_push($orders, $currentOrder);
            }

            $item = new stdClass();
            $item->productId = $row[3];
            $item->productQuantity = $row[4];
            $item->productTotalValue = $row[5];
            
            array_push($currentOrder->items, $item);
        }

        mysqli_stmt_close($statement);

    mysqli_close($dbconnection);

    echo json_encode($orders);
?>