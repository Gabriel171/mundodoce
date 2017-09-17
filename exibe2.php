<?php

	session_start();

	include 'conecta2.php';

	header('Content-Type: text/html; charset=utf-8');


	mysqli_select_db($conecta, "login") or print(mysqli_error());

	$sql = "SELECT id_usuario, usuario, senha FROM 'login_tcc'";
	$result=mysqli_query($conecta, $sql);
	While($consulta=mysqli_fetch_array($result))
    {
        Print "usuario:$consulta[usuario]<br>
        		senha:$consulta[senha]<br>";
                	

        		
    } 
    Mysqli_free_result($result); 


	

	mysqli_query($conecta, $sql);

	mysqli_close($conecta); 


?>
