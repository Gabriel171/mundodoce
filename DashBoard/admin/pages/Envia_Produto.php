<?php

	session_start();

	include 'Conecta_CL.php';
	

	header('Content-Type: text/html; charset=utf-8');

	$nomeproduto = $_GET['nomeproduto'];
	$codigoproduto = $_GET['codigoproduto'];
	$marca = $_GET['marca'];
	$fornecedor = $_GET['fornecedor'];
	$unidade = $_GET['unidade'];
	$peso = $_GET['peso'];
	$estoqueminimo = $_GET['estoqueminimo'];
	$estoquemaximo = $_GET['estoquemaximo'];
	$codigogtin = $_GET['codigogtin'];
	$valorvenda = $_GET['valorvenda'];
	$valorcusto = $_GET['valorcusto'];
	$origemproduto = $_GET['origemproduto'];
	$situacao = $_GET['situação'];
	$estado = $_GET['estado'];


	mysqli_select_db($conecta, "cadastro") or print(mysqli_error());

	$sql = "INSERT INTO cadastroproduto (nomeproduto, codigoproduto, marca, fornecedor, unidade, peso, estoqueminimo, estoquemaximo, codigogtin, valorvenda, valorcusto, origemproduto, situacao, estado, dt_atualiza) 
			VALUES ('$nomeproduto', '$codigoproduto', '$marca', '$fornecedor', '$unidade', '$peso','$estoqueminimo', '$estoquemaximo','$codigogtin','$valorvenda', '$valorcusto', '$origemproduto', '$situacao', '$estado', now())";
	

	mysqli_query($conecta, $sql) or print(mysqli_error($conecta));

	mysqli_close($conecta); 
	

	echo "<script>alert('$nomeproduto enviada com êxito!'); location.href='CadastroProdutos.html'; </script>";	


?>