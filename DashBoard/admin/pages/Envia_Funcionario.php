<?php

	session_start();

	include 'Conecta_CL.php';
	

	header('Content-Type: text/html; charset=utf-8');

	$nomecompleto = $_GET['nomecompleto'];
	$cpf = $_GET['cpf'];
	$rg = $_GET['rg'];
	$cep = $_GET['cep'];
	$data_nascimento = $_GET['data_nascimento'];
	$telefone = $_GET['telefone'];
	$email = $_GET['email'];
	$senha = $_GET['senha'];
	$endereco = $_GET['endereco'];
	$bairro = $_GET['bairro'];
	$cidade = $_GET['cidade'];
	$estado = $_GET['estado'];
	$role = (isset($_GET['isAdmin']) ? $_GET['isAdmin'] : null);
	
	mysqli_select_db($conecta, "login") or print(mysqli_error());

	$sql = "INSERT INTO cadastrofuncionario (nomecompleto, cpf, rg, cep, data_nascimento, telefone, email,senha, "
	."endereco, bairro, cidade, estado, dt_atualiza) VALUES "
	."('$nomecompleto', '$cpf', '$rg', '$cep', '$data_nascimento','$telefone','$email',MD5('$senha'), '$endereco','$bairro', "
	."'$cidade', '$estado', now())";
	
	if (mysqli_query($conecta, $sql)) {
		if (isset($role)) {
			$statement = mysqli_prepare($conecta, "INSERT INTO user_role (user_id, role) VALUES (?, ?)");

			if (isset($statement)) {
				$userId = mysqli_insert_id($conecta);
				mysqli_stmt_bind_param($statement, "is", $userId, $role);
				mysqli_stmt_execute($statement);
				mysqli_stmt_close($statement);
			}
		}
	}

	mysqli_close($conecta); 
	
	 echo "<script>alert('$nomecompleto enviada com êxito!'); location.href='CadastroFuncionarios.php'; </script>";	
?>