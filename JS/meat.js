function showDescription() {
    var productCont = document.getElementById('productContainer');
    var descButton = document.getElementsByClassName('desButton')[0];
    var descBox = document.getElementById('description');

    descBox.classList.toggle('hideDesc');
    descBox.classList.toggle('showDesc');

    if (descBox.classList.contains('showDesc'))
        descButton.innerHTML = 'Show Less'; 
    else
        descButton.innerHTML = 'More Description';
}