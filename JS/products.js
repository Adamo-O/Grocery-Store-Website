// Get the quantity input and the subtract button
let quantityResult = document.querySelector("#quantity");
let subBtn = document.querySelector(".subtract");

// To increment the qunatity by 1
const add = () => {
  let quantity = parseInt(quantityResult.value);
  if (Number.isNaN(quantity)) {
    quantityResult.value = 1;
  } else {
    quantity += 1;
    quantityResult.value = quantity;
    // Give the subBtn the view of being clickable
    subBtn.classList.remove("inactive-btn");
  }
}

// To decrement the quantity by 1
const subtract = () => {
  let quantity = parseInt(quantityResult.value);
  if (Number.isNaN(quantity) || quantity === 1) {
    quantityResult.value = 1;
    subBtn.classList.add("inactive-btn");
  } else {
    quantity -= 1;
    quantityResult.value = quantity;
    // Give the subBtn the view of being unclickable
    if (quantity === 1) {
      subBtn.classList.add("inactive-btn");
    }
  }
}

// To show/hide the more description part.
const description = () => {
  let description = document.querySelector(".description");
  let btn = document.querySelector(".des-btn");
  btn.classList.toggle("expanded-btn");
  if (btn.classList.contains("expanded-btn")) {
    // Add the max height to double the height, to be sure that all of the content of the
    // more description will be visible especially on phones
    description.style.maxHeight = 2 * description.scrollHeight + "px";
    description.classList.add("show");
    btn.innerHTML = "Less Description"
  } else {
    description.style.maxHeight = "0";
    description.classList.remove("show");
    btn.innerHTML = "More Description"
  }

}