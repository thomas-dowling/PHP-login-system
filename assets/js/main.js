$(document)
.on("submit", "form.js-register", function(event) {
    
    event.preventDefault();
    
    var _form = $(this);
    var _error = $('.js-error', _form);
    
    var data = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val()
        
    };
    
    if(data.email.length > 6) {
        _error.text("Please enter an email address over 6 characters").show();
        return false;
    } else if (data.password.length < 11) {
        _error.text("Please enter a password that is atleast 11 charcters").show();
        return false;
    }
    
    _error.hide();
    console.log(data);
    
    return false;
})