var form = {};

form.$cart = $('.main-menu .cart .badge');
form.$grid = $('.cart--grid');

form.removeFromCart = function (e) {
    var $target = $(e.target),
        $product = $target.is('button') ? $target.parent() : $target.parent().parent();
        
        $.ajax({
            url: 'php/ecommerce/removeFromCart.php',
            data: {productId: $product.data('id')},
            type: 'post',
            success: function(data) {
                data = JSON.parse(data);

                form.$cart.html(data.total);
                
                if (data.current == 0) {
                    $product.hide();
                } else {
                    $product.find('.quantity').html(data.current);
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