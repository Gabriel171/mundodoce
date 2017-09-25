<!DOCTYPE html>
<html lang="en">

<head>

<?php
    $path = "/header.php";
    include_once(dirname(__DIR__) . $path);
?>

</head>

<body>

    < <?php
    $path = "/menu.php";
    include_once(dirname(__DIR__) . $path);
?>


           
 <?php
    
    include 'Conecta_CL.php';
    
    // //header('Content-Type: text/html; charset=utf-8');
    // //Meta Charset no Arquivo (UFT-8)
    
    // mysqli_select_db($conecta,"login") or
    // print(mysqli_error());
    
    // $sql = "SELECT  nome, cpf, rg, data_nascimento, sexo, telefone, email, senha, estado, dt_atualiza FROM `cadastrocliente`";    
    
    // $result=mysqli_query($conecta,$sql);
    
    // while($consulta=mysqli_fetch_array($result))
    // {
    //                  echo"   <li><a href='#'><i class='fa fa-user fa-fw'></i>$consulta[nome]</a>
    //                     </li>";
    //                 }
    // ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registro de Clientes</h1>
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
                                    <thead>
                                    <tr>
                                           
                                            <th>Nome</th>
                                           
                                            <th>Rg</th>
                                           
                                            
                                            
                                            <th>Email</th>
                                            <th>Senha</th>
                                            
                                            <th>Dt_atualiza</th>

                                        </tr>
                                    </thead>

                                    <?php
                                        
                                        include 'Conecta_CL.php';
                                        
                                       
                                        //Meta Charset no Arquivo (UFT-8)
                                        
                                        mysqli_select_db($conecta,"login") or
                                        print(mysqli_error());
                                        
                                        $sql = "SELECT  id_cliente, nome, cpf, rg, data_nascimento, sexo, telefone, email, senha, estado, dt_atualiza FROM `cadastrocliente`";    
                                        
                                        $result=mysqli_query($conecta,$sql);
                                        
                                        while($consulta=mysqli_fetch_array($result))
                                        {
                                            echo "
                                                                            
                                                                        <tbody>
                                                                            <tr>
                                                                                
                                                                                <td>$consulta[nome]</td>
                                                                                <td>$consulta[cpf]</td>
                                                                               
                                                                                
                                                                               

                                                                                <td>$consulta[email]</td>
                                                                                <td>$consulta[senha]</td>
                                                                               
                                                                                <td>$consulta[dt_atualiza]</td>

                                                                                <td><a href='edit_cliente.php?id_cliente=$consulta[id_cliente]'><button type='button' class='btn btn-info btn-circle'><i class='fa fa-pencil' title='Editar registro $consulta[id_cliente]' ></i></button></a></td>
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