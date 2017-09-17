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
	$endereco = $_GET['endereco'];
	$bairro = $_GET['bairro'];
	$cidade = $_GET['cidade'];
	$estado = $_GET['estado'];
	

	mysqli_select_db($conecta, "cadastro") or print(mysqli_error());

	$sql = "INSERT INTO cadastrofuncionario (nomecompleto, cpf, rg, cep, data_nascimento, telefone, endereco, bairro, cidade, estado, dt_atualiza) 
			VALUES ('$nomecompleto', '$cpf', '$rg', '$cep', '$data_nascimento ','$telefone','$endereco','$bairro', '$cidade', '$estado', now())";
	
	

	mysqli_query($conecta, $sql);

	mysqli_close($conecta); 
	

	echo "<script>alert('$nomecompleto enviada com êxito!'); location.href='CadastroFuncionários.html'; </script>";	


?>