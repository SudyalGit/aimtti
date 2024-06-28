console.log("currency-selecton running");

const currencySelector = document.getElementById("currencySelector");
const prices = document.querySelectorAll(".price");

if (getCookie("selectedCurrency")) {
  currencySelector.value = getCookie("selectedCurrency");
} else {
  currencySelector.value = "INR";
  setCookie("selectedCurrency", currencySelector.value, 7);
}

const exchangeRates = {
  INR: 130,
};

if (currencySelector.value == "INR") {
  for (let i = 0; i < prices.length; i++) {
    const price = prices[i];
    const priceValue = parseFloat(price.textContent);
    const exchangeRate = exchangeRates[currencySelector.value];
    let tempPrice = Math.round(priceValue * exchangeRate).toFixed(2);
    price.textContent = tempPrice;
  }
}

if (currencySelector.value == "INR") {
  console.log("INR");
  for (let i = 0; i < prices.length; i++) {
    let price = prices[i].innerHTML;
    prices[i].textContent = parseFloat(price).toLocaleString("en-IN", {
      style: "currency",
      currency: "INR",
    });
  }
} else if (currencySelector.value == "EUR") {
  console.log("EUR");
  for (let i = 0; i < prices.length; i++) {
    let price = prices[i].innerHTML;
    prices[i].textContent = parseFloat(price).toLocaleString("fr-FR", {
      style: "currency",
      currency: "EUR",
    });
  }
} else if (currencySelector.value == "USD") {
  console.log("USD");
  for (let i = 0; i < prices.length; i++) {
    let price = prices[i].innerHTML;
    prices[i].textContent = parseFloat(price).toLocaleString("en-US", {
      style: "currency",
      currency: "USD",
    });
  }
} else if (currencySelector.value == "GBP") {
  console.log("GBP");
  for (let i = 0; i < prices.length; i++) {
    let price = prices[i].innerHTML;
    prices[i].textContent = parseFloat(price).toLocaleString("en-GB", {
      style: "currency",
      currency: "GBP",
    });
  }
}

function getCookie(cookieName) {
  const name = cookieName + "=";
  const decodedCookie = decodeURIComponent(document.cookie);
  const cookieArray = decodedCookie.split(";");

  for (let i = 0; i < cookieArray.length; i++) {
    let cookie = cookieArray[i].trim();
    if (cookie.indexOf(name) === 0) {
      return cookie.substring(name.length, cookie.length);
    }
  }
  return "";
}

function setCookie(cookieName, cookieValue, expirationDays) {
  let expires = "";
  if (expirationDays) {
    const date = new Date();
    date.setTime(date.getTime() + expirationDays * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = cookieName + "=" + cookieValue + expires + "; path=/";
}

// Add event listener to currency selector
currencySelector.addEventListener("change", (e) => {
  const selectedCurrency = e.target.value;
  setCookie("selectedCurrency", selectedCurrency, 7);
  location.reload(true);
});
