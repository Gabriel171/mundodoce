<?php
    include 'Conecta_CL.php';
    
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"login") or
    print(mysqli_error());
    
    $nomeempresa = $_GET['nomeempresa'];
   
    $cep = $_GET['cep'];
  
    $email = $_GET['email'];
    $banco = $_GET['banco'];
    $id_fornecedor = $_GET['id_fornecedor'];
    


    $sql = "UPDATE cadastrofornecedor
               SET nomeempresa= '$nomeempresa',
                 
                   cep = '$cep',
                  
                   email = '$email',
                   banco = '$banco'
                  
            WHERE id_fornecedor = '$id_fornecedor'";    
    echo $sql;
    mysqli_query($conecta,$sql);
        
    //encerra a conexão.
    mysqli_close($conecta);
    header('location:tb_fornecedor.php');
?>