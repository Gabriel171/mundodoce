<?php
    include 'Conecta_CL.php';
    
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"cadastro") or
    print(mysqli_error());
    
    $nomeempresa = $_POST['nomeempresa'];
    $enderecoempresa = $_POST['enderecoempresa'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $pais = $_POST['pais'];
    $cgc = $_POST['cgc'];
    $pessoacontato = $_POST['pessoacontato'];
    $telefonecomercial = $_POST['telefonecomercial'];
    $email = $_POST['email'];
    $banco = $_POST['banco'];
    $agencia = $_POST['agencia'];
    $referenciacomercial = $_POST['referenciacomercial'];
    $estado = $_POST['estado'];


    $sql = "UPDATE 'cadastrofornecedor'
               SET nomeempresa= '$nomeempresa',
                   enderecoempresa= '$enderecoempresa',
                   cidade = '$cidade',
                   cep = '$cep',
                   pais = '$pais',
                   cgc = '$cgc',
                   pessoacontato = '$pessoacontato',
                   telefonecomercial = '$telefonecomercial',
                   email = '$email',
                   banco = '$banco',
                   agencia = '$agencia',
                   referenciacomercial = '$referenciacomercial',
                   estado = '$estado',
            WHERE id_fornecedor = $id_fornecedor";    
    echo $sql;
    mysqli_query($conecta,$sql);
        
    //encerra a conexão.
    mysqli_close($conecta);
?>