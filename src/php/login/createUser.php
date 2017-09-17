<?php
	include '../database/connect.php';

	$user = json_decode($_POST['user']);

	mysqli_select_db($dbconnection, "login") or print(mysqli_error());

	$sql = "INSERT INTO login_tcc (usuario, senha, dt_atualiza) 
			VALUES ('$user->name', MD5('$user->password'), now())";
	
	mysqli_query($dbconnection, $sql);

	mysqli_close($dbconnection);

	// Precisa de um JSON válido para o retorno
	echo "{}";
?>