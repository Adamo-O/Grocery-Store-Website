// Delete method, displays the x buttons, goes back to normal afterwards, the specific delete methods are at the end of this document.
// $('#delUser').click(function() {

//     if (document.getElementById('delUser').innerHTML == 'Delete User') {
//         document.getElementById('delUser').innerHTML = 'Back';

//         if (document.getElementById('pravina') != null) {
//             document.getElementById('pravina').className = 'list-group-item disabled'; 
//         }
//         if (document.getElementById('estelle') != null) {
//             document.getElementById('estelle').className = 'list-group-item disabled';
//         }
//         if (document.getElementById('antonius') != null) {
//             document.getElementById('antonius').className = 'list-group-item disabled';
//         }
//         if (document.getElementById('alexandre') != null) {
//             document.getElementById('alexandre').className = 'list-group-item disabled';
//         }
//         if (document.getElementById('katrina') != null) {
//             document.getElementById('katrina').className = 'list-group-item disabled';
//         }
//         if (document.getElementById('nathaniel') != null) {
//             document.getElementById('nathaniel').className = 'list-group-item disabled';
//         }
//         if (document.getElementById('madelaine') != null) {
//             document.getElementById('madelaine').className = 'list-group-item disabled';
//         }
//         if (document.getElementById('yazmin') != null) {
//             document.getElementById('yazmin').className = 'list-group-item disabled';
//         }
//         if (document.getElementById('edward') != null) {
//             document.getElementById('edward').className = 'list-group-item disabled';
//         }
        
//         document.getElementById('pravinaclose').hidden = false;
//         document.getElementById('estelleclose').hidden = false;
//         document.getElementById('antoniusclose').hidden = false;
//         document.getElementById('alexandreclose').hidden = false;
//         document.getElementById('katrinaclose').hidden = false;
//         document.getElementById('nathanielclose').hidden = false;
//         document.getElementById('madelaineclose').hidden = false;
//         document.getElementById('yazminclose').hidden = false;
//         document.getElementById('edwardclose').hidden = false;
//     }
//     else {
//         document.getElementById('delUser').innerHTML = 'Delete User';

//         if (document.getElementById('pravina') != null) {
//             document.getElementById('pravina').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
//         }
//         if (document.getElementById('estelle') != null) {
//             document.getElementById('estelle').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
//         }
//         if (document.getElementById('antonius') != null) {
//             document.getElementById('antonius').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
//         }
//         if (document.getElementById('alexandre') != null) {
//             document.getElementById('alexandre').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
//         }
//         if (document.getElementById('katrina') != null) {
//             document.getElementById('katrina').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
//         }
//         if (document.getElementById('nathaniel') != null) {
//             document.getElementById('nathaniel').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
//         }
//         if (document.getElementById('madelaine') != null) {
//             document.getElementById('madelaine').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
//         }
//         if (document.getElementById('yazmin') != null) {
//             document.getElementById('yazmin').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
//         }
//         if (document.getElementById('edward') != null) {
//             document.getElementById('edward').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
//         }

//         document.getElementById('pravinaclose').hidden = true;
//         document.getElementById('estelleclose').hidden = true;
//         document.getElementById('antoniusclose').hidden = true;
//         document.getElementById('alexandreclose').hidden = true;
//         document.getElementById('katrinaclose').hidden = true;
//         document.getElementById('nathanielclose').hidden = true;
//         document.getElementById('madelaineclose').hidden = true;
//         document.getElementById('yazminclose').hidden = true;
//         document.getElementById('edwardclose').hidden = true;
//     }
//     })

// Edit methods for all users

