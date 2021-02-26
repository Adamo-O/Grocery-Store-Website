var checkInput = ()=>{
    var inputs = document.contact.elements;
    var result = document.querySelector("#result");
    for (let i = 0; i < 4; i++) {
        if(inputs[i].value==""){
            result.innerHTML = "Please fill in the "+inputs[i].placeholder.toUpperCase();
            result.classList.add("wrong");
            result.classList.remove("correct");
            return false;
        }
    }
    var itemNumValidity = inputs[1].value.search(/^\d+$/)
    if(itemNumValidity==-1){
        result.innerHTML = "Please fill in the item number with a number";
        result.classList.add("wrong");
        result.classList.remove("correct");
        return false;  
    }
    var orderNumValidity = inputs[2].value.search(/#\d{5}[a-z]{2}/i);
    if(orderNumValidity==-1){
        result.innerHTML = "Please fill in the order number as #12345AB";
        result.classList.add("wrong");
        result.classList.remove("correct");
        return false;
    }
    result.innerHTML = "Thanks for your message";
    result.classList.add("correct");
    result.classList.remove("wrong");
}