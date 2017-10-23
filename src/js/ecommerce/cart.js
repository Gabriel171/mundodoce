var form = {};

form.$cart = $('.main-menu .cart .badge');
form.table = $('.cart-table');
form.$salePrice = $('.sale-price');

form.removeFromCart = function (e) {
    var $target = $(e.target),
        $product = $target.closest('tr');
        
        $.ajax({
            url: 'php/ecommerce/removeFromCart.php',
            data: {productId: $product.data('id')},
            type: 'post',
            success: function(data) {
                data = JSON.parse(data);

                form.$cart.html(data.total);

                if (data.total == 0) {
                    form.table.html("<h2 class='text-center'>Seu carrinho está vázio!</h2>");
                } else if (data.updatedQuantity == 0) {
                    $product.hide();
                } else {
                    $product.find('.quantity').html(data.updatedQuantity);
                    $product.find('.totalValue').html('R$ ' + data.updatedTotalValue.toFixed(2).replace('.', ','));
                    form.$salePrice.html('R$' + data.updatedSalePrice.toFixed(2).replace('.', ','));
                }
        },
        error: function(error) {
          console.error(error);
        }
    });
}

$(document)
.on('click', '.add-to-cart', form.removeFromCart);