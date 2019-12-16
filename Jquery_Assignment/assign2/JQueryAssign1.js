$(document).ready(function() {
    $('#emailcheck').hide();
    $('#passcheck').hide();
    $('#conpasscheck').hide();

    var user_err = true;
    var pass_err = true;
    var conpass_err = true;
    var checkbox_err = true;
    // email validation
    $('#email').keyup(function() {
        email_check();
    });

    function email_check() {
        var email = $("#email").val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (email.length == '') {
            $('#emailcheck').show();
            $('#emailcheck').html("**Please Fill the Email");
            $('#emailcheck').focus();
            $('#emailcheck').css("color", "red");
            user_err = false;
            return false;
        } else {
            $('#emailcheck').hide();
        }
        if (!filter.test(email)) {
            $('#emailcheck').show();
            $('#emailcheck').html("**Please check the email");
            $('#emailcheck').focus();
            $('#emailcheck').css("color", "red");
            user_err = false;
            return false;
        } else {
            $('#emailcheck').hide();
        }
    }
    //password validation
    $('#password').keyup(function() {
        pass_check();
    });

    function pass_check() {
        var password = $("#password").val();
        if (password.length == '') {
            $('#passcheck').show();
            $('#passcheck').html("**Please Fill the Password");
            $('#passcheck').focus();
            $('#passcheck').css("color", "red");
            pass_err = false;
            return false;
        } else {
            $('#passcheck').hide();
        }

        if ((password.length < 5) || (password.length > 15)) {
            $('#passcheck').show();
            $('#passcheck').html("**Password length must be between 5-15 digits");
            $('#passcheck').focus();
            $('#passcheck').css("color", "red");
            pass_err = false;
            return false;
        } else {
            $('#passcheck').hide();
        }
    }
    //confirm password validation
    $('#cfmpassword').keyup(function() {
        cfmpass_check();
    });

    function cfmpass_check() {
        var cfmpassword = $("#cfmpassword").val();
        var password = $("#password").val();
        if (cfmpassword != password) {
            $('#conpasscheck').show();
            $('#conpasscheck').html("**password not maching");
            $('#conpasscheck').focus();
            $('#conpasscheck').css("color", "red");
            conpass_err = false;
            return false;
        } else {
            $('#conpasscheck').hide();
        }
    }
    // checkbox validation
    $('input[type="checkbox"]').click(function() {
        terms_check();
    });

    function terms_check() {
        if ($('#checkbox').prop("checked") == false) {
            $('#check_box').show();
            $('#check_box').html("**please accept T&C");
            $('#check_box').focus();
            $('#check_box').css("color", "red");
            checkbox_err = false;
            return false;
        } else {
            $('#check_box').hide();

        }
    }
    // final validation to check whether all feild are filled or not
    $("#myform").submit(function(event) {
        var email = $("#email").val();
        var password = $("#password").val();

        user_err = true;
        pass_err = true;
        conpass_err = true;
        checkbox_err = true;

        email_check();
        pass_check();
        cfmpass_check();
        terms_check();

        if ((user_err == true) && (pass_err == true) && (conpass_err == true) && (checkbox_err == true)) {

            $.ajax({
                type: "POST",
                url: "JQuery2.php",
                data: "email=" + email + "&password=" + password,
                success: function(data) {
                    alert(data);
                }
            });

        } else {
            return false;
        }
        event.preventDefault();
    });
});