<?php
    //recupera dados do login
    session_start();
    //conecta
    include ('conecta.php');
    
    $email = $_GET['email'];   
    $password = $_GET['password'];
    $verifica_OK = 0;

    
    $sql_verifica = "SELECT * FROM tb_funcionario
                      WHERE email = '$email'
                        AND senha = '$password' ";
    //verifica‹o
    //echo $sql_verifica;
    
    $result=mysqli_query($conecta,$sql_verifica);
    
    while($consulta=mysqli_fetch_array($result))
    {
        //Existe este usuario
        $verifica_OK = 1;
        //Redirecionamento -> OK.php
        //session_start();
        $_SESSION['nome'] = $consulta['nome'];
        $_SESSION['nvl_acesso'] = $consulta['nvl_acesso'];
        header('location:../pages/blank.php');
        
    }
    
    if ($verifica_OK == 0){
        header('location:../pages/login.php');
    }
    
?>