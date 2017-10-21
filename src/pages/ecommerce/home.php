<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php
            $path = "/templates/ecommerce-header.php";
            include_once(dirname(__DIR__, 2) . $path);
        ?>
    </head>
    <body>
        <?php
            $path = "/templates/menu.php";
            include_once(dirname(__DIR__, 2) . $path);
        ?>

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Loja</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Loja</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container ecommerce">
            <div class="ecommerce--search row">
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Pesquise um produto">
                </div>
            </div>

            <div class="ecommerce--grid row">
                <!-- Products go here -->
            </div>
        </section>

        <?php
            $path = "/templates/footer.php";
            include_once(dirname(__DIR__, 2) . $path);
        ?>

        <script src="app/js/ecommerce/ecommerce.js"></script>
    </body>
</html>