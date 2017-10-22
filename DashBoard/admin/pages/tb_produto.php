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
    
    // $sql = "SELECT nomeproduto, codigoproduto, marca, fornecedor, unidade, peso, estoqueminimo, estoquemaximo, codigogtin, valorvenda, valorcusto, origemproduto, situacao, estado, dt_atualiza  FROM `cadastroproduto`";    
    
    // $result=mysqli_query($conecta,$sql);
    
    // while($consulta=mysqli_fetch_array($result))
    // {
    //      echo   "
    //     <li> <a href='#'><i class='fa fa-user fa-fw'></i>$consulta[nomeproduto]</a> </li>
    //             ";
    //         }
                    
    // ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registro de Produtos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            Produtos
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                    <tr>
                                            
                                            <th>Nome Produto</th>
                                            <th>Codigo Produto</th>
                                           
                                            <th>Fornecedor</th>
                                           
                                            
                                            <th>Estoque Minimo</th>
                                            <th>Estoque Maximo</th>
                                           
                                            <th>Dt_Atualiza</th>

                                        </tr>
                                    </thead>

                                        <?php
                                            
                                            include 'Conecta_CL.php';
                                            
                                           
                                            //Meta Charset no Arquivo (UFT-8)
                                            
                                            mysqli_select_db($conecta,"login") or
                                            print(mysqli_error());
                                            
                                            $sql = "SELECT id_produto, nomeproduto, codigoproduto, marca, fornecedor, unidade, peso, estoqueminimo, estoquemaximo, codigogtin, valorvenda, valorcusto, origemproduto, situacao, estado, dt_atualiza FROM `cadastroproduto`";    
                                            
                                            $result=mysqli_query($conecta,$sql);
                                            
                                            while($consulta=mysqli_fetch_array($result))

                                            {
                                                $editButton = '';
                                                
                                                                                                if (isset($_SESSION['usuario']) 
                                                                                                && isset($_SESSION['roles']) 
                                                                                                && in_array("ADMIN", $_SESSION['roles']) ) {
                                                                                                    $editButton = 
                                                                                                    "<td><a href='edit_produto.php?id_produto=$consulta[id_produto]'>
                                                                                                    <button type='button' class='btn btn-info btn-circle'><i class='fa fa-pencil' title='Editar 
                                                                                                    registro $consulta[id_produto]' ></i></button></a></td>";
                                                                                                }
                                                echo "
                                                                                
                                                                            <tbody>
                                                                                <tr>
                                                                                  
                                                                                    
                                                                                    <td>$consulta[nomeproduto]</td>
                                                                                    <td>$consulta[codigoproduto]</td>
                                                                                  
                                                                                    <td>$consulta[fornecedor]</td>
                                                                                    
                                                                                   
                                                                                    <td>$consulta[estoqueminimo]</td>
                                                                                    <td>$consulta[estoquemaximo]</td>
                                                                                   
                                                                                    <td>$consulta[dt_atualiza]</td>

                                                                                    $editButton
                                                                                </tr>";
                                              
                                            }

                                            mysqli_free_result($result);
                                            
                                            mysqli_query($conecta,$sql); 
                                            
                                            //encerra a conex‹o.
                                            mysqli_close($conecta); 
                                        ?>

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