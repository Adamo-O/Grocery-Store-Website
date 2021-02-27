var pineapplePrice = 1.99;
var salmonPrice = 21.99;
var BeltedGallowaySirloinPrice = 7.99;
var breadPrice = 0.99;

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

const checkItemPrice = () => {
	const documentTitle = document.title;
	const price = document.querySelector(".price");
	if (documentTitle === "Pineapple") {
		price.textContent = `Price: $${pineapplePrice} per pound`
	} else if (documentTitle == "Belted Galloway Sirloin") {
		price.textContent = `Price: $${BeltedGallowaySirloinPrice} per pound`
	} else if (documentTitle == "Salmon") {
		price.textContent = `Price: $${salmonPrice} per pound`
	} else if (documentTitle == "Bread") {
		price.textContent = `Price: $${breadPrice} per oz`
	}
}
