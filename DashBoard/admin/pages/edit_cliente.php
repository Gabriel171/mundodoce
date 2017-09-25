<!DOCTYPE html>
<html lang="en">
<?php
        $path = "/header.php";
        include_once(dirname(__DIR__) . $path);
    ?>
<head>
<?php
        $path = "/header.php";
        include_once(dirname(__DIR__) . $path);
    ?>
   

</head>

<body>

<?php
        $path = "/menu.php";
        include_once(dirname(__DIR__) . $path);
    ?>

    


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edição de cadastro de Clientes</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            Clientes
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                  


<?php
    
    include 'Conecta_CL.php';
    
    mysqli_select_db($conecta,"login") or
    print(mysqli_error());
    
    $sql = "SELECT id_cliente, nome, cpf, rg, data_nascimento, sexo, telefone, email, senha, estado, dt_atualiza 
    FROM `cadastrocliente` WHERE id_cliente = ".$_GET['id_cliente'];     
    
    $result=mysqli_query($conecta,$sql);
    
    echo "<form action='Atualiza_CL.php' method='get'>";

    while($consulta=mysqli_fetch_array($result))
    {

      echo "    
                  <div class='form-group'>
        
                                    <label>ID do cliente:</label>
                                        <input class='form-control' type='hidden' id='id_cliente' value='$consulta[id_cliente]' name='id_cliente'>
                                        </div>
                                    <label>Nome:</label>
                                        <input class='form-control' name='nome' value='$consulta[nome]' >
                                        </div>


                                         <label>CPF:</label>
                                        <input class='form-control' name='cpf' value='$consulta[cpf]' >
                                        </div><br>

                                         <label>RG:</label>
                                        <input class='form-control' name='rg' value='$consulta[rg]' >
                                        </div><br>

                                        <label>Data de Nascimento:</label>
                                        <input class='form-control' name='data_nascimento' value='$consulta[data_nascimento]' >
                                        </div><br>


                                        <label>Telefone:</label>
                                        <input class='form-control' name='telefone' value='$consulta[telefone]'><br>
                                        </div>

                                         <label>Email:</label>
                                        <input class='form-control' name='email' value='$consulta[email]'> 
                                        </div><br>  

                                        <label>Senha:</label>
                                        <input class='form-control' name='senha' value='$consulta[senha]'> 
                                        </div><br>

                                        <label>Estado:</label>
                                        <input class='form-control' name='estado' value='$consulta[estado]'> 
                                        </div><br>

                                       

                                        <input type='submit' class='btn btn-success' value='Salvar'>
                                    


                                    ";
      


      
    }
   
    echo "</form>";

    
    mysqli_free_result($result);
    
    mysqli_query($conecta,$sql); 
    
    //encerra a conexão.
    mysqli_close($conecta); 
?>
</tbody>
 </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                 </div>
                 <?php
        $path = "/script.php";
        include_once(dirname(__DIR__) . $path);
    ?>
                </body>
                </html>