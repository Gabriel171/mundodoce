<?php

	session_start();

	include 'Conecta_CL.php';
	

	header('Content-Type: text/html; charset=utf-8');

	$nomeempresa = $_GET['nomeempresa'];
    $enderecoempresa = $_GET['enderecoempresa'];
	$cidade = $_GET['cidade'];
	$cep = $_GET['cep'];
	$pais = $_GET['pais'];
	$cgc = $_GET['cgc'];
	$pessoacontato = $_GET['pessoacontato'];
	$telefonecomercial = $_GET['telefonecomercial'];
	$email = $_GET['email'];
	$banco = $_GET['banco'];
	$agencia = $_GET['agencia'];
	$conta = $_GET['conta'];
	$estado = $_GET['estado'];
	

	mysqli_select_db($conecta, "login") or print(mysqli_error());

	$sql = "INSERT INTO cadastrofornecedor (nomeempresa, enderecoempresa, cidade, cep, pais, cgc, pessoacontato, telefonecomercial, email, banco, agencia, conta, estado, dt_atualiza) 
			VALUES ('$nomeempresa', '$enderecoempresa', '$cidade', '$cep', '$pais', '$cgc','$pessoacontato', '$telefonecomercial', '$email','$banco', '$agencia', '$conta', '$estado', now())";
	



	mysqli_query($conecta, $sql);

	mysqli_close($conecta); 

	echo "<script>alert('$nomeempresa inserido com êxito!'); location.href='CadastroFornecedor.php'; </script>";	


?>
