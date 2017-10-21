<?php
    session_start();
    
    if (isset($_SESSION['usuario'])) {
        session_destroy();
        $_SESSION = [];

        $arr = array('message' => 'OK!!!', 'status' => '200');
        header('HTTP/1.1 200 OK');
        echo json_encode($arr);
        
    } else {
        $arr = array('message' => 'RRUIIM!!!', 'status' => '200');
        header('HTTP/1.1 200 OK');
        echo json_encode($arr);
    }
    echo "<script> window.location ='http://localhost/MundoDoceRemaster/index'; </script>";
?>