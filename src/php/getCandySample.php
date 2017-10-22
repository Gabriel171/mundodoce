
<?php
    include 'database/connect.php';

    $images = [];

	mysqli_select_db($dbconnection, "login") or print(mysqli_error());
    $sql = "SELECT nomeproduto, imagem FROM cadastroproduto WHERE imagem IS NOT NULL ORDER BY id_produto ASC LIMIT 6";

    $result = mysqli_query($dbconnection, $sql);

    if ($result != null) {
        while ($row = mysqli_fetch_array($result)) {
            $imagem = array('name' => $row['nomeproduto'], 'image' => base64_encode($row['imagem']) );
            array_push($images, $imagem);
        }
    }

    mysqli_close($dbconnection);

    echo json_encode($images);
?>