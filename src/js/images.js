var form = {};

form.$grid = $('.candy-sample-grid');

form.list = function() {
    $.ajax({
        url: 'php/getCandySample.php',
        type: 'get',
        success: function(data) {
            if (data) {
                data = JSON.parse(data);

                for (var i = 0; i < data.length; i++) {
                    form.$grid.append(
                        form.getSampleTemplate(data[i], i)
                    );
                }
            }
        },
        error: function(error) {
          console.error(error);
        }
    });
};

form.getSampleTemplate = function(sample) {
    return vsprintf("<div class='candy-sample col-sm-4 col-xs-12'>" +
                        "<div class='img-wrapper'>" +
                            "<img src='data:image/png;base64,%s' class='img-responsive' alt='%s não possui foto' >" +
                        "</div>" +
                        "<figcaption>" +
                            "<h4>" +
                            "<a href='#'>" +
                                "%s" +
                            "</a>" +
                            "</h4>" +
                        "</figcaption>" +
                    "</div>", 
                       [sample.image, sample.name, sample.name]);
};

$(document).ready(function() {
    form.list();
});