<?php require_once('../config/index.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="alternate" type="application/rss+xml" title="Aim-TTi News" href="https://aimtti.co.in/news.xml" />
    <link rel="shortcut icon" href="https://aimtti.co.in/favicon.ico" type="image/vnd.microsoft.icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <meta name="description" content="Recent news and announcements from Aim-TTi India. You can also sign up for an RSS news feed from this page." />
    <link rel="canonical" href="https://aimtti.co.in/news" />
    <link rel="shortlink" href="https://aimtti.co.in/news" />
    <title>What's New | Aim-TTi India</title>

    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<style>

    table{
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        border: 1px solid #ddd;
        font-size: 14px;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    th, td{
        text-align: left;
        padding: 8px;
    }
    .address{
        width: 40%;
    }
    .logo{
        width: 30%;
    }

</style>

<body>
    <?php require_once('../common/header.php'); ?>

    <div class="main">
        <?php require_once('../common/side-menu.php'); ?>

        <div class="content">

            <h1>Dealer List</h1>

            <label for="city">City</label>
            <br>
            <select name="dealer-city" id="dealer-city">
                <option value="Any">Any</option>
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Chennai">Chennai</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Hyderabad">Hyderabad</option>
            </select>

            <table id="dealers">
                <tbody>

                </tbody>
            </table>

            <div>
                <br>
                <hr>
                <h3>Prices</h3>
                <p>This site shows a recommended list price for every product. These prices do not include any local sales taxes, import duties or delivery charges, if applicable. Note that the actual price may vary depending on the distributor from which it is purchased. Recommended Prices are in Euros, GB £ or US $ - select your preference at the top of the page.</p>
                <h3>Quotations</h3>
                <p>
                    If you are unable to purchase from a dealer or distributor, it is often possible to purchase directly from Aim-TTi. This site does not offer direct on-line purchasing, however it can be used to create an Official Quotation that will be emailed to you. This is done using a very similar process to online shopping: you just add products you want to a quotation cart and then submit it as you would an online purchase. Prices shown at this point are the list price in the selected currency excluding any local taxes and delivery charges that may apply.
                    <br><br>
                    Once the request is received by ourselves, an official quotation email will be generated that includes taxes, shipping costs, and any applicable discounts. Order lead time will also be quoted. This email may be sent directly by Aim-TTi or by one of our distributors, depending upon the country from which the request is made. We aim to send a response within one working day of the quotation request being made, but the final official quotation may take longer.
                </p>
            </div>

        </div>
    </div>

    <?php require_once('../common/footer.php'); ?>

    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>

    <script>
        let selectedDealers = document.getElementById("dealer-city");
        console.log(selectedDealers);

        const data = {
            Delhi: {
                logo: 'https://aimtti.co.in/assets/images/Aim-TTi-logo_220.png',
                name: 'Aim-TTi India',
                address: 'Delhi, India'
            },

            Mumbai: {
                logo: 'https://aimtti.co.in/assets/images/Aim-TTi-logo_220.png',
                name: 'Aim-TTi India',
                address: 'Mumbai, India'
            },

            Chennai: {
                logo: 'https://aimtti.co.in/assets/images/Aim-TTi-logo_220.png',
                name: 'Aim-TTi India',
                address: 'Chennai, India'
            },

            Kolkata: {
                logo: 'https://aimtti.co.in/assets/images/Aim-TTi-logo_220.png',
                name: 'Aim-TTi India',
                address: 'Kolkata, India'
            },

            Bangalore: {
                logo: 'https://aimtti.co.in/assets/images/Aim-TTi-logo_220.png',
                name: 'Aim-TTi India',
                address: 'Bangalore, India'
            },

            Hyderabad: {
                logo: 'https://aimtti.co.in/assets/images/Aim-TTi-logo_220.png',
                name: 'Hyderabad',
                address: 'Hyderabad, India'
            },

            Any: {
                logo: '',
                name: '',
                address: '',
            }
        }

        let tbody = document.querySelector("tbody");
        tbody.innerHTML = "";
        let row = document.createElement("tr");

        selectedDealers.addEventListener("change", (e) => {
            console.log(e.target.value);

            const dealers = data[e.target.value];


            row.innerHTML = `
            <td class="logo"><img src="${dealers.logo}"></td>
            <td class="name">${dealers.name}</td>
            <td class="address">${dealers.address}</td>
        `;
            tbody.appendChild(row);


        });
    </script>
</body>

</html>