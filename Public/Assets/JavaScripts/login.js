// When DOM upload, write texts
$('#titleLogin').append("Login Library Always");
$('.login100-form-title').append(mainWords[0]);
$('#txt1').append(mainWords[1]);
$('.txt2').append(mainWords[2]);
$('.login100-form-btn').append(mainWords[3]);
$('.p-b-9').append(mainWords[4]);
$('#txt3').append(mainWords[5]);
$('#buttonSave').attr('disabled', 'disabled');


(function ($) {
    "use strict";

    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate');
    }

})(jQuery);


/**
 * [anonime when retrieve user or password is clicked redirect to view]
 * @return {[string]}      [Retrieve view]
 */
$('.txt2').on('click', function() {
    $('#generalModalLabel').append('Place To Go');    
    $('#modalBody').append('Where do you go to?');
    $(`#generalModal`).modal('show');
    $('#buttonSave').removeAttr('disabled');
});
$(`#closeButton`).on('click', function() {
    $(`#generalModal`).modal('hide');
});


$('#buttonSave').on('click', function() {
    
    if (document.getElementById('userCredential').checked) {
        localStorage.setItem('optionSelected', JSON.stringify('User'));
        if (JSON.parse(localStorage.getItem('optionSelected')) != 'User') {
            localStorage.removeItem('optionSelected');
        }
    } else {
        localStorage.setItem('optionSelected', JSON.stringify('Password'));
        if (JSON.parse(localStorage.getItem('optionSelected')) != 'Password') {
            localStorage.removeItem('optionSelected');
        }
    }
    redirectTo('./Views/Login/RetrieveCredentials.php');
    
});


/**
 * [anonime when signup is clicked redirect to view]
 * @return {[string]}      [Signup view]
 */
$('#txt3').on('click', function() {
    redirectTo('./Views/Login/SignUpUser.php');
});


