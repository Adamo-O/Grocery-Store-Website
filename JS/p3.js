function getData(){
    let itemsArray =[];
    itemsArray = JSON.parse(sessionStorage.getItem('items'));
    var itemName = document.title;
    var price = document.getElementById("price").innerHTML;
    var quantity = document.getElementById("quantity").value;
    let itemData =[itemName,quantity,price];
    if(itemsArray ===null){
        itemsArray = [itemData]
    }
    else{
        for(let i = 0; i<itemsArray.length;i++){
            if(itemsArray[i][0] === itemName){
                itemsArray[i][1] = parseInt(quantity) + parseInt(itemsArray[i][1]);
                break; 
            }
            else if(i==itemsArray.length-1){
                itemsArray.push(itemData);
            }
        }
    }
    sessionStorage.setItem('items', JSON.stringify(itemsArray));
}
function addRows(){
    var table = document.getElementById("table1");
    let arr = JSON.parse(sessionStorage.getItem('items'));
    for(let i =0;i<arr.length;i++){
        var button = document.createElement("INPUT");
        button.setAttribute("type","button");
        button.setAttribute("value","x" );
        var row = table.insertRow(i+1);
        var cell1 = row.insertCell(0);
        cell1.innerHTML=arr[i][0];
        var cell2 = row.insertCell(1);
        cell2.innerHTML = arr[i][1];
        var cell3 = row.insertCell(2);
        cell3.innerHTML = arr[i][2];
        row.insertCell(3).appendChild(button);
        button.onclick = function(){
            document.getElementById("table1").deleteRow(i+1);
            arr.splice(i, 1);
            sessionStorage.setItem('items', JSON.stringify(arr));
        };
    }
}
 
