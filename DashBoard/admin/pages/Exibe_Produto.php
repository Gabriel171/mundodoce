<?php

	session_start();

	include 'Conecta_CL.php';

	header('Content-Type: text/html; charset=utf-8');


	mysqli_select_db($conecta, "login") or print(mysqli_error());

	$sql = "SELECT id_produto, nomeproduto, codigoproduto, marca, fornecedor, unidade, peso, estoqueminimo, estoquemaximo, codigogtin, valorvenda, valorcusto, origemproduto, situação, estado FROM 'cadastroproduto' ";
	$result=mysqli_query($conecta, $sql);
	While($consulta=mysqli_fetch_array($result))
    {
        Print "nomeproduto:$consulta[nomeproduto]<br>
               codigoproduto:$consulta[codigoproduto]<br>
               marca:$consulta[marca]<br>
               fornecedor:$consulta[fornecedor]<br>
               unidade:$consulta[unidade]<br>
               peso:$consulta[peso]<br>
               estoqueminimo:$consulta[estoqueminimo]<br>
               estoquemaximo:$consulta[estoquemaximo]<br>
               codigogtin:$consulta[codigogtin]<br>
               valorvenda:$consulta[valorvenda]<br>
               valorcusto:$consulta[valorcusto]<br>
               origemproduto:$consulta[origemproduto]<br>
               situação:$consulta[situação]<br>
               estado:$consulta[estado]<br>" ; 
        		
                	

        		
    } 
    Mysqli_free_result($result); 


	

	mysqli_query($conecta, $sql);

	mysqli_close($conecta); 


?>