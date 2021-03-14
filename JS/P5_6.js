function validate(formId) {
    var form = document.getElementById(formId);
    var inputs = form.getElementsByTagName("input"); 
    var toValidate = inputs.length;

    for (i = 0; i < inputs.length; i++) {
        inputs[i].style.boxShadow = "";
        if (inputs[i].id == "email") {
            var emailInvalid = document.getElementById("emailInvalid");

            emailInvalid.innerHTML = "";

            if (inputs[i].value.search(/\w+[@]\w+[.]\w+$/i) == -1) {
                inputs[i].style.boxShadow = "0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px red";
                emailInvalid.innerHTML = "Please enter a valid email address.";
                break;
            }
            else {
                toValidate--;
            }
        }
        else if (inputs[i].id == "postalCode") {
            var postalCodeInvalid = document.getElementById("postalCodeInvalid");

            postalCodeInvalid.innerHTML = "";

            if (inputs[i].value.search(/[A-Za-z]\d[A-Za-z]\s?\d[A-Za-z]\d$/i) == -1) {
                inputs[i].style.boxShadow = "0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px red";
                postalCodeInvalid.innerHTML = "Please enter a valid Postal Code in the form A1B 2C3 or A1B2C3.";
                break;
            }
            else {
                toValidate--;
            }
        }
        else if (inputs[i].id == "fname") {
            var fnameInvalid = document.getElementById("fnameInvalid");
            var lnameInvalid = document.getElementById("lnameInvalid");

            fnameInvalid.innerHTML = "";
            lnameInvalid.innerHTML = "";

            if (inputs[i].value.search(/[a-z]+$/i) == -1) {
                inputs[i].style.boxShadow = "0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px red";
                fnameInvalid.innerHTML = "Please enter a valid first name.";

                // If screen is larger than medium breakpoint, make two lines under other name field
                if (screen.width >= 768) {
                    lnameInvalid.innerHTML = "<br /><br />";
                }
                break;
            }
            else {
                toValidate--;
            }
        }
        else if (inputs[i].id == "lname") {
            var lnameInvalid = document.getElementById("lnameInvalid");
            var fnameInvalid = document.getElementById("fnameInvalid");

            lnameInvalid.innerHTML = "";
            fnameInvalid.innerHTML = "";

            if (inputs[i].value.search(/[a-z]+$/i) == -1) {
                inputs[i].style.boxShadow = "0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px red";
                lnameInvalid.innerHTML = "Please enter a valid last name.";

                // If screen is larger than medium breakpoint, make two lines under other name field
                if (screen.width >= 768) {
                    fnameInvalid.innerHTML = "<br /><br />";
                }
                break;
            }
            else {
                toValidate--;
            }
        }
        else if (inputs[i].id == "password") {
            var passwordInvalid = document.getElementById("passwordInvalid");

            passwordInvalid.innerHTML = "";

            if (inputs[i].value.search(/\w+/) == -1) {
                inputs[i].style.boxShadow = "0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px red";
                passwordInvalid.innerHTML = "Please enter your password.";
                break;
            }
            else {
                toValidate--;
            }
        }
        else if (inputs[i].id == "termsCheck") {
            var termsCheckInvalid = document.getElementById("termsCheckInvalid");

            termsCheckInvalid.innerHTML = "";

            if (!inputs[i].checked) {
                termsCheckInvalid.innerHTML = "Please agree to our terms and conditions to sign up.";
                break;
            }
            else {
                toValidate--;
            }
        }
    }
    if (toValidate == 0) {
        form.submit();
    }
}

function passwordValidate() {
    var form = document.getElementById("forgotForm");

    var password = document.getElementById("password");
    var repeatPassword = document.getElementById("repeatPassword");

    var passwordInvalid = document.getElementById("passwordInvalid");
    var repeatPasswordInvalid = document.getElementById("repeatPasswordInvalid");

    passwordInvalid.innerHTML = "";
    repeatPasswordInvalid.innerHTML = "";

    password.style.boxShadow = "";
    repeatPassword.style.boxShadow = "";

    if (password.value.search(/\w+/) == -1) {
        password.style.boxShadow = "0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px red";
        passwordInvalid.innerHTML = "Please enter your password.";
    }
    else if (repeatPassword.value.search(password.value) == -1) {
        repeatPassword.style.boxShadow = "0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px red";
        repeatPasswordInvalid.innerHTML = "Please make sure both passwords match.";
    }
    else {
        form.submit();
    }
}