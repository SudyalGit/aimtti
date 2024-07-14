console.log("add to quotation running");


let upadateCartCount = () => {
  let cartCount = document.querySelector(".cart p");
  // console.log(cartCount);

  if (localStorage.getItem("quotation")) {
    cartCount.innerHTML = "🛒&nbsp;";
    cartCount.innerHTML += JSON.parse(localStorage.getItem("quotation")).length;
    cartCount.innerHTML +=
      '<br><a href="http://localhost/mywork/cart/">View Quotation</a>';
  } else {
    cartCount.innerHTML = "🛒&nbsp;Empty";
  }
};

upadateCartCount();

let addToQuotation = document.querySelectorAll(".add-to-quotation-form");
// console.log(addToQuotation);

addToQuotation.forEach((element) => {
  element.addEventListener("submit", function (e) {
    e.preventDefault();
    console.log(e.target.quantity.value);
    console.log(e.target.mdescription.value);
    console.log(e.target.mname.value);
    console.log(e.target.mprice.value);
    console.log(e.target.mpriceUSD.value);
    console.log(e.target.mpriceGBP.value);
    let quantity = parseInt(e.target.quantity.value);
    let modelName = e.target.mname.value;
    let modelDescription = e.target.mdescription.value;
    let modelPrice = e.target.mprice.value;
    let modelPriceUSD = e.target.mpriceUSD.value;
    let modelPriceGBP = e.target.mpriceGBP.value;

    let quotation = JSON.parse(localStorage.getItem("quotation")) || [];
    let product = quotation.find((item) => item.modelName === modelName);
    if (product) {
      product.quantity += quantity;
    } else {
      quotation.push({
        modelName: modelName,
        quantity: quantity,
        modelDescription: modelDescription,
        modelPrice: modelPrice,
        modelPriceUSD: modelPriceUSD,
        modelPriceGBP: modelPriceGBP,
      });
    }

    localStorage.setItem("quotation", JSON.stringify(quotation));
    displayQuotation(modelName, quantity, modelDescription, modelPrice);
    upadateCartCount();
  });
});

function displayQuotation(name, quantity, modelDescription, modelPrice) {
  let alertBox = document.querySelector(".alert-msg");
  // set alertBox display block
  alertBox.style.display = "block";

  let alertName = document.querySelector(".alert-msg .alert-name");
  alertName.innerHTML = `Name :   ${name}`;
  let alertQty = document.querySelector(".alert-msg .alert-qty");
  alertQty.innerHTML = `Quantity :   ${quantity}`;

  setTimeout(function () {
    alertBox.style.display = "none";
  }, 2000);
}
