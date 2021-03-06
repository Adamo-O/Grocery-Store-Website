// Form the varaible that contains the prices of the products in the deals section
var pineapplePrice = 1.99;
var salmonPrice = 21.99;
var BeltedGallowaySirloinPrice = 7.99;
var breadPrice = 0.99;

// To update the prices in the index.html page
const checkDealPrices = () => {
	const offers = document.querySelectorAll(".offer-price");
	const prices = [pineapplePrice, salmonPrice, BeltedGallowaySirloinPrice, breadPrice];
	for (let i = 0; i < offers.length; i++) {
		if (i == 3) {
			offers[i].textContent = `Price: $${breadPrice} per oz`;
		} else {
			offers[i].textContent = `from only $${prices[i]} per pound`;
		}
	}
}

// To update the price of each product in their corresponding page
const checkItemPrice = () => {
	const documentTitle = document.title;
	const price = document.querySelector(".price");
	if (documentTitle === "Pineapple") {
		price.textContent = `For only $${pineapplePrice} per pound`
	} else if (documentTitle == "Belted Galloway Sirloin") {
		price.textContent = `For only $${BeltedGallowaySirloinPrice} per pound`
	} else if (documentTitle == "Salmon") {
		price.textContent = `For only $${salmonPrice} per pound`
	} else if (documentTitle == "Bread") {
		price.textContent = `For only $${breadPrice} per oz`
	}
}
