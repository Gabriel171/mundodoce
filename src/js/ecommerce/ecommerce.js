var form = {};

form.$grid = $('.ecommerce--grid');
form.$cart = $('.main-menu .cart .badge');

form.list = function() {
    $.ajax({
        url: 'php/ecommerce/ecommerce.php',
        type: 'get',
        success: function(data) {
            if (data) {
                data = JSON.parse(data);

                for (var i = 0; i < data.length; i++) {
                    form.$grid.append(form.getProductTemplate(data[i]));
                }
            }
        },
        error: function(error) {
          console.error(error.responseText);
        }
    });
};

form.getProductTemplate = function(product) {
    return vsprintf("<div class='col-md-3 ecommerce--grid--product'>" +
                         "<p>%s</p>" +
                         "<p>%s</p>" +
                         "<p>%s</p>" +
                         "<button type='button' class='btn btn-default add-to-cart'>" +
                            "<span class='ion-bag'></span>" +
                         "</button>" +
                    "</div>", 
    [product.name, product.price, product.state]);
};

form.addToCart = function (e) {
    console.log($(e));

    $.ajax({
        url: 'php/ecommerce/addToCart.php',
        dataType: 'json',
        // data: { user: JSON.stringify(formObject) },
        data: {},
        type: 'post',
        success: function(data) {
            form.$cart.html(data);
          console.log('sucessoooo');
        },
        error: function(error) {
          console.error(error.responseText);
        }
    });
}

$(document).ready(function() {
    form.list();
});

$(document)
.on('click', '.add-to-cart', form.addToCart);