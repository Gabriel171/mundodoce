var form = {};

form.$cart = $('.main-menu .cart .badge');

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
        },
        error: function(error) {
          console.error(error);
          $product.show();
        }
    });
}

$(document)
.on('click', '.add-to-cart', form.removeFromCart);