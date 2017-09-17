<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Mundo Doce</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="app/css/login.css">
  <link rel="stylesheet" href="app/css/helpers.css">
</head>
<body>
  <div class="pen-title">
    <h1>Login do Mundo Doce</h1>
  </div>

  <div class="rerun">
    <a href="index">Retornar</a>
  </div>

  <div class="container">
    <div class="card">

    </div>
    <div class="card">
      <h1 class="title">Login</h1>
      <form id="loginForm">>
        <div class="input-container">
          <input type="text" name="name" id="name" required/>
          <label for="name">Usuário</label>
          <div class="bar"></div>
        </div>
        <div class="input-container">
          <input type="password" name="password" id="password" required/>
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
          <a href="#">Esqueceu sua senha?</a>
        </div>
      </form>
    </div>

    <div class="card alt">
      <div class="toggle"></div>
      <h1 class="title">
        Registrar
        <div class="close"></div>
      </h1>
      <form id="createUserForm">>
        <div class="input-container">
          <input type="text" name="name" id="name" required/>
          <label for="name">Usuário</label>
          <div class="bar"></div>
        </div>
        <div class="input-container">
          <input type="password" name="password" id="password" required/>
          <label for="#password">Senha</label>
          <div class="bar"></div>
        </div>
        
        <div class="button-container">
          <button class="createUserForm__submit">
            <span class="createUserForm__submit__text">Cadastrar</span>
          </button>
        </div>
      </form>
    </div>
  </div>
  
  <script src="app/js/utils.js"></script>
  <script src="app/js/login.js"></script>
</body>
</html>