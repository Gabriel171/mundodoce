<?php
    //recupera dados do login
    session_start();
    //Conex‹o
    include ('conecta.php');
    
    $nome = $_SESSION['nome'];
    $nvl_acesso = $_SESSION['nvl_acesso'];
    
    
    $SQL_MENU= "SELECT * FROM `vw_menu_acesso`
                 WHERE NVL_ACESSO = '$nvl_acesso' ";
                 
    
    $result=mysqli_query($conecta,$SQL_MENU);
    
    while($consulta=mysqli_fetch_array($result))
    {
        echo $consulta['nome_menu']; 
    }

                 
?>