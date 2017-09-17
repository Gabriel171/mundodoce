<?php

	session_start();

	include 'Conecta_CL.php';

	header('Content-Type: text/html; charset=utf-8');


	mysqli_select_db($conecta, "cadastro") or print(mysqli_error());

	$sql = "SELECT id_funcionario, nomecompleto, cpf, rg, cep, data_nascimento, telefone, endereco, bairro, cidade, estado FROM 'cadastrofuncionario'";
	$result=mysqli_query($conecta, $sql);
	While($consulta=mysqli_fetch_array($result))
    {
        Print "Nomecompleto:$consulta[nomecompleto]<br>
               cpf:$consulta[cpf]<br>
               rg:$consulta[rg]<br>
               cep:$consulta[cep]<br>
               data_nascimento:$consulta[data_nascimento]<br>
               telefone:$consulta[telefone]<br>
               endereco:$consulta[endereco]<br>
               Bairro:$consulta[bairro]<br>
               cidade:$consulta[cidade]<br>
               estado:$consulta[estado]<br>" ; 
        		
                	

        		
    } 
    Mysqli_free_result($result); 


	

	mysqli_query($conecta, $sql);

	mysqli_close($conecta); 


?>