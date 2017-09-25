<?php
    include 'Conecta_CL.php';
    
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"login") or
    print(mysqli_error());
    
    $nomeproduto = $_GET['nomeproduto'];
    $codigoproduto = $_GET['codigoproduto'];
  
    $fornecedor = $_GET['fornecedor'];
  
    $estoqueminimo = $_GET['estoqueminimo'];
    $estoquemaximo = $_GET['estoquemaximo'];
    
    $id_produto = $_GET['id_produto'];



    $sql = "UPDATE cadastroproduto
               SET nomeproduto = '$nomeproduto',
                   codigoproduto = '$codigoproduto',
                
                   fornecedor = '$fornecedor',
                   
                   estoqueminimo = '$estoqueminimo',
                   estoquemaximo = '$estoquemaximo'
                 

            WHERE id_produto = '$id_produto'";    
    echo $sql;
    mysqli_query($conecta,$sql);
        
    //encerra a conexão.
    mysqli_close($conecta);
    header('location:tb_produto.php');
?>