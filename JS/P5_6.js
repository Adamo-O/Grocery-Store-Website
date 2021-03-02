function loginValidate() {
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var emailInvalid = document.getElementById("emailInvalid");
    var passwordInvalid = document.getElementById("passwordInvalid");

    // Clear previous invalid errors
    emailInvalid.innerHTML = "";
    passwordInvalid.innerHTML = "";

    if (email.value.search(/\w+[@]\w+[.]\w+$/i) == -1) {
        emailInvalid.innerHTML = "Please enter a valid email address.";
    } else if (password.value.search(/\w+/) == -1) {
        passwordInvalid.innerHTML = "Please enter your password.";
    } else {
        alert("Login is valid! Welcome back.");
    }
}

function validate1() {
    var toValidate = arguments.length;

    for (i = 0; i < arguments.length; i++) {
        if (arguments[i] == "email") {
            var email = document.getElementById("email");
            var emailInvalid = document.getElementById("emailInvalid");

            emailInvalid.innerHTML = "";

            if (email.value.search(/\w+[@]\w+[.]\w+$/i) == -1) {
                emailInvalid.innerHTML = "Please enter a valid email address.";
                break;
            }
            else {
                toValidate--;
            }
        }
        else if (arguments[i] == "postalCode") {
            var postalCode = document.getElementById("postalCode");
            var postalCodeInvalid = document.getElementById("postalCodeInvalid");

            postalCodeInvalid.innerHTML = "";

            if (postalCode.value.search(/[A-Za-z]\d[A-Za-z]\s?\d[A-Za-z]\d$/i) == -1) {
                postalCodeInvalid.innerHTML = "Please enter a valid Postal Code in the form A1B 2C3 or A1B2C3.";
                break;
            }
            else {
                toValidate--;
            }
        }
        else if (arguments[i] == "fname") {
            var fname = document.getElementById("fname");
            var fnameInvalid = document.getElementById("fnameInvalid");

            fnameInvalid.innerHTML = "";

            if (fname.value.search(/[a-z]+$/i) == -1) {
                fnameInvalid.innerHTML = "Please enter a valid first name.";
                break;
            }
            else {
                toValidate--;
            }
        }
        else if (arguments[i] == "lname") {
            var lname = document.getElementById("lname");
            var lnameInvalid = document.getElementById("lname");

            lnameInvalid.innerHTML = "";

            if (lname.value.search(/[a-z]+$/i) == -1) {
                lnameInvalid.innerHTML = "Please enter a valid last name.";
                break;
            }
            else {
                toValidate--;
            }
        }
        else if (arguments[i] == "password") {
            var password = document.getElementById("password");
            var passwordInvalid = document.getElementById("passwordInvalid");

            passwordInvalid.innerHTML = "";

            if (password.value.search(/\w+/) == -1) {
                passwordInvalid.innerHTML = "Please enter your password.";
                break;
            }
            else {
                toValidate--;
            }
        }
    }
    if (toValidate == 0) {
        document.getElementsByTagName("form")[0].submit();
    }
}

function validate(formId) {
    var form = document.getElementById(formId);
    var inputs = form.getElementsByTagName("input"); 
    var toValidate = inputs.length;

    for (i = 0; i < inputs.length; i++) {
        if (inputs[i].id == "email") {
            var emailInvalid = document.getElementById("emailInvalid");

            emailInvalid.innerHTML = "";

            if (inputs[i].value.search(/\w+[@]\w+[.]\w+$/i) == -1) {
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