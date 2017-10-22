<?php
    include 'Conecta_CL.php';
    
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"login") or
    print(mysqli_error());
    
    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $rg = $_GET['rg'];
    $data_nascimento = $_GET['data_nascimento'];
    $telefone = $_GET['telefone'];
    $email = $_GET['email'];
    $estado = $_GET['estado'];
    $id_cliente = $_GET['id_cliente'];
   


    $sql = "UPDATE cadastrocliente 
              SET  nome = '$nome',
                   cpf = '$cpf',
                   rg = '$rg',
                   data_nascimento = '$data_nascimento',
                  telefone  = '$telefone',
                   senha = '$senha',
                   estado = '$estado'
            WHERE id_cliente = '$id_cliente'";    
    echo $sql;
    mysqli_query($conecta,$sql);
        
    //encerra a conexão.
    mysqli_close($conecta);
    header('location:tb_cliente.php');
?>