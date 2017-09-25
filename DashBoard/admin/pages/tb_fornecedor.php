<!DOCTYPE html>
<html lang="en">

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

           
 <?php
    
    include 'Conecta_CL.php';
    
    // mysqli_select_db($conecta,"login") or
    // print(mysqli_error());
    
    // $sql = "SELECT  nomeempresa, cep, email, banco, dt_atualiza FROM cadastrofornecedor";    
    
    // $result=mysqli_query($conecta,$sql);
    
    // while($consulta=mysqli_fetch_array($result))
    // {
    //      echo   "
    //      <a href='CadastroFornecedor.html'><i class='fa fa-user fa-fw'></i>$consulta[nomeempresa]</a> 
    //             ";
    //         }
                    
    // ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registro de Fornecedor</h1>
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
                                    <thead>
                                    <tr>
                                           
                                            <th>nomeempresa</th>
                                           
                                            <th>cep</th>
                                           
                                            <th>email</th>
                                            <th>banco</th>
                                           
                                            <th>dt_atualiza</th>

                                        </tr>
                                    </thead>

<?php
    
    include 'Conecta_CL.php';
    
   
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"login") or
    print(mysqli_error());
    
    $sql = "SELECT * FROM cadastrofornecedor";    
    
    $result=mysqli_query($conecta,$sql);
    
    while($consulta=mysqli_fetch_array($result))
    {
        echo "
                                        
                                    <tbody>
                                        <tr>
                                            
                                            <td>$consulta[nomeempresa]</td>
                                           
                                            <td>$consulta[cep]</td>
                                           
                                            <td>$consulta[email]</td>
                                            <td>$consulta[banco]</td>
                                           
                                            <td>$consulta[dt_atualiza]</td>

                                            <td><a href='edit_fornecedor.php?id_fornecedor=$consulta[id_fornecedor]'><button type='button' class='btn btn-info btn-circle'><i class='fa fa-pencil' title='Editar registro $consulta[id_fornecedor]' ></i></button></a></td>
                                        </tr>";
      
    }
    mysqli_free_result($result);
    
    mysqli_query($conecta,$sql); 
    
    //encerra a conex‹o.
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