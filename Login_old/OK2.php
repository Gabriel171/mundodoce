

<?php
  session_start();

  include('verifica_usuario_ativo.php');

  if(isset($_SESSION['usuario']))
  {

  }
  else
  {
  	// header('location:Login2.php');
  }
  $nome = $_SESSION['usuario'];
  $nvl_acesso = $_SESSION['a'];
  echo "Bem vindo(a)". $nome. "| N’vel Acesso-> ".$nvl_acesso;
  echo "<a href='logout2.php'> | Sair |</a>";
?>