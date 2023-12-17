$(document).ready(function () {

    // global variables
    var viewSelected = JSON.parse(localStorage.getItem('optionSelected'));

    // Hide user and password view
    $('#getUser').addClass('d-none');
    $('#changePassword').addClass('d-none');
    
    if (viewSelected == 'User') {
        $('#getUser').removeClass('d-none');
        $('#titleCredentials').text('Retrieve Your User');
        $('#retrieveHelp').text('Remember, you can retrieve your user, fill with your number id.');
    } else {
        $('#changePassword').removeClass('d-none');
        $('#titleCredentials').text('Retrieve Your Password');
        $('#passInp').text('Give us your email!!');
    }
    
    /* Retrieve Credentials View upload */
    $('#retrieveC').text(viewSelected);
    
});

// Close modal
$('#closeButton').on('click', function() {
   $('#retrieveUserModal').modal('hidden');
});


$('#recoverPassword').on('blur', function() {
    
    let email = document.getElementById('recoverPassword').value;
    if (email =! '') {
        $('#sendEmail').removeAttr('disabled');
    } else {
        $('#sendEmail').attr('disabled', 'disabled');
    }

})


$('#returnBack').on('click', function() {
    window.history.go(-1);
});