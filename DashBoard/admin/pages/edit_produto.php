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
                    <h1 class="page-header">Edição de Cadastro de Produto</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            Produto
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                  


<?php
    
    include 'Conecta_CL.php';
    
    mysqli_select_db($conecta,"login") or
    print(mysqli_error());
    
    $sql = "SELECT id_produto, nomeproduto, codigoproduto, fornecedor, estoqueminimo, estoquemaximo, 
    dt_atualiza  FROM `cadastroproduto` WHERE id_produto = ".$_GET['id_produto'];
    
    $result=mysqli_query($conecta,$sql);
    
    echo "<form action='Atualiza_Produto.php' method='get'>";

    while($consulta=mysqli_fetch_array($result))
    {

      echo "    
                                    <div class='form-group'>
                                   
                                        <input class='form-control'  type='hidden' id='id_produto' value='$consulta[id_produto]' name='id_produto'>
                                        </div>
                                    <label>nomeproduto:</label>
                                        <input class='form-control' name='nomeproduto' value='$consulta[nomeproduto]' >
                                        </div>
                                         <label>codigoproduto:</label>
                                        <input class='form-control' name='codigoproduto' value='$consulta[codigoproduto]' >
                                        </div><br>

                                        

                                      


                                      
                                         <label>Fornecedor:</label>
                                        <input class='form-control' name='fornecedor' value='$consulta[fornecedor]'> 
                                        </div><br>  

                                        <label>estoqueminimo:</label>
                                        <input class='form-control' name='estoqueminimo' value='$consulta[estoqueminimo]'> 
                                        </div><br>

                                        <label>estoquemaximo:</label>
                                        <input class='form-control' name='estoquemaximo' value='$consulta[estoquemaximo]'> 
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