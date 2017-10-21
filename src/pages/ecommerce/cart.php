<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php
            $path = "/templates/ecommerce-header.php";
            include_once(dirname(dirname(__DIR__)) . $path);
        ?>
    </head>
    <body>
        <?php
            $path = "/templates/menu.php";
            include_once(dirname(dirname(__DIR__)) . $path);
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
                                <li class="active">Carrinho</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container cart">
            <div class="cart--grid row">
                <!-- Products go here -->
                <?php
                    $cart = $_SESSION['cart'];
                    $totalPrice = 0;

                    foreach ($cart as $product) {
                        $totalPrice += $product -> price;

                ?>
                    <div class="col-md-12 cart--grid--row" data-id="<?= $product->id ?>">
                         <p>
                             <?= $product->name ?>
                        </p>
                         <p>
                             <?= $product->price ?>
                         </p>
                         <p>
                             <?= $product->state ?>
                         </p>
                         <button type='button' class='btn btn-default add-to-cart' title='Adicionar ao carrinho'>
                            <span class='ion-trash-b'></span>
                         </button>
                    </div>
                <?php
                    }
                ?>
            </div>
        </section>

        <?php
            $path = "/templates/footer.php";
            include_once(dirname(dirname(__DIR__)) . $path);
        ?>

        <script src="app/js/ecommerce/cart.js"></script>
    </body>
</html>