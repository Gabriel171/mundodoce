<!DOCTYPE html>
<html>
<head>
    <?php
        $path = "/templates/header.php";
        include_once(dirname(__DIR__) . $path);
    ?>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="app/css/login.css">
    <link rel="stylesheet" href="app/css/helpers.css">
</head>
<!--
==================================================
Header Section Start
================================================== -->

<body>
    <?php
        $path = "/templates/menu.php";
        include_once(dirname(__DIR__) . $path);
    ?>
 

  <div class="rerun">
    <a href="index">Retornar</a>
  </div>

  <div class="container">
    <div class="card">
      <h1 class="title">Login Administrativo</h1>
      <form id="loginForm">
        <div class="input-container">
          <input type="text" name="email" id="email" value="admin@email.com" required/>
          <label for="email">Email</label>
          <div class="bar"></div>
        </div>
        <div class="input-container">
          <input type="password" name="password" id="password" value="1234" required/>
          <label for="password">Senha</label>
          <div class="bar"></div>
        </div>

        <div class="input-container error-display display-none">
          <span>Login ou senha incorretos.</span>
        </div>

        <div class="button-container">
          <button><span>Entrar</span></button>
        </div>
        <div class="footer">
        </div>

        <input type="hidden" name="type" value="ADMIN" />
      </form>
    </div>

    <div class="card alt">
    </div>
      <h1 class="title">
 
  <script src="app/js/utils.js"></script>
  <script src="app/js/login.js"></script>
</body>
</html>