<?php
    $cart = $_SESSION['cart'];
    $total= 0;

    foreach($cart as $product){
        $total = $total + $product->quantity;
    }
?>

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
            <img src="src/images/MundoDoce.png" class="img-responsive" height="90px" width="80px";>
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
                                <li><a href="france">França</a></li>
                                <li><a href="italy">Itália</a></li>
                                <li><a href="england">Inglaterra</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="contact">Contato</a></li>

                    <?php 
                        if (isset($_SESSION['usuario'])) {
                    ?>
                        <?php 
                            if (isset($_SESSION['roles']) && 
                            (in_array("ADMIN", $_SESSION['roles']) || in_array("FUNC", $_SESSION['roles']))) {

                        ?>
                            <li><a href="http://localhost/MundoDoceRemaster/dashboard/admin/pages/index.php">Dashboard</a></li>
                        <?php
                            }
                        ?>

                        <li>
                            <a href="my-orders">Meus Pedidos</a>
                        </li>

                        <li>
                            <a href="ecommerce">Loja</a>
                        </li>

                        <li class="cart">
                            <a href="cart">
                                <span class="ion-ios-cart"></span>
                                <span class="badge"><?= $total ?></span>
                            </a>
                        </li>

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