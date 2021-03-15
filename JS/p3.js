function getData(){
    let itemsArray =[];
    itemsArray = JSON.parse(sessionStorage.getItem('items'));
    var itemName = document.title;
    var price = document.getElementById("price").innerHTML;
    var quantity = document.getElementById("quantity").value;
    if (quantity == "") {
        quantity = 0;
    }
    var realPrice = parseFloat(price.slice(10));
    
    var totalPrice = (realPrice * quantity).toFixed(2);
    let itemData =[itemName,quantity,price,totalPrice];
    if(itemsArray ===null){
        itemsArray = [itemData]
    }
    else{
        for(let i = 0; i<itemsArray.length;i++){
            if(itemsArray[i][0] === itemName){
                itemsArray[i][1] = parseInt(quantity) + parseInt(itemsArray[i][1]);
                itemsArray[i][3] = (parseFloat(totalPrice) + parseFloat(itemsArray[i][3])).toFixed(2);
                break; 
            }
            else if(i==itemsArray.length-1){
                itemsArray.push(itemData);break;
            }
        }
    }
    sessionStorage.setItem('items', JSON.stringify(itemsArray));
}
function addRows(){
    var table = document.getElementById("table1");
    let arr = JSON.parse(sessionStorage.getItem('items'));
    if(arr==null){
    }
    else{
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
            var cell4 = row.insertCell(3);
            cell4.innerHTML = arr[i][3];
            row.insertCell(4).appendChild(button);
            button.onclick = function(){
                document.getElementById("table1").deleteRow(i+1);
                if(arr.length==1){
                    arr = null;
                }
                else{
                    arr.splice(i, 1);
                }
                sessionStorage.setItem('items', JSON.stringify(arr));
            };
        }
            var table2 =document.getElementById("table2");
            var numberOfRows = table1.rows.length;
            table2.rows[1].cells[1].innerHTML = (numberOfRows -1);
            var orderTotal = 0.00;
            for(let j =0;j<arr.length;j++){
                orderTotal = (parseFloat(orderTotal) +parseFloat(arr[j][3])).toFixed(2); 
            }
            table2.rows[2].cells[1].innerHTML = orderTotal;
            var qst =parseFloat((9.975/100 * orderTotal).toFixed(2));
            table2.rows[3].cells[1].innerHTML = qst;
            var gst =parseFloat((5/100 * orderTotal).toFixed(2));
            table2.rows[4].cells[1].innerHTML = gst;
            var total = (parseFloat(orderTotal) + parseFloat(qst) + parseFloat(gst)).toFixed(2);
            table2.rows[5].cells[1].innerHTML = total; 
    }
}

 
