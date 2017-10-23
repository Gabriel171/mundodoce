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
            <!-- Products go here -->
            <?php
                $cart = $_SESSION['cart'];
                $salePrice = 0;
                if (sizeof($cart) < 1) {
            ?>
            
            <h2 class="text-center">Seu carrinho está vázio!</h2>

            <?php
                } else {
            ?>

                <section class="cart-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Valor Unitário</th>
                                <th>Valor Total</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php
                        foreach ($cart as $product) {
                            $salePrice = $salePrice + ($product->price * $product->quantity); 
                    ?>
                            <tr data-id="<?= $product->id ?>">
                                <td>
                                    <?= $product->name ?>
                                </td>
                                <td>
                                    <span class="quantity"><?= $product->quantity ?></span>
                                    <button type='button' class='btn btn-default add-to-cart' title='Adicionar ao carrinho'>
                                        <span class='ion-trash-b'></span>
                                    </button>
                                </td>
                                <td>
                                    R$ <?= number_format($product->price, 2, ',', ' ') ?>
                                </td>
                                <td class="totalValue">
                                    R$ <?= number_format($product->quantity * $product->price, 2, ',', ' ') ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>
                                    <span>Total</span>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <strong class="sale-price">R$ <?= $salePrice ?></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </section>
            <?php
            }
            ?>
        </section>
        <?php
            $path = "/templates/footer.php";
            include_once(dirname(dirname(__DIR__)) . $path);
        ?>

        <script src="app/js/ecommerce/cart.js"></script>
    </body>
</html>