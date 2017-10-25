<?php
	include '../database/connect.php';

	$user = json_decode($_POST['user']);

	mysqli_select_db($dbconnection, "login") or print(mysqli_error());

	$sql = "INSERT INTO cadastrofuncionario (nomecompleto, email, senha, dt_atualiza) 
			VALUES ('$user->name','$user->email', MD5('$user->password'), now())";
	
	mysqli_query($dbconnection, $sql);

	mysqli_close($dbconnection);

	// Precisa de um JSON válido para o retorno
	echo '{}';
?>