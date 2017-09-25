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
                    <h1 class="page-header">Edição de cadastro de funcionario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            Fornecedor
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                  


<?php
    
    include 'Conecta_CL.php';
    
    mysqli_select_db($conecta,"login") or
    print(mysqli_error());
    
    $sql = "SELECT id_funcionario, nomecompleto, cpf, cep, telefone, dt_atualiza 
        FROM cadastrofuncionario WHERE id_funcionario = ".$_GET['id_funcionario'];
    
    $result=mysqli_query($conecta,$sql);
    
    echo "<form action='Atualiza_Funcionario.php' method='get'>";

    while($consulta=mysqli_fetch_array($result))
    {

      echo "    
                                    <div class='form-group'>
                                   
                                        <input class='form-control'  type='hidden' id='id_funcionario' value='$consulta[id_funcionario]' name='id_funcionario'>
                                        </div>
                                    <label>Nome:</label>
                                        <input class='form-control' name='nomecompleto' value='$consulta[nomecompleto]' >
                                        </div>
                                         <label>CPF:</label>
                                        <input class='form-control' name='cpf' value='$consulta[cpf]' >
                                        </div><br>

                                        

                                      


                                      
                                         <label>CEP:</label>
                                        <input class='form-control' name='cep' value='$consulta[cep]'> 
                                        </div><br>  

                                        <label>Telefone:</label>
                                        <input class='form-control' name='telefone' value='$consulta[telefone]'> 
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