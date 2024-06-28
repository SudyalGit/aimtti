<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo $domain; ?>favicon.ico" type="image/vnd.microsoft.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    <select name="currency" id="currencySelector">
        <option value="INR">INR</option>
        <option value="EUR">EURO</option>
        <option value="USD">USD</option>
        <option value="GBP">GBP</option>
    </select>
    Currency

    <div class="price">
        100
    </div>
    <div class="price">
        100
    </div>
    <div class="price">
        100
    </div>



    <script>
        const currencySelector = document.getElementById("currencySelector");
        const prices = document.querySelectorAll(".price");

        if (getCookie("selectedCurrency")) {
            currencySelector.value = getCookie("selectedCurrency");
        } else {
            currencySelector.value = "INR";
        }


        const exchangeRates = {
            EUR: 1,
            USD: 1.0922, // Example rate: 1 EUR = 1.1 USD
            INR: 90, // Example rate: 1 EUR = 90 INR
            GBP: 0.8404 // Example rate: 1 EUR = 0.9 GBP
        };



        for (let i = 0; i < prices.length; i++) {
            const price = prices[i];
            const priceValue = parseFloat(price.textContent);
            const exchangeRate = exchangeRates[currencySelector.value];
            let tempPrice = (priceValue * exchangeRate).toFixed(2);
            price.textContent = tempPrice;
        }

        if (currencySelector.value == "INR") {
            console.log("INR");
            for (let i = 0; i < prices.length; i++) {
                let price = prices[i].innerHTML;
                prices[i].innerHTML = parseFloat(price).toLocaleString('de-IN', {
                    style: 'currency',
                    currency: 'INR'
                })
            }
        } else if (currencySelector.value == "EUR") {
            console.log("EUR");
            for (let i = 0; i < prices.length; i++) {
                let price = prices[i].innerHTML;
                prices[i].innerHTML = parseFloat(price).toLocaleString('de-DE', {
                    style: 'currency',
                    currency: 'EUR'
                })
            }
        } else if (currencySelector.value == "USD") {
            console.log("USD");
            for (let i = 0; i < prices.length; i++) {
                let price = prices[i].innerHTML;
                prices[i].innerHTML = parseFloat(price).toLocaleString('de-DE', {
                    style: 'currency',
                    currency: 'USD'
                })
            }
        } else if (currencySelector.value == "GBP") {
            console.log("GBP");
            for (let i = 0; i < prices.length; i++) {
                let price = prices[i].innerHTML;
                prices[i].innerHTML = parseFloat(price).toLocaleString('de-DE', {
                    style: 'currency',
                    currency: 'GBP'
                })
            }
        }






        function getCookie(cookieName) {
            const name = cookieName + "=";
            const decodedCookie = decodeURIComponent(document.cookie);
            const cookieArray = decodedCookie.split(';');

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
                date.setTime(date.getTime() + (expirationDays * 24 * 60 * 60 * 1000));
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
        // Function to set a cookie
    </script>
</body>


</html>