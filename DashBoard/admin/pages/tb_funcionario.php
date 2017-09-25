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
    
  
    // //Meta Charset no Arquivo (UFT-8)
    
    // mysqli_select_db($conecta,"login") or
    // print(mysqli_error());
    
    // $sql = "SELECT  nomecompleto, cpf, cep, telefone, dt_atualiza FROM cadastrofuncionario";    
    
    // $result=mysqli_query($conecta,$sql);
    
    // while($consulta=mysqli_fetch_array($result))
    // {
    //      echo   "
    //     <li> <a href='CadastroFuncionários.html'><i class='fa fa-user fa-fw'></i>$consulta[nomecompleto]</a> </li>
    //             ";
    //         }
                    
    // ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registro de Funcionários</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            Funcionários
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                    <tr>
                                          
                                            <th>nomecompleto</th>
                                            <th>Cpf</th>
                                         
                                            <th>cep</th>
                                         
                                            <th>telefone</th>
                                            <th>email</th>
                                            <th>dt_atualiza</th>

                                        </tr>
                                    </thead>

<?php
    
    include 'Conecta_CL.php';
    
    
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"login") or
    print(mysqli_error());
    
    $sql = "SELECT  *FROM cadastrofuncionario";    
    
    $result=mysqli_query($conecta,$sql);
    
    while($consulta=mysqli_fetch_array($result))
    {
        echo "
                                        
                                    <tbody>
                                        <tr>
                                            
                                            <td>$consulta[nomecompleto]</td>
                                            <td>$consulta[cpf]</td>
                                           
                                            <td>$consulta[cep]</td>
                                            
                                            <td>$consulta[telefone]</td>
                     
                                            

                                            <td>$consulta[dt_atualiza]</td>

                                            <td><a href='edit_funcionario.php?id_funcionario=$consulta[id_funcionario]'><button type='button' class='btn btn-info btn-circle'><i class='fa fa-pencil' title='Editar registro $consulta[id_funcionario]' ></i></button></a></td>
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