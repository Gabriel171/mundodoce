<?php
    include 'Conecta_CL.php';
    
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"cadastro") or
    print(mysqli_error());
    
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $data_nascimento = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone '];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $estado = $_POST['estado'];
   

    $sql = "UPDATE 'cadastrocliente'
               SET Nome = '$nome',
                   cpf = '$cpf',
                   rg = '$rg',
                   data_nascimento = '$data_nascimento',
                   sexo = '$sexo',
                   telefone  = '$telefone',
                   email = '$email',
                   senha = '$senha',
                   estado = '$estado',
            WHERE id_cliente = $id_cliente";    
    echo $sql;
    mysqli_query($conecta,$sql);
        
    //encerra a conexão.
    mysqli_close($conecta);
?>