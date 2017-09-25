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
                    <h1 class="page-header">Edição de cadastro de fornecedor</h1>
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
    
    $sql = "SELECT id_fornecedor, nomeempresa, cep, email, banco, dt_atualiza FROM cadastrofornecedor 
    WHERE id_fornecedor = ".$_GET['id_fornecedor'];
    
    $result=mysqli_query($conecta,$sql);
    
    echo "<form action='Atualiza_CFO.php' method='get'>";

    while($consulta=mysqli_fetch_array($result))
    {

      echo "    
                                    <div class='form-group'>
                                   
                                        <input class='form-control'  type='hidden' id='id_fornecedor' value='$consulta[id_fornecedor]' name='id_fornecedor'>
                                        </div>
                                    <label>Nome:</label>
                                        <input class='form-control' name='nomeempresa' value='$consulta[nomeempresa]' >
                                        </div>
                                         <label>CPF:</label>
                                        <input class='form-control' name='cep' value='$consulta[cep]' >
                                        </div><br>

                                        

                                      


                                      
                                         <label>Email:</label>
                                        <input class='form-control' name='email' value='$consulta[email]'> 
                                        </div><br>  

                                        <label>Senha:</label>
                                        <input class='form-control' name='banco' value='$consulta[banco]'> 
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