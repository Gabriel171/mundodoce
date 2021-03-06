var form = {};

form.products = [];
form.$grid = $('.ecommerce--grid');
form.$cart = $('.main-menu .cart .badge');
form.$search = $('.ecommerce--search input');

form.list = function() {
    $.ajax({
        url: 'php/ecommerce/ecommerce.php',
        type: 'get',
        success: function(data) {
            if (data) {
                data = JSON.parse(data);

                form.products = data;

                for (var i = 0; i < data.length; i++) {
                    form.$grid.append(
                        form.getProductTemplate(data[i], i)
                    );
                }
            }
        },
        error: function(error) {
          console.error(error.responseText);
        }
    });
};

form.getProductTemplate = function(product, index) {
    return vsprintf("<div class='col-md-3'>" +
                        "<div class='ecommerce--grid--product' data-index='%s'>" +
                            "<img src= 'data:image/png;base64,%s' class='img-responsive ecommerce--grid--product--image'>" +
                            "<p class='ecommerce--grid--product--name'>%s</p>" +
                            "<p class='ecommerce--grid--product--value'>Preço: R$ %s</p>" +
                            "<p class='ecommerce--grid--product--state'>Estado: %s</p>" +
                            "<button type='button' class='btn btn-default add-to-cart' title='Adicionar ao carrinho'>" +
                                "<span class='ion-bag'></span>" +
                            "</button>" +
                        "</div>" +
                    "</div>", 
    [index,product.image, product.name, product.price.toFixed(2).replace('.', ','), product.state]);
};

form.addToCart = function (e) {
    var $target = $(e.target),
        $product = $target.closest('.ecommerce--grid--product'),
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
};

form.search = function(e) {
    var search = e.target.value.toLowerCase(),
        $products = $('.ecommerce--grid--product');;
    
    if (search) {
        $products.each(function() {
            $element = $(this);
            if ($element.find('.ecommerce--grid--product--name').text().toLowerCase() == search) {
                $element.parent().show();
            } else {
                $element.parent().hide();
            }
        });
    } else {
        $products.each(function() {
            $(this).parent().show();
        });
    }
}

$(document).ready(function() {
    form.list();
});

$(document)
.on('click', '.add-to-cart', form.addToCart)
.on('keyup', '.ecommerce--search input', form.search);