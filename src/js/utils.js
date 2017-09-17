var utils = {
    transformFormArrayToObject: function(form) {
        var formArray = form.serializeArray(),
        formObject = {};
  
        for (var i = 0; i < formArray.length; i++) {
            formObject[formArray[i]['name']] = formArray[i]['value'];
        }

        return formObject;
    }
};