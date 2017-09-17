<?php

	session_start();

	include 'Conecta_CL.php';

	header('Content-Type: text/html; charset=utf-8');


	mysqli_select_db($conecta, "cadastro") or print(mysqli_error());

	$sql = "SELECT id_cliente, nome, cpf, RG, data_nascimento, sexo, telefone, email, senha, estado FROM 'cadastrocliente' ";
	$result=mysqli_query($conecta, $sql);
	While($consulta=mysqli_fetch_array($result))
    {
        Print "Nome:$consulta[nome]<br>
               cpf:$consulta[cpf]<br>
               rg:$consulta[rg]<br>
               data_nascimento:$consulta[data_nascimento]<br>
               sexo:$consulta[sexo]<br>
               telefone:$consulta[telefone]<br>
               email:$consulta[email]<br>
               senha:$consulta[senha]<br>
               estado:$consulta[estado]<br>" ; 
        		
                	

        		
    } 
    Mysqli_free_result($result); 


	

	mysqli_query($conecta, $sql);

	mysqli_close($conecta); 


?>
