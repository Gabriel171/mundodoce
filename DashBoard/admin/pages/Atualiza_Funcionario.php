<?php
    include 'Conecta_CL.php';
    
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"login") or
    print(mysqli_error());
    
    $nomecompleto = $_GET['nomecompleto'];
    $cpf = $_GET['cpf'];
   
    $cep = $_GET['cep'];
  
    $telefone = $_GET['telefone'];
    
    $id_funcionario = $_GET['id_funcionario'];


    $sql = "UPDATE cadastrofuncionario
               SET nomecompleto = '$nomecompleto',
                   cpf = '$cpf',
                  
                   cep = '$cep',
                  
                   telefone = '$telefone'
                 
                 
            WHERE id_funcionario = '$id_funcionario'";    
    echo $sql;
    mysqli_query($conecta,$sql);
        
    //encerra a conexão.
    mysqli_close($conecta);
    header('location:tb_funcionario.php');
?>