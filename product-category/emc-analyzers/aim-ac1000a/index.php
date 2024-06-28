<?php require_once('../../../config/index.php');

$title = "AC1000A Low Distortion 1kW Power Source | Aim-TTi India India";
$heading = "AC1000A";

$sql = "SELECT * FROM `productmodels` WHERE `ProductId` = 30";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $models = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $models[] = $row;
    }
    // print_r($models);
} else {
    // echo "No results found";
}



$sql = "SELECT * FROM `productmodels` WHERE `ImageURL` = 'options' AND `ModelName` = 'GPIB 1A'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $options = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $options[] = $row;
    }
    // print_r($models);
} else {
    echo "No results found";
}




$sql = "SELECT * FROM `productmodels` WHERE `ImageURL` = 'access' AND ModelName = 'RM460'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $accessories = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $accessories[] = $row;
    }
    // print_r($models);
} else {
    echo "No results found";
}











$priceshow = 'PriceGBP';
if ($_COOKIE['selectedCurrency'] === 'USD') {
    $priceshow = 'PriceUSD';
}
if ($_COOKIE['selectedCurrency'] === 'GBP') {
    $priceshow = 'PriceGBP';
}
if ($_COOKIE['selectedCurrency'] === 'EUR') {
    $priceshow = 'Price';
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="https://aimtti.co.in/favicon.ico" type="image/vnd.microsoft.icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="description" content="Aim-TTi AC1000A Low Distortion 1kW Power Source with UK/Schuko/USA socket." />
    <link rel="canonical" href="https://aimtti.co.in/product-category/emc-analyzers/aim-ac1000a" />
    <title>AC1000A Low Distortion 1kW Power Source | Aim-TTi India</title>

    <link rel="stylesheet" href="../../../assets/css/index.css">
</head>

<body>
    <?php require_once('../../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../../common/side-menu.php'); ?>

        <div class="content">
            <h1><?php echo $heading ?></h1>
            <h2>
                Low Distortion 1kW Power Source with UK/Schuko/USA socket.
            </h2>

            <div class="product-card">
                <div class="product-card-carousel">
                    <div class="container">
                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AC1000A-UK-1k.jpg?itok=piw2Lw0J" alt="">
                        </div>



                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>


                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AC1000A-UK-1k.jpg?itok=piw2Lw0J" style="width:100%" onclick="currentSlide(1)" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="product-card-details">
                    <ul>
                        <li>Provides an EN61000–3–2 compliant source</li>
                        <li>1000W power capability at 230V</li>
                        <li>Up to 4·4A rms load current and up to 10A peak currents</li>
                        <li>Comprehensive overload protection</li>
                        <li>Connection via standard power connectors</li>
                    </ul>
                    <br>
                    <div> <span><a href="https://resources.aimtti.com/datasheets/AIM-HA1600A+AC1000A_EMC_analyzer_data_sheet-Iss1.pdf" title="Link to this datasheet/brochure (opens in a new window or tab)" target="_blank"><img class="file-icon" alt="" title="application/pdf" src="<?php echo $domain ?>application-pdf.png"> Datasheet </a> - (PDF / English)</span> </div>
                </div>
            </div>


            <!-- model series -->

            <div class="model-series">
                <div class="model-series-title">
                    <div onclick="changeModelTitle(event)" data-id="model-title-product" class="cursor model-series-title-name">Product</div>
                    <div onclick="changeModelTitle(event)" data-id="model-title-options" class="cursor model-series-title-name">Options</div>
                    <div onclick="changeModelTitle(event)" data-id="model-title-accessories" class="cursor model-series-title-name">Accessories</div>
                    <div onclick="changeModelTitle(event)" data-id="model-title-data" class="cursor model-series-title-name">Data and Downloads</div>
                </div>


                <table id="model-title-product" class="product-series-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Model</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>



                    <tbody>

                        <?php

                        foreach ($models as $model) {
                            echo '

<tr>
    <td class="model-image">
        <img class="model-for-image cursor" data-img="' . $domain . 'sites/default/files/' . $model['ImageURL'] . '" src="' . $domain . 'sites/default/files/styles/medium/public/' . $model['ImageURL'] . '"
            alt="">
    </td>
    <td class="model-details">
        <h4>' . $model["ModelName"] . '</h4>
        <p>
            ' . $model["ModelDescription"] . '
        </p>
    </td>
    <td class="model-price price">
        ' . $model[$priceshow] . ' €
    </td>
    <td class="add-to-quotation">
        <form class="add-to-quotation-form">
            <label for="quantity">Quantity</label>
            <input placeholder="Quantity" type="number" value="1" name="quantity" id="quantity">
            <input type="hidden" id="mname" name="mname" value="' . $model['ModelName'] . '">
            <input type="hidden" id="mdescription" name="mdescription" value="' . $model['ModelDescription'] . '">
            <input type="hidden" id="mprice" name="mprice" value="' . $model['Price'] . '">
            <input type="hidden" id="mpriceUSD" name="mpriceUSD" value="' . $model['PriceUSD'] . '">
            <input type="hidden" id="mpriceGBP" name="mpriceGBP" value="' . $model['PriceGBP'] . '">
            <input type="submit" name="addtoquotation" value="Add to Quotation">
        </form>
    </td>
</tr>

                            ';
                        }
                        ?>













                    </tbody>
                </table>


                <table id="model-title-options" class="options-table hide">

                </table>

                <table id="model-title-accessories" class="data-table hide">

                </table>

                <div id="model-title-data" class="data-table hide">
                    <table class="views-table cols-0">
                        <caption>
                            <h3>Datasheets</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/ha1600a-ac1000a-emc-analyzer-data-sheet-issue-1">HA1600A &amp; AC1000A EMC analyzer data sheet - Issue 1 - (PDF / English)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="views-table cols-0">
                        <caption>
                            <h3>Manuals</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/ac1000-instruction-manual-issue-7">AC1000 Instruction Manual - Issue 7 - (PDF / English, French, German, Italian, Spanish)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>







            </div>
        </div>
    </div>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
    </div>

    <?php require_once('../../../common/footer.php'); ?>
    <script src="<?php echo $domain; ?>assets/js/product-carousel.js"></script>
    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>
</body>

</html>