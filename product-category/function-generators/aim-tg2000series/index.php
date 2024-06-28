<?php require_once('../../../config/index.php');

$title = "TG2000 Series DDS Function Generator, Digital Control | Aim-TTi India India";
$heading = "TG2000 Series";

$sql = "SELECT * FROM `productmodels` WHERE `ProductId` = 16";
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




$sql = "SELECT * FROM `productmodels` WHERE `ImageURL` = 'access' AND ModelName = 'RM50A'";
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
    <meta name="description" content="Aim-TTi TG2000 Series DDS Function Generator, Digital Control 10MHz or 20MHz, with/without USB/RS232 Interfaces" />
    <link rel="canonical" href="https://aimtti.co.in/product-category/function-generators/aim-tg2000series" />
    <title>TG2000 Series DDS Function Generator, Digital Control | Aim-TTi India</title>

    <link rel="stylesheet" href="../../../assets/css/index.css">
</head>

<body>
    <?php require_once('../../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../../common/side-menu.php'); ?>

        <div class="content">
            <h1><?php echo $heading ?></h1>
            <h2>
                DDS Function Generator, Digital Control 10MHz or 20MHz, with/without USB/RS232 Interfaces
            </h2>

            <div class="product-card">
                <div class="product-card-carousel">
                    <div class="container">
                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TG2000-1k.png?itok=Q1MHOaDu" alt="">
                        </div>


                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>


                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TG2000-1k.png?itok=Q1MHOaDu" style="width:100%" onclick="currentSlide(1)" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card-details">
                    <ul>
                        <li>0.001Hz to 10MHz/20MHz frequency range</li>
                        <li>6 digits or 1mHz resolution</li>
                        <li>1ppm stability and 10ppm one year accuracy</li>
                        <li>Low distortion, high spectral purity sine waves</li>
                        <li>Internal phase continuous sweep, lin or log</li>
                        <li>AM, FSK, gated and tone switching modes</li>
                        <li>5mV to 20V pk-pk from 50 or 600 Ohms</li>
                        <li>Storage for multiple instrument set-ups</li>
                        <li>USB and RS232 Interfaces (TG2000 only)</li>
                    </ul>
                    <p>The TG1000 (10MHz Model) was discontinued in June 2022.</p>
                    <br>
                    <div> <span><a href="https://resources.aimtti.com/datasheets/AIM-TG1000+TG2000_function_generators_data_sheet-Iss2A.pdf" title="Link to this datasheet/brochure (opens in a new window or tab)" target="_blank"><img class="file-icon" alt="" title="application/pdf" src="<?php echo $domain ?>application-pdf.png"> Datasheet </a> - (PDF / English)</span> </div>
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
                    <thead>
                        <tr>
                            <th>Model</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>







                        <?php

                        foreach ($accessories as $accessorie) {
                            echo '

<tr>
<td class="model-details">
<h4>' . $accessorie["ModelName"] . '</h4>
<p>
' . $accessorie["ModelDescription"] . '
</p>
</td>
<td class="model-price price">
' . $accessorie[$priceshow] . ' €
</td>
<td class="add-to-quotation">
<form class="add-to-quotation-form">
<label for="quantity">Quantity</label>
<input placeholder="Quantity" type="number" value="1" name="quantity" id="quantity">
<input type="hidden" id="mname" name="mname" value="' . $accessorie['ModelName'] . '">
<input type="hidden" id="mdescription" name="mdescription" value="' . $accessorie['ModelDescription'] . '">
<input type="hidden" id="mprice" name="mprice" value="' . $accessorie['Price'] . '">
<input type="hidden" id="mpriceUSD" name="mpriceUSD" value="' . $accessorie['PriceUSD'] . '">
<input type="hidden" id="mpriceGBP" name="mpriceGBP" value="' . $accessorie['PriceGBP'] . '">
<input type="submit" name="addtoquotation" value="Add to Quotation">
</form>
</td>
</tr>

    ';
                        }
                        ?>





















                    </tbody>
                </table>

                <div id="model-title-data" class="data-table hide">
                    <table class="views-table cols-0">
                        <caption>
                            <h3>Product Tours</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/tgxa-function-generators-product-tour">TGxA Function Generators Product Tour - (HTML / English)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="views-table cols-0">
                        <caption>
                            <h3>Firmware Files</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/tg501xa-and-tg251xa-firmware-update-v115">TG501xA and TG251xA Firmware Update V1.15 - (ZIP / English)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="views-table cols-0">
                        <caption>
                            <h3>Drivers</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/tg501xa-and-tg251xa-combined-labview-and-labwindows-cvi-driver-v132">TG501xA and TG251xA combined LabVIEW and LabWindows CVI Driver V1.3.2 - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tg501xa-and-tg251xa-function-generators-ivi-driver-v132">TG501xA and TG251xA Function Generators IVI Driver V1.32 - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/usb-driver-v211">USB Driver V2.11 - (ZIP / English)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="views-table cols-0">
                        <caption>
                            <h3>Datasheets</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/tg251xa-501xa-series-function-generators-data-sheet-issue-4">TG251xA &amp; 501xA series function generators data sheet - Issue 4 - (PDF / English)</a>
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
                                    <a href="/resources/gpib-option-fitting-instructions-issue-4">GPIB Option Fitting Instructions - Issue 4 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tg5012a-2512a-5011a-2511a-bedienungsanleitung-auf-deutsch-issue-8">TG5012A 2512A 5011A &amp; 2511A Bedienungsanleitung auf Deutsch - Issue 8 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tg5012a-2512a-5011a-2511a-instrucciones-en-espanol-issue-8">TG5012A 2512A 5011A &amp; 2511A Instrucciones en Espanol - Issue 8 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tg5012a-2512a-5011a-2511a-instructions-issue-8">TG5012A 2512A 5011A &amp; 2511A Instructions - Issue 8 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tg5012a-2512a-5011a-2511a-instructions-en-francais-issue-8">TG5012A 2512A 5011A &amp; 2511A Instructions en Francais - Issue 8 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tg5012a-2512a-5011a-2511a-istruzioni-italiano-issue-8">TG5012A 2512A 5011A &amp; 2511A Istruzioni in Italiano - Issue 8 - (PDF / Italian)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="views-table cols-0">
                        <caption>
                            <h3>Selection Guides</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/function-generator-selection-guide-aim-tti">Function Generator Selection Guide - Aim-TTi - (PDF / English)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="views-table cols-0">
                        <caption>
                            <h3>Software / Apps</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/lxi-discovery-tool">LXI discovery tool - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/waveform-manager-plus-v414">Waveform Manager Plus V4.14 - (ZIP / English)</a>
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