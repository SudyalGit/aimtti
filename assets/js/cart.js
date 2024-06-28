console.log("currency-selecton running");



function displayQuotation() {
  let quotationData = localStorage.getItem("quotation");
  if (!quotationData) return;

  console.log(quotationData);

  let quotation = JSON.parse(quotationData);
  let tbody = document.querySelector("tbody");
  tbody.innerHTML = "";

  let totalSum = 0;
  // const exchangeRates = {
  //   EUR: 1,
  //   USD: 1.092510122, // Example rate: 1 EUR = 1.1 USD
  //   INR: 109.2479791, // Example rate: 1 EUR = 90 INR
  //   GBP: 0.84036907, // Example rate: 1 EUR = 0.9 GBP
  // };
  let curr = getCookie("selectedCurrency");

  quotation.forEach((item) => {
    let showPrice;
    let showTotal;
    let convertedPrice = Math.round(item.modelPrice);
    if (curr == "INR") {
      convertedPrice = Math.round(item.modelPriceGBP * exchangeRates[curr]);
    }
    if (curr == "USD") {
      convertedPrice = Math.round(item.modelPriceUSD);
    }
    if (curr == "GBP") {
      convertedPrice = Math.round(item.modelPriceGBP);
    }
    let total = item.quantity * parseFloat(convertedPrice);
    totalSum += total;
    let row = document.createElement("tr");

    console.log(total);

    if (curr == "INR") {
      console.log("INR");
      showPrice = parseFloat(convertedPrice).toLocaleString("en-IN", {
        style: "currency",
        currency: "INR",
      });
      showTotal = parseFloat(total).toLocaleString("en-IN", {
        style: "currency",
        currency: "INR",
      });
    } else if (currencySelector.value == "EUR") {
      console.log("EUR");
      showPrice = parseFloat(convertedPrice).toLocaleString("fr-FR", {
        style: "currency",
        currency: "EUR",
      });
      showTotal = parseFloat(total).toLocaleString("fr-FR", {
        style: "currency",
        currency: "EUR",
      });
    } else if (currencySelector.value == "USD") {
      console.log("USD");
      showPrice = parseFloat(convertedPrice).toLocaleString("en-US", {
        style: "currency",
        currency: "USD",
      });
      showTotal = parseFloat(total).toLocaleString("en-US", {
        style: "currency",
        currency: "USD",
      });
    } else if (currencySelector.value == "GBP") {
      console.log("GBP");
      showPrice = parseFloat(convertedPrice).toLocaleString("en-GB", {
        style: "currency",
        currency: "GBP",
      });
      showTotal = parseFloat(total).toLocaleString("en-GB", {
        style: "currency",
        currency: "GBP",
      });
    }

    console.log(showTotal);

    row.innerHTML = `
            <td>${item.modelName}</td>
            <td class="description">${item.modelDescription}</td>
            <td> ${showPrice}</td>
            <td><input type="number" value="${item.quantity}" name="quantity" class="quantity-input" min="1"></td>
            <td class="remove"><button class="remove-btn">Remove</button></td>
            <td>${showTotal}</td>
        `;

    // Attach remove button event
    row.querySelector(".remove-btn").addEventListener("click", function () {
      removeItem(item.modelName);
    });

    // Attach quantity change event
    row
      .querySelector(".quantity-input")
      .addEventListener("change", function () {
        updateQuantity(item.modelName, this.value);
      });

    tbody.appendChild(row);
  });

  let showTotalSum;

  if (currencySelector.value == "INR") {
    showTotalSum = parseFloat(totalSum).toLocaleString("en-IN", {
      style: "currency",
      currency: "INR",
    });
  } else if (currencySelector.value == "EUR") {
    showTotalSum = parseFloat(totalSum).toLocaleString("fr-FR", {
      style: "currency",
      currency: "EUR",
    });
  } else if (currencySelector.value == "USD") {
    showTotalSum = parseFloat(totalSum).toLocaleString("en-US", {
      style: "currency",
      currency: "USD",
    });
  } else if (currencySelector.value == "GBP") {
    showTotalSum = parseFloat(totalSum).toLocaleString("en-GB", {
      style: "currency",
      currency: "GBP",
    });
  }
  document.getElementById(
    "totalsum"
  ).textContent = `Total Sum: ${showTotalSum}`;
}

// Function to remove an item from the quotation
function removeItem(modelName) {
  let quotationData = localStorage.getItem("quotation");
  if (!quotationData) return;

  let quotation = JSON.parse(quotationData);
  quotation = quotation.filter((item) => item.modelName !== modelName);

  localStorage.setItem("quotation", JSON.stringify(quotation));
  displayQuotation();
}

// Function to update the quantity of an item
function updateQuantity(modelName, newQuantity) {
  let quotationData = localStorage.getItem("quotation");
  if (!quotationData) return;

  let quotation = JSON.parse(quotationData);
  quotation = quotation.map((item) => {
    if (item.modelName === modelName) {
      item.quantity = parseInt(newQuantity, 10);
    }
    return item;
  });

  localStorage.setItem("quotation", JSON.stringify(quotation));
  displayQuotation();
}

// Display quotation on page load
window.onload = displayQuotation;
