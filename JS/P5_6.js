function loginValidate() {
    var email = document.getElementById("email");
    var password = document.getElementById("password");

    if (email.value.search(/\w+[@]\w+[.]\w+$/i) == -1) {
        alert("Please enter a valid email address.");
    } else if (password.value.search(/\w+/) == -1) {
        alert("Please enter your password.");
    } else {
        alert("Login is valid! Welcome back.");
    }
}