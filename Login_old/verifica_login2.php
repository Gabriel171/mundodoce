<?php

    //recupera dados do login
    //conecta
    include ('../conecta1.php');
    
    mysqli_select_db($conecta,"login") or
    print(mysqli_error());

    $usuario = $_GET['usuario'];   
    $senha = $_GET['senha'];
    $verifica_OK = false;

    $sql_verifica = "SELECT * FROM login_tcc
                      WHERE usuario = '$usuario'
                        AND senha = MD5('$senha')";
    //verifica‹o
    //echo $sql_verifica;
    
    $result=mysqli_query($conecta, $sql_verifica);

    $consulta=mysqli_fetch_array($result);

    if ($consulta != null) {
        //Existe este usuario
         $verifica_OK = true;
        // Redirecionamento -> OK.php
        session_start();
        $_SESSION['usuario'] = $consulta['usuario'];
        echo sprintf("<script>alert('%s'); </script>", $_SESSION['usuario']);
        header('location:../index.html.php');
    } else {
        header('location:../Login.html');
    }

    
?>