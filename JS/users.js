// Delete method, displays the x buttons, goes back to normal afterwards, the specific delete methods are at the end of this document.
$('#delUser').click(function() {

    if (document.getElementById('delUser').innerHTML == 'Delete User') {
        document.getElementById('delUser').innerHTML = 'Back';

        if (document.getElementById('pravina') != null) {
            document.getElementById('pravina').className = 'list-group-item disabled'; 
        }
        if (document.getElementById('estelle') != null) {
            document.getElementById('estelle').className = 'list-group-item disabled';
        }
        if (document.getElementById('antonius') != null) {
            document.getElementById('antonius').className = 'list-group-item disabled';
        }
        if (document.getElementById('alexandre') != null) {
            document.getElementById('alexandre').className = 'list-group-item disabled';
        }
        if (document.getElementById('katrina') != null) {
            document.getElementById('katrina').className = 'list-group-item disabled';
        }
        if (document.getElementById('nathaniel') != null) {
            document.getElementById('nathaniel').className = 'list-group-item disabled';
        }
        if (document.getElementById('madelaine') != null) {
            document.getElementById('madelaine').className = 'list-group-item disabled';
        }
        if (document.getElementById('yazmin') != null) {
            document.getElementById('yazmin').className = 'list-group-item disabled';
        }
        if (document.getElementById('edward') != null) {
            document.getElementById('edward').className = 'list-group-item disabled';
        }

        document.getElementById('pravinaclose').hidden = false;
        document.getElementById('estelleclose').hidden = false;
        document.getElementById('antoniusclose').hidden = false;
        document.getElementById('alexandreclose').hidden = false;
        document.getElementById('katrinaclose').hidden = false;
        document.getElementById('nathanielclose').hidden = false;
        document.getElementById('madelaineclose').hidden = false;
        document.getElementById('yazminclose').hidden = false;
        document.getElementById('edwardclose').hidden = false;
    }
    else {
        document.getElementById('delUser').innerHTML = 'Delete User';

        if (document.getElementById('pravina') != null) {
            document.getElementById('pravina').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
        }
        if (document.getElementById('estelle') != null) {
            document.getElementById('estelle').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
        }
        if (document.getElementById('antonius') != null) {
            document.getElementById('antonius').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
        }
        if (document.getElementById('alexandre') != null) {
            document.getElementById('alexandre').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
        }
        if (document.getElementById('katrina') != null) {
            document.getElementById('katrina').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
        }
        if (document.getElementById('nathaniel') != null) {
            document.getElementById('nathaniel').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
        }
        if (document.getElementById('madelaine') != null) {
            document.getElementById('madelaine').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
        }
        if (document.getElementById('yazmin') != null) {
            document.getElementById('yazmin').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
        }
        if (document.getElementById('edward') != null) {
            document.getElementById('edward').className = 'list-group-item d-flex justify-content-between align-items-center list-group-item-action';
        }

        document.getElementById('pravinaclose').hidden = true;
        document.getElementById('estelleclose').hidden = true;
        document.getElementById('antoniusclose').hidden = true;
        document.getElementById('alexandreclose').hidden = true;
        document.getElementById('katrinaclose').hidden = true;
        document.getElementById('nathanielclose').hidden = true;
        document.getElementById('madelaineclose').hidden = true;
        document.getElementById('yazminclose').hidden = true;
        document.getElementById('edwardclose').hidden = true;
    }
    })

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
        document.getElementById('alexandrefname').readOnly= true;
        document.getElementById('alexandrelname').readOnly = true;
        document.getElementById('alexandreemail').readOnly= true;
        document.getElementById('alexandrepostalcode').readOnly = true;
        document.getElementById('alexandrepassword').readOnly= true;
    
        document.getElementById('editbtnalex').innerHTML = 'Edit User';
        window.alert('Changes saved!');
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
        document.getElementById('antoniusfname').readOnly= true;
        document.getElementById('antoniuslname').readOnly = true;
        document.getElementById('antoniusemail').readOnly= true;
        document.getElementById('antoniuspostalcode').readOnly = true;
        document.getElementById('antoniuspassword').readOnly= true;
    
        document.getElementById('editbtnantonius').innerHTML = 'Edit User';
        window.alert('Changes saved!');
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
        document.getElementById('edwardfname').readOnly= true;
        document.getElementById('edwardlname').readOnly = true;
        document.getElementById('edwardemail').readOnly= true;
        document.getElementById('edwardpostalcode').readOnly = true;
        document.getElementById('edwardpassword').readOnly= true;
    
        document.getElementById('editbtnedward').innerHTML = 'Edit User';
        window.alert('Changes saved!');
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
        document.getElementById('estellefname').readOnly= true;
        document.getElementById('estellelname').readOnly = true;
        document.getElementById('estelleemail').readOnly= true;
        document.getElementById('estellepostalcode').readOnly = true;
        document.getElementById('estellepassword').readOnly= true;
    
        document.getElementById('editbtnestelle').innerHTML = 'Edit User';
        window.alert('Changes saved!'); 
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
        document.getElementById('katrinafname').readOnly= true;
        document.getElementById('katrinalname').readOnly = true;
        document.getElementById('katrinaemail').readOnly= true;
        document.getElementById('katrinapostalcode').readOnly = true;
        document.getElementById('katrinapassword').readOnly= true;
    
        document.getElementById('editbtnkatrina').innerHTML = 'Edit User';
        window.alert('Changes saved!'); 
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
        document.getElementById('madelainefname').readOnly= true;
        document.getElementById('madelainelname').readOnly = true;
        document.getElementById('madelaineemail').readOnly= true;
        document.getElementById('madelainepostalcode').readOnly = true;
        document.getElementById('madelainepassword').readOnly= true;
    
        document.getElementById('editbtnmadelaine').innerHTML = 'Edit User';
        window.alert('Changes saved!'); 
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
        document.getElementById('nathanielfname').readOnly= true;
        document.getElementById('nathaniellname').readOnly = true;
        document.getElementById('nathanielemail').readOnly= true;
        document.getElementById('nathanielpostalcode').readOnly = true;
        document.getElementById('nathanielpassword').readOnly= true;
    
        document.getElementById('editbtnnathaniel').innerHTML = 'Edit User';
        window.alert('Changes saved!'); 
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
        document.getElementById('pravinafname').readOnly= true;
        document.getElementById('pravinalname').readOnly = true;
        document.getElementById('pravinaemail').readOnly= true;
        document.getElementById('pravinapostalcode').readOnly = true;
        document.getElementById('pravinapassword').readOnly= true;
    
        document.getElementById('editbtnpravina').innerHTML = 'Edit User';
        window.alert('Changes saved!'); 
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
        document.getElementById('fnameyaz').readOnly= true;
        document.getElementById('lnameyaz').readOnly = true;
        document.getElementById('emailyaz').readOnly= true;
        document.getElementById('postalcodeyaz').readOnly = true;
        document.getElementById('passwordYaz').readOnly= true;
    
        document.getElementById('editbtnyaz').innerHTML = 'Edit User';
        window.alert('Changes saved!');
    }
}
// Add method

function addUser() {
    document.getElementById('addUserContainer').hidden = false;
}
function confirm() {
    var fname = document.forms['addUserForm']['addfname'].value;
    var fnameInv = document.getElementById('addfnameInvalid');
    var lname = document.forms['addUserForm']['addlname'].value;
    var lnameInv = document.getElementById('addlnameInvalid');
    var email = document.forms['addUserForm']['addemail'].value;
    var emailInv = document.getElementById('addemailInvalid');
    var regex=/^[a-zA-Z]+$/;
    var emailRegex=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
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
        if (fname.match(regex) && lname.match(regex)) {
            isValid = true;
        }
    
    if (isValid == true) {
        $('#userList').append('<a id="name" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">'+fname+' ' + lname +'</a>');
        document.getElementById('addUserContainer').hidden = true;
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