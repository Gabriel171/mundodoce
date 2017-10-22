var form = {};

form.$cart = $('.main-menu .cart .badge');
form.$grid = $('.cart--grid');

form.removeFromCart = function (e) {
    var $target = $(e.target),
        $product = $target.is('button') ? $target.parent() : $target.parent().parent();

    $product.hide();

    $.ajax({
        url: 'php/ecommerce/removeFromCart.php',
        data: {productId: $product.data('id')},
        type: 'post',
        success: function(data) {
            form.$cart.html(data);

            if (data == 0) {
                form.$grid.html('<span>Vazioo</span>')
            }
        },
        error: function(error) {
          console.error(error);
          $product.show();
        }
    });
}

$(document)
.on('click', '.add-to-cart', form.removeFromCart);