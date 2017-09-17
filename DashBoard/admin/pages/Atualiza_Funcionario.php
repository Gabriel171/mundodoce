<?php
    include 'Conecta_CL.php';
    
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"cadastro") or
    print(mysqli_error());
    
    $nomecompleto = $_POST['nomecompleto'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $cep = $_POST['cep'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];


    $sql = "UPDATE 'cadastrofuncionario'
               SET nomecompleto = '$nomecompleto',
                   cpf = '$cpf',
                   rg = '$rg',
                   cep = '$cep',
                   data_nascimento = '$data_nascimento',
                   telefone = '$telefone',
                   endereco = '$endereco',
                   bairro = '$bairro',
                   cidade = '$cidade',
                   estado = '$estado',
            WHERE id_funcionario = $id_funcionario";    
    echo $sql;
    mysqli_query($conecta,$sql);
        
    //encerra a conexão.
    mysqli_close($conecta);
?>