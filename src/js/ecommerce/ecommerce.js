var form = {};

form.products = [];
form.$grid = $('.ecommerce--grid');
form.$cart = $('.main-menu .cart .badge');

form.list = function() {
    $.ajax({
        url: 'php/ecommerce/ecommerce.php',
        type: 'get',
        success: function(data) {
            if (data) {
                data = JSON.parse(data);

                form.products = data;

                for (var i = 0; i < data.length; i++) {
                    form.$grid.append(form.getProductTemplate(data[i], i));
                }
            }
        },
        error: function(error) {
          console.error(error.responseText);
        }
    });
};

form.getProductTemplate = function(product, index) {
    return vsprintf("<div class='col-md-3 ecommerce--grid--product' data-index='%s'>" +
                         "<p>%s</p>" +
                         "<p>%s</p>" +
                         "<p>%s</p>" +
                         "<button type='button' class='btn btn-default add-to-cart' title='Adicionar ao carrinho'>" +
                            "<span class='ion-bag'></span>" +
                         "</button>" +
                    "</div>", 
    [index, product.name, product.price, product.state]);
};

form.addToCart = function (e) {
    var $target = $(e.target),
        $product = $target.is('button') ? $target.parent() : $target.parent().parent(),
        product = {};

    product = form.products[$product.data('index')];

    $.ajax({
        url: 'php/ecommerce/addToCart.php',
        dataType: 'json',
        data: { product: JSON.stringify(product) },
        type: 'post',
        success: function(data) {
            form.$cart.html(data);
        },
        error: function(error) {
          console.error(error);
        }
    });
}

$(document).ready(function() {
    form.list();
});

$(document)
.on('click', '.add-to-cart', form.addToCart);