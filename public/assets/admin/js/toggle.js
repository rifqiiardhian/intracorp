// Copyright 2020
// Author          : Muhammad Rifqi Ardhian
// Project Name    : Intra Corp Website
// Description     : Company Profile Website
// All Rights Reserved

// Toggle Password
$(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));

    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

// Password Confirmation
$('#newpassword, #confirmpassword').on('keyup', function () {
    if ($('#newpassword').val() == $('#confirmpassword').val()) {
        $('.message').html('Confirmation Success !').css('color', 'green');
    } else if($('#newpassword').val() == '' || $('#confirmpassword').val() == ''){
        $('.message').html('Enter the confirmation').css('color', 'grey');
    } else {
        $('.message').html('Password doesnt match').css('color', 'red');
    }
});

// Vaidate Old Password
$('#oldpassword').on('keyup', function() {
    var oldpass = md5($('#oldpassword').val());
    var hash = $('#hash').val();

    if(oldpass != hash) {
        $('.error-message').html('Your old password is wrong !').css('color', 'red');
    } else {
        $('.error-message').hide();
    }
});