function editUserAlex() {
    
    if (document.getElementById('alexandrefname').readOnly == true) {
        document.getElementById('alexandrefname').readOnly= false;
        document.getElementById('alexandrelname').readOnly = false;
        document.getElementById('alexandreemail').readOnly= false;
        document.getElementById('alexandrepostalcode').readOnly = false;
        document.getElementById('alexandrepassword').readOnly= false;

        document.getElementById('editbtnalex').innerHTML = 'Save Changes';
    }
    else {
        var fname = document.getElementById('alexandrefname').value;
        var lname = document.getElementById('alexandrelname').value;
        var email = document.getElementById('alexandreemail').value;
        var postalCode = document.getElementById('alexandrepostalcode').value;

        var regex=/^[a-zA-Z]+$/;
        var emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var postCodeRegex = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;
        var isValid = false;
        if (!fname.match(regex)) {
            document.getElementById('alexandrefnameInv').style.color ='red';    
            document.getElementById('alexandrefnameInv').innerHTML = 'The name must have letters';

        }
        if (!lname.match(regex)) {
            document.getElementById('alexandrelnameInv').style.color='red';
            document.getElementById('alexandrelnameInv').innerHTML='The name must have letters';
        }
        if (!email.match(emailRegex)) {
            document.getElementById('alexandreemailInv').style.color='red';
            document.getElementById('alexandreemailInv').innerHTML='This email is invalid.';
        }
        if (!postalCode.match(postCodeRegex)) {
            document.getElementById('alexandrepostcodeInv').style.color='red';
            document.getElementById('alexandrepostcodeInv').innerHTML='This postal code is invalid.';
        }
        if (fname.match(regex) && lname.match(regex) && email.match(emailRegex) && postalCode.match(postCodeRegex)) {
            document.getElementById('alexandrefnameInv').hidden=true;
            document.getElementById('alexandrelnameInv').hidden=true;
            document.getElementById('alexandreemailInv').hidden=true;
            document.getElementById('alexandrepostcodeInv').hidden=true;
            document.getElementById('alexandrefname').readOnly= true;
            document.getElementById('alexandrelname').readOnly = true;
            document.getElementById('alexandreemail').readOnly= true;
            document.getElementById('alexandrepostalcode').readOnly = true;
            document.getElementById('alexandrepassword').readOnly= true;
            document.getElementById('editbtnalex').innerHTML = 'Edit User';
            window.alert('Changes saved!');
        }
    }
}
function editUserAntonius(){
    if (document.getElementById('antoniusfname').readOnly == true) {
        document.getElementById('antoniusfname').readOnly= false;
        document.getElementById('antoniuslname').readOnly = false;
        document.getElementById('antoniusemail').readOnly= false;
        document.getElementById('antoniuspostalcode').readOnly = false;
        document.getElementById('antoniuspassword').readOnly= false;
    
        document.getElementById('editbtnantonius').innerHTML = 'Save Changes';
    }
    else {
        var fname = document.getElementById('antoniusfname').value;
        var lname = document.getElementById('antoniuslname').value;
        var email = document.getElementById('antoniusemail').value;
        var postalCode = document.getElementById('antoniuspostalcode').value;

        var regex=/^[a-zA-Z]+$/;
        var emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var postCodeRegex = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;
        var isValid = false;
        if (!fname.match(regex)) {
            document.getElementById('antoniusfnameInv').style.color ='red';    
            document.getElementById('antoniusfnameInv').innerHTML = 'The name must have letters';

        }
        if (!lname.match(regex)) {
            document.getElementById('antoniuslnameInv').style.color='red';
            document.getElementById('antoniuslnameInv').innerHTML='The name must have letters';
        }
        if (!email.match(emailRegex)) {
            document.getElementById('antoniusemailInv').style.color='red';
            document.getElementById('antoniusemailInv').innerHTML='This email is invalid.';
        }
        if (!postalCode.match(postCodeRegex)) {
            document.getElementById('antoniuspostalcodeInv').style.color='red';
            document.getElementById('antoniuspostalcodeInv').innerHTML='This postal code is invalid.';
        }
        if (fname.match(regex) && lname.match(regex) && email.match(emailRegex) && postalCode.match(postCodeRegex)) {
            document.getElementById('antoniusfnameInv').hidden=true;
            document.getElementById('antoniuslnameInv').hidden=true;
            document.getElementById('antoniusemailInv').hidden=true;
            document.getElementById('antoniuspostalcodeInv').hidden=true;
            document.getElementById('antoniusfname').readOnly= true;
            document.getElementById('antoniuslname').readOnly = true;
            document.getElementById('antoniusemail').readOnly= true;
            document.getElementById('antoniuspostalcode').readOnly = true;
            document.getElementById('antoniuspassword').readOnly= true;
            document.getElementById('editbtnantonius').innerHTML = 'Edit User';
            window.alert('Changes saved!');
        }
    }
}
function editUserEdward() {
    if (document.getElementById('edwardfname').readOnly == true) {
        document.getElementById('edwardfname').readOnly= false;
        document.getElementById('edwardlname').readOnly = false;
        document.getElementById('edwardemail').readOnly= false;
        document.getElementById('edwardpostalcode').readOnly = false;
        document.getElementById('edwardpassword').readOnly= false;
    
        document.getElementById('editbtnedward').innerHTML = 'Save Changes';
    }
    else {
        var fname = document.getElementById('edwardfname').value;
        var lname = document.getElementById('edwardlname').value;
        var email = document.getElementById('edwardemail').value;
        var postalCode = document.getElementById('edwardpostalcode').value;

        var regex=/^[a-zA-Z]+$/;
        var emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var postCodeRegex = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;
        var isValid = false;
        if (!fname.match(regex)) {
            document.getElementById('edwardfnameInv').style.color ='red';    
            document.getElementById('edwardfnameInv').innerHTML = 'The name must have letters';

        }
        if (!lname.match(regex)) {
            document.getElementById('edwardlnameInv').style.color='red';
            document.getElementById('edwardlnameInv').innerHTML='The name must have letters';
        }
        if (!email.match(emailRegex)) {
            document.getElementById('edwardemailInv').style.color='red';
            document.getElementById('edwardemailInv').innerHTML='This email is invalid.';
        }
        if (!postalCode.match(postCodeRegex)) {
            document.getElementById('edwardpostalcodeInv').style.color='red';
            document.getElementById('edwardpostalcodeInv').innerHTML='This postal code is invalid.';
        }
        if (fname.match(regex) && lname.match(regex) && email.match(emailRegex) && postalCode.match(postCodeRegex)) {
            document.getElementById('edwardfnameInv').hidden=true;
            document.getElementById('edwardlnameInv').hidden=true;
            document.getElementById('edwardemailInv').hidden=true;
            document.getElementById('edwardpostalcodeInv').hidden=true;
            document.getElementById('edwardfname').readOnly= true;
            document.getElementById('edwardlname').readOnly = true;
            document.getElementById('edwardemail').readOnly= true;
            document.getElementById('edwardpostalcode').readOnly = true;
            document.getElementById('edwardpassword').readOnly= true;
            document.getElementById('editbtnedward').innerHTML = 'Edit User';
            window.alert('Changes saved!');
        }
    }
}
function editUserEstelle() {
    if (document.getElementById('estellefname').readOnly == true) {
        document.getElementById('estellefname').readOnly= false;
        document.getElementById('estellelname').readOnly = false;
        document.getElementById('estelleemail').readOnly= false;
        document.getElementById('estellepostalcode').readOnly = false;
        document.getElementById('estellepassword').readOnly= false;
    
        document.getElementById('editbtnestelle').innerHTML = 'Save Changes';
    }
    else {
        var fname = document.getElementById('estellefname').value;
        var lname = document.getElementById('estellelname').value;
        var email = document.getElementById('estelleemail').value;
        var postalCode = document.getElementById('estellepostalcode').value;

        var regex=/^[a-zA-Z]+$/;
        var emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var postCodeRegex = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;
        var isValid = false;
        if (!fname.match(regex)) {
            document.getElementById('estellefnameInv').style.color ='red';    
            document.getElementById('estellefnameInv').innerHTML = 'The name must contain only letters';

        }
        if (!lname.match(regex)) {
            document.getElementById('estellelnameInv').style.color='red';
            document.getElementById('estellelnameInv').innerHTML='The name must contain only letters';
        }
        if (!email.match(emailRegex)) {
            document.getElementById('estelleemailInv').style.color='red';
            document.getElementById('estelleemailInv').innerHTML='This email is invalid.';
        }
        if (!postalCode.match(postCodeRegex)) {
            document.getElementById('estellepostalcodeInv').style.color='red';
            document.getElementById('estellepostalcodeInv').innerHTML='This postal code is invalid.';
        }
        if (fname.match(regex) && lname.match(regex) && email.match(emailRegex) && postalCode.match(postCodeRegex)) {
            document.getElementById('estellefnameInv').hidden=true;
            document.getElementById('estellelnameInv').hidden=true;
            document.getElementById('estelleemailInv').hidden=true;
            document.getElementById('estellepostalcodeInv').hidden=true;
            document.getElementById('estellefname').readOnly= true;
            document.getElementById('estellelname').readOnly = true;
            document.getElementById('estelleemail').readOnly= true;
            document.getElementById('estellepostalcode').readOnly = true;
            document.getElementById('estellepassword').readOnly= true;
            document.getElementById('editbtnestelle').innerHTML = 'Edit User';
            window.alert('Changes saved!');
        }
    }
}
function editUserKatrina() {
    if (document.getElementById('katrinafname').readOnly == true) {
        document.getElementById('katrinafname').readOnly= false;
        document.getElementById('katrinalname').readOnly = false;
        document.getElementById('katrinaemail').readOnly= false;
        document.getElementById('katrinapostalcode').readOnly = false;
        document.getElementById('katrinapassword').readOnly= false;
    
        document.getElementById('editbtnkatrina').innerHTML = 'Save Changes';
    }
    else {
        var fname = document.getElementById('katrinafname').value;
        var lname = document.getElementById('katrinalname').value;
        var email = document.getElementById('katrinaemail').value;
        var postalCode = document.getElementById('katrinapostalcode').value;

        var regex=/^[a-zA-Z]+$/;
        var emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var postCodeRegex = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;
        var isValid = false;
        if (!fname.match(regex)) {
            document.getElementById('katrinafnameInv').style.color ='red';    
            document.getElementById('katrinafnameInv').innerHTML = 'The name must contain only letters';

        }
        if (!lname.match(regex)) {
            document.getElementById('katrinalnameInv').style.color='red';
            document.getElementById('katrinalnameInv').innerHTML='The name must contain only letters';
        }
        if (!email.match(emailRegex)) {
            document.getElementById('katrinaemailInv').style.color='red';
            document.getElementById('katrinaemailInv').innerHTML='This email is invalid.';
        }
        if (!postalCode.match(postCodeRegex)) {
            document.getElementById('katrinapostalcodeInv').style.color='red';
            document.getElementById('katrinapostalcodeInv').innerHTML='This postal code is invalid.';
        }
        if (fname.match(regex) && lname.match(regex) && email.match(emailRegex) && postalCode.match(postCodeRegex)) {
            document.getElementById('katrinafnameInv').hidden=true;
            document.getElementById('katrinalnameInv').hidden=true;
            document.getElementById('katrinaemailInv').hidden=true;
            document.getElementById('katrinapostalcodeInv').hidden=true;
            document.getElementById('katrinafname').readOnly= true;
            document.getElementById('katrinalname').readOnly = true;
            document.getElementById('katrinaemail').readOnly= true;
            document.getElementById('katrinapostalcode').readOnly = true;
            document.getElementById('katrinapassword').readOnly= true;
            document.getElementById('editbtnkatrina').innerHTML = 'Edit User';
            window.alert('Changes saved!');
        }
    }
}
function editUserMadelaine() {
    if (document.getElementById('madelainefname').readOnly == true) {
        document.getElementById('madelainefname').readOnly= false;
        document.getElementById('madelainelname').readOnly = false;
        document.getElementById('madelaineemail').readOnly= false;
        document.getElementById('madelainepostalcode').readOnly = false;
        document.getElementById('madelainepassword').readOnly= false;
    
        document.getElementById('editbtnmadelaine').innerHTML = 'Save Changes';
    }
    else {
        var fname = document.getElementById('madelainefname').value;
        var lname = document.getElementById('madelainelname').value;
        var email = document.getElementById('madelaineemail').value;
        var postalCode = document.getElementById('madelainepostalcode').value;

        var regex=/^[a-zA-Z]+$/;
        var emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var postCodeRegex = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;
        var isValid = false;
        if (!fname.match(regex)) {
            document.getElementById('madelainefnameInv').style.color ='red';    
            document.getElementById('madelainefnameInv').innerHTML = 'The name must contain only letters';

        }
        if (!lname.match(regex)) {
            document.getElementById('madelainelnameInv').style.color='red';
            document.getElementById('madelainelnameInv').innerHTML='The name must contain only letters';
        }
        if (!email.match(emailRegex)) {
            document.getElementById('madelaineemailInv').style.color='red';
            document.getElementById('madelaineemailInv').innerHTML='This email is invalid.';
        }
        if (!postalCode.match(postCodeRegex)) {
            document.getElementById('madelainepostalcodeInv').style.color='red';
            document.getElementById('madelainepostalcodeInv').innerHTML='This postal code is invalid.';
        }
        if (fname.match(regex) && lname.match(regex) && email.match(emailRegex) && postalCode.match(postCodeRegex)) {
            document.getElementById('madelainefnameInv').hidden=true;
            document.getElementById('madelainelnameInv').hidden=true;
            document.getElementById('madelaineemailInv').hidden=true;
            document.getElementById('madelainepostalcodeInv').hidden=true;
            document.getElementById('madelainefname').readOnly= true;
            document.getElementById('madelainelname').readOnly = true;
            document.getElementById('madelaineemail').readOnly= true;
            document.getElementById('madelainepostalcode').readOnly = true;
            document.getElementById('madelainepassword').readOnly= true;
            document.getElementById('editbtnmadelaine').innerHTML = 'Edit User';
            window.alert('Changes saved!');
        }
    }
}
function editUserNathaniel() {
    if (document.getElementById('nathanielfname').readOnly == true) {
        document.getElementById('nathanielfname').readOnly= false;
        document.getElementById('nathaniellname').readOnly = false;
        document.getElementById('nathanielemail').readOnly= false;
        document.getElementById('nathanielpostalcode').readOnly = false;
        document.getElementById('nathanielpassword').readOnly= false;
    
        document.getElementById('editbtnnathaniel').innerHTML = 'Save Changes';
    }
    else {
        var fname = document.getElementById('nathanielfname').value;
        var lname = document.getElementById('nathaniellname').value;
        var email = document.getElementById('nathanielemail').value;
        var postalCode = document.getElementById('nathanielpostalcode').value;

        var regex=/^[a-zA-Z]+$/;
        var emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var postCodeRegex = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;
        var isValid = false;
        if (!fname.match(regex)) {
            document.getElementById('nathanielfnameInv').style.color ='red';    
            document.getElementById('nathanielfnameInv').innerHTML = 'The name must contain only letters';

        }
        if (!lname.match(regex)) {
            document.getElementById('nathaniellnameInv').style.color='red';
            document.getElementById('nathaniellnameInv').innerHTML='The name must contain only letters';
        }
        if (!email.match(emailRegex)) {
            document.getElementById('nathanielemailInv').style.color='red';
            document.getElementById('nathanielemailInv').innerHTML='This email is invalid.';
        }
        if (!postalCode.match(postCodeRegex)) {
            document.getElementById('nathanielpostalcodeInv').style.color='red';
            document.getElementById('nathanielpostalcodeInv').innerHTML='This postal code is invalid.';
        }
        if (fname.match(regex) && lname.match(regex) && email.match(emailRegex) && postalCode.match(postCodeRegex)) {
            document.getElementById('nathanielfnameInv').hidden=true;
            document.getElementById('nathaniellnameInv').hidden=true;
            document.getElementById('nathanielemailInv').hidden=true;
            document.getElementById('nathanielpostalcodeInv').hidden=true;
            document.getElementById('nathanielfname').readOnly= true;
            document.getElementById('nathaniellname').readOnly = true;
            document.getElementById('nathanielemail').readOnly= true;
            document.getElementById('nathanielpostalcode').readOnly = true;
            document.getElementById('nathanielpassword').readOnly= true;
            document.getElementById('editbtnnathaniel').innerHTML = 'Edit User';
            window.alert('Changes saved!');
        }
    }
}
function editUser(formId) {
    var form = document.getElementById(formId);
    if (document.getElementById('fname').readOnly == true) {
        document.getElementById('fname').readOnly= false;
        document.getElementById('lname').readOnly = false;
        document.getElementById('email').readOnly= false;
        document.getElementById('postalcode').readOnly = false;
        document.getElementById('password').readOnly= false;
    
        document.getElementById('editbtn').innerHTML = 'Save Changes';
    }
    else {
        var fname = document.getElementById('fname').value;
        var lname = document.getElementById('lname').value;
        var email = document.getElementById('email').value;
        var postalCode = document.getElementById('postalcode').value;

        var regex=/^[a-zA-Z]+$/;
        var emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var postCodeRegex = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;
        var isValid = false;
        if (!fname.match(regex)) {
            document.getElementById('fnameInv').style.color ='red';    
            document.getElementById('fnameInv').innerHTML = 'The name must contain only letters';

        }
        if (!lname.match(regex)) {
            document.getElementById('lnameInv').style.color='red';
            document.getElementById('lnameInv').innerHTML='The name must contain only letters';
        }
        if (!email.match(emailRegex)) {
            document.getElementById('emailInv').style.color='red';
            document.getElementById('emailInv').innerHTML='This email is invalid.';
        }
        if (!postalCode.match(postCodeRegex)) {
            document.getElementById('postcodeInv').style.color='red';
            document.getElementById('postcodeInv').innerHTML='This postal code is invalid.';
        }
        if (fname.match(regex) && lname.match(regex) && email.match(emailRegex) && postalCode.match(postCodeRegex)) {
            document.getElementById('fnameInv').hidden=true;
            document.getElementById('lnameInv').hidden=true;
            document.getElementById('emailInv').hidden=true;
            document.getElementById('postcodeInv').hidden=true;
            // document.getElementById('fname').readOnly= true;
            // document.getElementById('lname').readOnly = true;
            // document.getElementById('email').readOnly= true;
            // document.getElementById('postalcode').readOnly = true;
            // document.getElementById('password').readOnly= true;
            document.getElementById('editbtn').innerHTML = 'Edit User';
            window.alert('Changes saved!');
            form.submit();
        }
    }
}
function editUserPravina() {
    if (document.getElementById('pravinafname').readOnly == true) {
        document.getElementById('pravinafname').readOnly= false;
        document.getElementById('pravinalname').readOnly = false;
        document.getElementById('pravinaemail').readOnly= false;
        document.getElementById('pravinapostalcode').readOnly = false;
        document.getElementById('pravinapassword').readOnly= false;
    
        document.getElementById('editbtnpravina').innerHTML = 'Save Changes';
    }
    else {
        var fname = document.getElementById('pravinafname').value;
        var lname = document.getElementById('pravinalname').value;
        var email = document.getElementById('pravinaemail').value;
        var postalCode = document.getElementById('pravinapostalcode').value;

        var regex=/^[a-zA-Z]+$/;
        var emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var postCodeRegex = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;
        var isValid = false;
        if (!fname.match(regex)) {
            document.getElementById('pravinafnameInv').style.color ='red';    
            document.getElementById('pravinafnameInv').innerHTML = 'The name must contain only letters';

        }
        if (!lname.match(regex)) {
            document.getElementById('pravinalnameInv').style.color='red';
            document.getElementById('pravinalnameInv').innerHTML='The name must contain only letters';
        }
        if (!email.match(emailRegex)) {
            document.getElementById('pravinaemailInv').style.color='red';
            document.getElementById('pravinaemailInv').innerHTML='This email is invalid.';
        }
        if (!postalCode.match(postCodeRegex)) {
            document.getElementById('pravinapostalcodeInv').style.color='red';
            document.getElementById('pravinapostalcodeInv').innerHTML='This postal code is invalid.';
        }
        if (fname.match(regex) && lname.match(regex) && email.match(emailRegex) && postalCode.match(postCodeRegex)) {
            document.getElementById('pravinafnameInv').hidden=true;
            document.getElementById('pravinalnameInv').hidden=true;
            document.getElementById('pravinaemailInv').hidden=true;
            document.getElementById('pravinapostalcodeInv').hidden=true;
            document.getElementById('pravinafname').readOnly= true;
            document.getElementById('pravinalname').readOnly = true;
            document.getElementById('pravinaemail').readOnly= true;
            document.getElementById('pravinapostalcode').readOnly = true;
            document.getElementById('pravinapassword').readOnly= true;
            document.getElementById('editbtnpravina').innerHTML = 'Edit User';
            window.alert('Changes saved!');
        }
    }
}
function editUserYaz() {
    if (document.getElementById('fnameyaz').readOnly == true) {
        document.getElementById('fnameyaz').readOnly= false;
        document.getElementById('lnameyaz').readOnly = false;
        document.getElementById('emailyaz').readOnly= false;
        document.getElementById('postalcodeyaz').readOnly = false;
        document.getElementById('passwordYaz').readOnly= false;
    
        document.getElementById('editbtnyaz').innerHTML = 'Save Changes';
    }
    else {
        var fname = document.getElementById('fnameyaz').value;
        var lname = document.getElementById('lnameyaz').value;
        var email = document.getElementById('emailyaz').value;
        var postalCode = document.getElementById('postalcodeyaz').value;

        var regex=/^[a-zA-Z]+$/;
        var emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var postCodeRegex = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;
        var isValid = false;
        if (!fname.match(regex)) {
            document.getElementById('fnameyazInv').style.color ='red';    
            document.getElementById('fnameyazInv').innerHTML = 'The name must have letters';

        }
        if (!lname.match(regex)) {
            document.getElementById('lnameyazInv').style.color='red';
            document.getElementById('lnameyazInv').innerHTML='The name must have letters';
        }
        if (!email.match(emailRegex)) {
            document.getElementById('emailyazInv').style.color='red';
            document.getElementById('emailyazInv').innerHTML='This email is invalid.';
        }
        if (!postalCode.match(postCodeRegex)) {
            document.getElementById('postcodeyazInv').style.color='red';
            document.getElementById('postcodeyazInv').innerHTML='This postal code is invalid.';
        }
        if (fname.match(regex) && lname.match(regex) && email.match(emailRegex) && postalCode.match(postCodeRegex)) {
            document.getElementById('fnameyazInv').hidden=true;
            document.getElementById('lnameyazInv').hidden=true;
            document.getElementById('emailyazInv').hidden=true;
            document.getElementById('postcodeyazInv').hidden=true;
            document.getElementById('fnameyaz').readOnly= true;
            document.getElementById('lnameyaz').readOnly = true;
            document.getElementById('emailyaz').readOnly= true;
            document.getElementById('postalcodeyaz').readOnly = true;
            document.getElementById('passwordYaz').readOnly= true;
            document.getElementById('editbtnyaz').innerHTML = 'Edit User';
            window.alert('Changes saved!');
        }
    }
}
// Add method

