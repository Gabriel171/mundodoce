var user = {};

user.logout = function(e) {
    e.stopPropagation();
    e.preventDefault();

    $.ajax({
        url: 'php/user/logout.php',
        type: 'get',
        success: function(data) {
            window.location = 'index';
        },
        error: function(error) {
            console.error(error.responseText);
        }
    });
};

$(document).ready(function() {
    $('.main-menu li.logout').on('click', user.logout);
})