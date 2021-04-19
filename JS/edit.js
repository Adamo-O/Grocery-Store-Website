function titleedit() {
    
    var x = document.getElementById('title').value;
    document.getElementById('title').value = x;
    alert("The product was successfully edited.")
    return false;
}
function desedit() {
    
    var des = document.getElementById('des').value;
    document.getElementById('des').value = des;
    alert("The product was successfully edited.")
    return false;
}

function priceedit() {
    
    var price = document.getElementById('price').value;
    document.getElementById('price').value = price;
    alert("The product was successfully edited.")
    return false;
}

function stockedit() {
    
    var stock = document.getElementById('stock').value;
    document.getElementById('stock').value = stock;
    alert("The product was successfully edited.")
    return false;
}

function dateedit() {
    
    var date = document.getElementById('date').value;
    document.getElementById('date').value = date;
    alert("The product was successfully edited.")
    return false;
}

function imgedit() {
    
    var img = document.getElementById('img');
    img.remove();
    var a = document.getElementById('button').files[0].name;
    var i = document.createElement('img');
    i.src = a;
    var x = document.getElementById('q');
    x.append(i);
    alert("The product was successfully edited.")
    return false;
}




