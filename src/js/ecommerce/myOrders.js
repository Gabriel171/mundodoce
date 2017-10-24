var form = {};

form.table = $('.order-table');
form.template = Handlebars.compile($("#order-template").html());

Handlebars.registerHelper("numberFormat", function (data) {
    return 'R$ ' + data.toFixed(2).replace('.', ',');
});

form.list = function() {
    $.ajax({
        url: 'php/ecommerce/getMyOrders.php',
        type: 'get',
        success: function(data) {
            if (data) {
                data = JSON.parse(data);

                var htmlTemplate = form.template({order: data, isEmpty: data.length < 1});
                form.table.html(htmlTemplate);
            }
        },
        error: function(error) {
          console.error(error.responseText);
        }
    });
};

$(document).ready(function() {
    form.list();
});