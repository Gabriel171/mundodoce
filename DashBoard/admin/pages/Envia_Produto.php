<?php

	session_start();

	include 'Conecta_CL.php';
	

	header('Content-Type: text/html; charset=utf-8');

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
	$situacao = $_POST['situação'];
	$estado = $_POST['estado'];

	$temp = $_FILES['imagem']['tmp_name'];
	$tamanho = $_FILES['imagem']['size'];
	$tipo = $_FILES['imagem']['type'];
	$nome2 = $_FILES['imagem']['name'];

	if ($temp != "none") {
		$nm = fopen($temp, "rb");
		$arquivo = fread($nm, $tamanho);
		$arquivo = addslashes($arquivo);
		fclose($nm);
	}


	mysqli_select_db($conecta, "login") or print(mysqli_error());

	$sql = "INSERT INTO cadastroproduto (nomeproduto, imagem, codigoproduto, marca, fornecedor, unidade, peso, estoqueminimo, estoquemaximo, codigogtin, valorvenda, valorcusto, origemproduto, situacao, estado, dt_atualiza) 
			VALUES ('$nomeproduto', '$arquivo', '$codigoproduto', '$marca', '$fornecedor', '$unidade', '$peso','$estoqueminimo', '$estoquemaximo','$codigogtin','$valorvenda', '$valorcusto', '$origemproduto', '$situacao', '$estado', now())";
	

	mysqli_query($conecta, $sql) or print(mysqli_error($conecta));

	mysqli_close($conecta); 
	

	//echo "<script>alert('$nomeproduto enviada com êxito!'); location.href='CadastroProdutos.php'; </script>";	


?>