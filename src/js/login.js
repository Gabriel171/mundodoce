var login = {};

login.$createUserForm = $('#createUserForm');
login.$loginForm = $('#loginForm');
login.$loginError = $('#loginForm .error-display');

login.init = function() {
  $('.toggle').on('click', function() {
    $('.container').stop().addClass('active');
  });
  
  $('.close').on('click', function() {
    $('.container').stop().removeClass('active');
  });
}

login.createUser = function(e) {
  e.preventDefault();
  e.stopPropagation();

  var formObject = {};

  formObject = utils.transformFormArrayToObject(login.$createUserForm);

  $('.createUserForm__submit__text').text('Cadastrando...');

  $.ajax({
    url: 'php/login/createUser.php',
    dataType: 'json',
    data: {user: JSON.stringify(formObject)},
    type: 'post',
    success: function() {
      $('.createUserForm__submit__text').text('Cadastrar');
      window.location.href = 'index';
    },
    error: function(error) {
      console.error(error.responseText);
      $('.createUserForm__submit__text').text('Cadastrar');
    }
  });
}

login.authenticateUser = function(e) {
  e.preventDefault();
  e.stopPropagation();

  var formObject = {};
  
  formObject = utils.transformFormArrayToObject(login.$loginForm);

  $.ajax({
    url: 'php/login/authenticateUser.php',
    dataType: 'json',
    data: {user: JSON.stringify(formObject)},
    type: 'post',
    success: function() {
      window.location = 'index';
    },
    error: function(error) {
      console.error(error.responseText);
      login.$loginError.removeClass('display-none');
    }
  });
}

login.init();

$(document)
.on('submit', '#createUserForm', login.createUser)
.on('submit', '#loginForm', login.authenticateUser)