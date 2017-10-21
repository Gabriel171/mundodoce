<?php

	session_start();

	include 'Conecta_CL.php';
	

	header('Content-Type: text/html; charset=utf-8');

	$nome = $_GET['nome'];
	$cpf = $_GET['cpf'];
	$rg = $_GET['rg'];
	$data_nascimento = $_GET['data_nascimento'];
	$sexo = $_GET['sexo'];
	$telefone = $_GET['telefone'];
	$email = $_GET['email'];
	$senha = $_GET['senha'];
	$estado = $_GET['estado'];
	

	mysqli_select_db($conecta, "login") or print(mysqli_error());

	$sql = "INSERT INTO cadastrocliente (nome, cpf, rg, data_nascimento, sexo, telefone, email, senha, estado, dt_atualiza) 
			VALUES ('$nome', '$cpf', '$rg', '$data_nascimento', '$sexo','$telefone', '$email','$senha', '$estado', now())";
	
	

	mysqli_query($conecta, $sql);

	mysqli_close($conecta); 
 
	

	echo "<script>alert('$nome inserido com êxito!'); location.href='Cadastrocliente.php'; </script>";	


?>

