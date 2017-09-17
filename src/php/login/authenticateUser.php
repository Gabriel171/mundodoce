<?php
    include '../database/connect.php';
    
    mysqli_select_db($dbconnection,"login") or
    print(mysqli_error());

    $user = json_decode($_POST['user']);

    $statement = "SELECT * FROM login_tcc
                     WHERE usuario = '$user->name'
                     AND senha = MD5('$user->password')";
    //echo $statement;
    
    $result = mysqli_query($dbconnection, $statement);

    $consulta = mysqli_fetch_array($result);

    if ($consulta != null) {
        session_start();
        $_SESSION['usuario'] = $consulta['usuario'];
        // Precisa de um JSON válido para o retorno
	    echo json_encode($_SESSION['usuario']);
    } else {
        $arr = array('message' => 'User not found', 'status' => '403');
        header('HTTP/1.1 403 Forbidden');
        echo json_encode($arr);
    }
?>