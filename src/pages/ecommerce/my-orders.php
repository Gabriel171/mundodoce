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
                            <h2>Meus Pedidos</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Meus Pedidos</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container my-orders">
            <section class="order-table">
                
            </section>
        </section>

        <?php
            $path = "/templates/footer.php";
            include_once(dirname(dirname(__DIR__)) . $path);
        ?>

        <script id="order-template" type="text/x-handlebars-template">
            {{#if isEmpty}}
                <h2 class="text-center">Nenhum pedido realizado!</h2>
            {{/if}}

            {{#each order}}
                <div class="panel panel-primary order-table--item">
                    <div class="panel-heading">
                        Pedido #{{saleId}}
                    </div>

                    <div class="panel-body">
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
                                {{#each items}}
                                    <tr>
                                        <td>
                                            <span>{{productName}}</span>
                                        </td>
                                        <td>
                                            <span>{{productQuantity}}</span>
                                        </td>
                                        <td>
                                            <span>{{numberFormat productValue}}</span>
                                        </td>
                                        <td>
                                        <span>{{numberFormat productTotalValue}}</span>
                                        </td>
                                    </tr>
                                {{/each}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                        <span>Total</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <strong>{{numberFormat saleValue}}</strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            {{/each}}
        </script>

        <script src="app/js/ecommerce/myOrders.js"></script>
    </body>
</html>