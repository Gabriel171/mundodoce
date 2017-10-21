<?php

	session_start();

	include 'Conecta_CL.php';

	header('Content-Type: text/html; charset=utf-8');


	mysqli_select_db($conecta, "login") or print(mysqli_error());

	$sql = "SELECT id_fornecedor, nomeempresa, enderecoempresa, cidade, cep, pais, cgc, pessoacontato, telefonecomercial, email, banco, agencia, conta, referenciacomercial, estado FROM 'cadastrofornecedor'";
	$result=mysqli_query($conecta, $sql);
	While($consulta=mysqli_fetch_array($result))
    {
        Print "Nomeempresa:$consulta[nomeempresa]<br>
               enderecoempresa:$consulta[enderecoempresa]<br>
               cidade:$consulta[cidade]<br>
               cep:$consulta[cep]<br>
               pais:$consulta[pais]<br>
               cgc:$consulta[cgc]<br>
               pessoacontato:$consulta[pessoacontato]<br>
               telefonecomercial:$consulta[telefonecomercial]<br>
               email:$consulta[email]<br>
               banco:$consulta[banco]<br>
               agencia:$consulta[agencia]<br>
               conta:$consulta[conta]<br>
               referenciacomercial:$consulta[referenciacomercial]<br>
               estado:$consulta[estado]<br>" ; 
        		
                	

        		
    } 
    Mysqli_free_result($result); 


	

	mysqli_query($conecta, $sql);

	mysqli_close($conecta); 


?>
