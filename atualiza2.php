<?php
    include 'conecta2.php';
    
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"login") or
    print(mysqli_error());
    
    $usuario = $_GET['usuario'];
    $senha = $_GET['senha'];

    $sql = "UPDATE 'login_tcc'
               SET usuario = '$usuario',
                   senha = '$senha'
            WHERE id_usuario = $id_usuario";    
    echo $sql;
    mysqli_query($conecta,$sql);
        
    //encerra a conexão.
    mysqli_close($conecta);
?>