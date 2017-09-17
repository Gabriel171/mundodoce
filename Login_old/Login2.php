<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Mundo Doce</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="../css/style.css">

  
</head>
        <?php
        include('verifica_usuario_ativo2.php');
    ?>
<body>
  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Login do Mundo Doce</h1>
</div>
<div class="rerun"><a href="">Retornar</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="verifica_login2.php" method="get">>
      <div class="input-container">
        <input type="text" name="usuario" required="required"/>
        <label for="#{label}">Usuário</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="senha" required="required"/>
        <label for="#{label}">Senha</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Entra</span></button>
      </div>
      <div class="footer"><a href="#">Esqueceu sua senha?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Registrar
      <div class="close"></div>
    </h1>
    <form action="verifica_login2.php" method="get">>
      <div class="input-container">
        <input type="text" id="usurio" required="required"/>
        <label for="#{label}">Usuário</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="senha" required="required"/>
        <label for="#{label}">Senha</label>
        <div class="bar"></div>
      </div>
      
      <div class="button-container">
        <button><span>Próximo</span></button>
      </div>
    </form>
  </div>
</div>


    <script src="js/index.js"></script>

</body>
</html>
