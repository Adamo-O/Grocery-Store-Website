
function validateForm(formId) {

    var form = document.getElementById("theform");

    var input = form.getElementsByTagName("input");

    var numOfInputs = input.length;


    for (i = 0; i < input.length; i++) {
        if (input[i].id == "title") {
            var pTitle = document.getElementById("title").value;
            var tInvalid = document.getElementById("tInvalid");
            tInvalid.innerHTML = "";

            if (input[i].value.search(/[a-zA-Z]+$/i) == -1) {

                tInvalid.innerHTML = "Please enter a valid Product Name";
                tInvalid.style.color = "red";
                break;
            }
            else {
                input[i].style = "none";
                numOfInputs--;
               
            }
            
        }
        else if (input[i].id == "des") {
            var desInvalid = document.getElementById("desInvalid");

            if (input[i].value.search(/[a-zA-Z]+/g) == -1) {

                desInvalid.innerHTML = "Please enter a valid Product Description";
                desInvalid.style.color = "red";


            } else {
                desInvalid.innerHTML = " ";
                numOfInputs--;
            }
        } else if (input[i].id == "price") {
            var desInvalid = document.getElementById("pInvalid");

            if (input[i].value.search(/^\d+\.\d/) == -1) {

                pInvalid.innerHTML = "Please enter a valid Price in decimal format";
                pInvalid.style.color = "red";


            } else {
                pInvalid.innerHTML = " ";
                numOfInputs--;
            }


        } else if (input[i].id == "stock") {
            var sInvalid = document.getElementById("sInvalid");

            if (input[i].value.search(/^\d/) == -1) {

                sInvalid.innerHTML = "Please enter the units available. (Enter 0 for out of Stock products)";
                sInvalid.style.color = "red";


            } else {
                sInvalid.innerHTML = " ";
                numOfInputs--;
            }
        }
        else if (input[i].id == "date") {
            var dInvalid = document.getElementById("dInvalid");

            if (input[i].value == "") {

                dInvalid.innerHTML = "Please enter a valid Expiry Date";
                dInvalid.style.color = "red";


            } else {
                dInvalid.innerHTML = " ";
                numOfInputs--;
            }
        }
        else if (input[i].id == "fruits-and-vegetables") {
            var catInvalid = document.getElementById("catInvalid");
            if (radioCheck()) {

                numOfInputs = numOfInputs - 6;
                catInvalid.innerHTML = " ";
            } else {

                catInvalid.innerHTML = "Please select a Catogery";
                catInvalid.style.color = "red";
            }


        }
        else if (input[i].id == "upload") {
            input[i].innerHTML = "";
            var imgInvalid = document.getElementById("imgInvalid");
            var filePath = upload.value;

            var allowedExt = /(\.jpg|\.jpeg|\.png|\.gif|\.jfif)$/i;
            if (!allowedExt.exec(filePath)) {
                imgInvalid.innerHTML = "Please upload a valid Image File";
                imgInvalid.style.color = "red";
                upload.value = "";

            } else {
                imgInvalid.innerHTML = " ";
                numOfInputs--;
            }
        }



    }
    

    if (numOfInputs == 0) {
        alert("Product successfully Added")
        form.submit();

    }
}
function radioCheck() {
    if (document.getElementById("fruits-and-vegetables").checked || document.getElementById("meat").checked || document.getElementById("bakery").checked ||
        document.getElementById("fishandseafood").checked || document.getElementById("dairyproducts").checked || document.getElementById("snacks").checked) {
        return true;
    }
    else {
        return false;


    }
}