function addUser() {
    document.getElementById('addUserContainer').hidden = false;
}
function confirm(formId) {
    var form = document.getElementById(formId);
    var fname = document.forms['addUserForm']['addfname'].value;
    var fnameInv = document.getElementById('addfnameInvalid');
    var lname = document.forms['addUserForm']['addlname'].value;
    var lnameInv = document.getElementById('addlnameInvalid');
    var email = document.forms['addUserForm']['addemail'].value;
    var emailInv = document.getElementById('addemailInvalid');
    var postalCode = document.forms['addUserForm']['addpostalCode'].value;
    var postCodeInv = document.getElementById('addpostalCodeInvalid');
    var regex=/^[a-zA-Z]+$/;
    var emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var postCodeRegex = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;
    var isValid = false;
        if (!fname.match(regex)) {
            fnameInv.style.color = 'red';
            fnameInv.innerHTML = 'Name must have letters.';
        }
        else if (fname.match(regex)) {
            fnameInv.hidden = true;
        }
        if (!lname.match(regex)) {
            lnameInv.style.color = 'red';
            lnameInv.innerHTML = 'Name must have letters.';
        }
        else if (lname.match(regex)) {
            lnameInv.hidden = true;
        }
        if (!email.match(emailRegex)) {
            emailInv.style.color = 'red';
            emailInv.innerHTML= 'Invalid email';
        }
        else if (email.match(emailRegex)) {
            emailInv.hidden = true;
        }
        if (!postalCode.match(postCodeRegex)) {
            postCodeInv.style.color = 'red';
            postCodeInv.innerHTML = 'Invalid postal code';
        }
        else if (postalCode.match(postCodeRegex)) {
            postCodeInv.hidden = true;
        }
        if (!document.getElementById('addtermsCheck').checked) {
            window.alert('Please agree to our terms and conditions before proceeding.')
        }
        if (fname.match(regex) && lname.match(regex) && email.match(emailRegex) && postalCode.match(postCodeRegex) && document.getElementById('addtermsCheck').checked) {
            isValid = true;
        }
    
    if (isValid == true) {
        $('#addUserForm').submit();
        // $('#userList').append('<a id="name" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">'+fname+' ' + lname +'</a>');
        // document.getElementById('addUserContainer').hidden = true;
    }
}
// Delete methods for all users

