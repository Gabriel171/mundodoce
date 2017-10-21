 <?php
   if (!isset($_SESSION['roles']) || 
   !(in_array("ADMIN", $_SESSION['roles']) || in_array("FUNC", $_SESSION['roles']))) {
      header('Location: http://localhost/MundoDoceRemaster/index');
    }
 ?>
 
 <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Mundo Doce</a>
            </div>
            <!-- /.navbar-header -->

           
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                  
                                    <a href="php/user/logout.php">
                                    <span class="input-group-btn">
                                     <button class="btn btn-default" type="button">
                                     <i class=""></i>Sair</a>
                                   
                                     </button>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                             <a href=""><i class="fa fa-edit fa-fw"></i>Cadastros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Cadastrocliente.php">Cadastro Cliente</a>
                                </li>
                                <li>
                                    <a href="CadastroProdutos.php">Cadastro Produtos</a>
                                </li>
                                <li>
                                    <a href="CadastroFornecedor.php">Cadastro Fornecedor</a>
                                </li>
                                <li>
                                    <a href="CadastroFuncionarios.php">Cadastro Funcionário</a>
                                </li>
                            </ul>
                            <a href=""><i class="fa fa-table fa-fw"></i>Tabelas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tb_cliente.php">Tabela de Cliente</a>
                                </li>
                                <li>
                                    <a href="tb_produto.php">Tabela de Produto</a>
                                </li>
                                <li>
                                    <a href="tb_fornecedor.php">Tabela de Fornecedor</a>
                                </li>
                                <li>
                                    <a href="tb_funcionario.php">Tabela de Funcionário</a>
                                </li>
            
                            </ul>

                        </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

                        <!-- /.panel-heading -->
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>