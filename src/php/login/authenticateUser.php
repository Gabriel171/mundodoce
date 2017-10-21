<?php
    include '../database/connect.php';
    
    mysqli_select_db($dbconnection,"login") or
    print(mysqli_error());

    $user = json_decode($_POST['user']);

    $statement = "SELECT * FROM cadastrofuncionario
                     WHERE email = '$user->email'
                     AND senha = MD5('$user->password')";
    
    $result = mysqli_query($dbconnection, $statement);

    $consulta = mysqli_fetch_array($result);

    if ($consulta != null) {
        $roles = [];
        $statement = mysqli_prepare($dbconnection, "SELECT role FROM user_role WHERE user_id = ?");
        
        if (isset($statement)) {
            mysqli_stmt_bind_param($statement, "i", $consulta["id_funcionario"]);
            mysqli_stmt_execute($statement);
            
            mysqli_stmt_bind_result($statement, $role);
            
            while (mysqli_stmt_fetch($statement)) {
                array_push($roles, $role);
            }
            
            mysqli_stmt_close($statement);
        }
     
        if ($user->type == 'ADMIN') {
            if (in_array('ADMIN', $roles) || in_array('FUNC', $roles)) {
                returnOk($consulta['nomecompleto'], $roles);
            } else {
                returnError('User is not an admin', '401');
            }
       } else {
           returnOk($consulta['nomecompleto'], $roles);
       }
    } else {
        returnError('User not found', '403');
    }

    function returnOk($name, $roles) {
        session_start();
        $_SESSION['usuario'] = $name;
        $_SESSION['roles'] = $roles;
        echo json_encode($_SESSION['usuario']);
    }

    function returnError($message, $status) {
        $arr = array('message' => $message, 'status' => $status);
        header('HTTP/1.1 ' . $status);
        echo json_encode($arr);
    }
?>