function deletePravina() {
    var list = document.getElementById('userList');
    list.removeChild(list.childNodes[1]);
    document.getElementById('pravinaclose').hidden = true;
}
function deleteEstelle() {
    var list = document.getElementById('userList');
    var child = document.getElementById('estelle');
    var i = 0;

    while((child = child.previousSibling) != null ) {
        i++; 
    }
    list.removeChild(list.childNodes[i]);
    document.getElementById('estelleclose').hidden = true;
}
function deleteAntonius() {
    var list = document.getElementById('userList');
    var child = document.getElementById('antonius');
    var i = 0;
    while((child = child.previousSibling) != null ) {
        i++; 
    }
    list.removeChild(list.childNodes[i]);
    document.getElementById('antoniusclose').hidden = true;
}
function deleteKatrina() {
    var list = document.getElementById('userList');
    var child = document.getElementById('katrina');
    var i = 0;
    while((child = child.previousSibling) != null ) {
        i++; 
    }
    list.removeChild(list.childNodes[i]);
    document.getElementById('katrinaclose').hidden = true;
}
function deleteYazmin() {
    var list = document.getElementById('userList');
    var child = document.getElementById('yazmin');
    var i = 0;
    while((child = child.previousSibling) != null ) {
        i++; 
    }
    list.removeChild(list.childNodes[i]);
    document.getElementById('yazminclose').hidden = true;
}
function deleteAlexandre() {
    var list = document.getElementById('userList');
    var child = document.getElementById('alexandre');
    var i = 0;
    while((child = child.previousSibling) != null ) {
        i++; 
    }
    list.removeChild(list.childNodes[i]);
    document.getElementById('alexandreclose').hidden = true;
}
function deleteEdward() {
    var list = document.getElementById('userList');
    var child = document.getElementById('edward');
    var i = 0;
    while((child = child.previousSibling) != null ) {
        i++; 
    }
    list.removeChild(list.childNodes[i]);
    document.getElementById('edwardclose').hidden = true;
}
function deleteNathaniel() {
    var list = document.getElementById('userList');
    var child = document.getElementById('nathaniel');
    var i = 0;
    while((child = child.previousSibling) != null ) {
        i++; 
    }
    list.removeChild(list.childNodes[i]);
    document.getElementById('nathanielclose').hidden = true;
}
function deleteMadelaine() {
    var list = document.getElementById('userList');
    var child = document.getElementById('madelaine');
    var i = 0;
    while((child = child.previousSibling) != null ) {
        i++; 
    }
    list.removeChild(list.childNodes[i]);
    document.getElementById('madelaineclose').hidden = true;
}