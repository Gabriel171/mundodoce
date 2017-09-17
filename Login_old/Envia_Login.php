<?php

	session_start();

	include 'conecta2.php';
	

	header('Content-Type: text/html; charset=utf-8');

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	mysqli_select_db($conecta, "login") or print(mysqli_error());

	$sql = "INSERT INTO login_tcc (usuario, senha, dt_atualiza) 
			VALUES ('$usuario', MD5('$senha'),now())";

	
	//echo "INSTRUÇÃO REALIZADA => ".$sql;


	//echo "<a href='exibe.php'>Exibe</a>";

	mysqli_query($conecta, $sql);

	mysqli_close($conecta); 
	

	echo "<script>alert('Login q!');location.href='index.html'; </script>";	


?>