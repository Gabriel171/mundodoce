<!--
==================================================
Header Section Start
================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <img src="src/images/MundoDoce.png" class="img-responsive" height="60PX" width="50px";>
            
            <!-- logo -->
            
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index" >Home</a>
                    </li>
                    <li><a href="about">Sobre</a></li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Países <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="blog-fullwidth.html">França</a></li>
                                <li><a href="blog-left-sidebar.html">Itália</a></li>
                                <li><a href="blog-right-sidebar.html">Inglaterra</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="contact">Contato</a></li>

                    <?php 
                        if (isset($_SESSION['usuario'])) {
                    ?>
                        <li><a href="dashboard/admin">Dashboard</a></li>
                        <li class="logout">
                            <a href="javascript:void(0);">Sair</a>
                        </li>
                    <?php
                        } else {
                    ?>
                        <li><a href="access">Login</a></li>
                    <?php
                     }
                    ?>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>