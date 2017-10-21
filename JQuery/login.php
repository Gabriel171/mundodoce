<!DOCTYPE html> 
<html> 
	<head> 
	<title>Mundo Doce</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
</head> 
<body> 
    <?php
        include_once('verifica_usuario_ativo.php');
    ?>

<div data-role="page">

	<div data-role="header" data-theme= "c">
		<a href="MundoDoce.html"class="ui-btn-right">Inicio</a><h1>Login</h1>
	</div><!-- /header -->

	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        
                    </div>
                    <div class="panel-body">
                        <form role="form" action="verifica_login.php" method="get">
                            <fieldset>
                                <div class="form-group">
									<div data-role="fieldcontain">
										<label for="name">Email:</label>
										<input type="text" name="name" id="name" value="" />
									</div>
                                </div>
                                <div class="form-group">
                                    <div data-role="fieldcontain">
									<label for="name">Senha:</label>
										<input type="text" name="name" id="name" value="" />
									</div>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" data-theme="a" class="ui-btn-hidden" aria-disabled="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login</font></font></button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div><!-- /page -->

</body>
</html>