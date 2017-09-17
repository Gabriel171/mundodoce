D<?php
    include 'Conecta_CL.php';
    
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"cadastro") or
    print(mysqli_error());
    
    $nomeproduto = $_POST['nomeproduto'];
    $codigoproduto = $_POST['codigoproduto'];
    $marca = $_POST['marca'];
    $fornecedor = $_POST['fornecedor'];
    $unidade = $_POST['unidade'];
    $peso = $_POST['peso'];
    $estoqueminimo = $_POST['estoqueminimo'];
    $estoquemaximo = $_POST['estoquemaximo'];
    $codigogtin = $_POST['codigogtin'];
    $valorvenda = $_POST['valorvenda'];
    $valorcusto = $_POST['valorcusto'];
    $origemproduto = $_POST['origemproduto'];
    $situação = $_POST['situação'];
    $estado = $_POST['estado'];


    $sql = "UPDATE 'cadastroproduto'
               SET nomeproduto = '$nomeproduto',
                   codigoproduto = '$codigoproduto',
                   marca = '$marca',
                   fornecedor = '$fornecedor',
                   unidade = '$unidade',
                   peso = '$peso',
                   estoqueminimo = '$estoqueminimo',
                   estoquemaximo = '$estoquemaximo',
                   codigogtin = '$codigogtin',
                   valorvenda = '$valorvenda',
                   valorcusto = '$valorcusto',
                   origemproduto = '$origemproduto',
                   situação = '$situação',
                   estado = '$estado',

            WHERE id_produto = $id_produto";    
    echo $sql;
    mysqli_query($conecta,$sql);
        
    //encerra a conexão.
    mysqli_close($conecta);
?>