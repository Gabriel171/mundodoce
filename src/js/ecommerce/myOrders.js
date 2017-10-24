var form = {};

form.list = function() {
    $.ajax({
        url: 'php/ecommerce/getMyOrders.php',
        type: 'get',
        success: function(data) {
            if (data) {
                data = JSON.parse(data);

                for (var i = 0; i < data.length; i++) {
                    console.log(data[i]);
                }
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