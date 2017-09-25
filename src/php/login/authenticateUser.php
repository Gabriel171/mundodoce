<?php
    include '../database/connect.php';
    
    mysqli_select_db($dbconnection,"login") or
    print(mysqli_error());

    $user = json_decode($_POST['user']);

    $statement = "SELECT * FROM cadastrofuncionario
                     WHERE email = '$user->email'
                     AND senha = MD5('$user->password')";
    //echo $statement;
    
    $result = mysqli_query($dbconnection, $statement);

    $consulta = mysqli_fetch_array($result);

    if ($consulta != null) {
        session_start();
        $_SESSION['usuario'] = $consulta['nomecompleto'];

        $statement = mysqli_prepare($dbconnection, "SELECT role FROM user_role WHERE user_id = ?");
        
        if (isset($statement)) {
            $roles = [];

            mysqli_stmt_bind_param($statement, "i", $consulta["id_funcionario"]);
            mysqli_stmt_execute($statement);
            
            mysqli_stmt_bind_result($statement, $role);
            
            while (mysqli_stmt_fetch($statement)) {
                array_push($roles, $role);
            }

            mysqli_stmt_close($statement);

            $_SESSION['roles'] = $roles;
        }
        
        // // Precisa de um JSON válido para o retorno
	    echo json_encode($_SESSION['usuario']);
    } else {
        $arr = array('message' => 'User not found', 'status' => '403');
        header('HTTP/1.1 403 Forbidden');
        echo json_encode($arr);
    }
?>