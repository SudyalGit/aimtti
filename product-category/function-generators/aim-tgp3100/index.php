<?php require_once('../../../config/index.php');

$title = "TGP3100 Series Pulse and Universal Generator | Aim-TTi India India";
$heading = "TGP3100 Series";

$sql = "SELECT * FROM `productmodels` WHERE `ProductId` = 14";
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




$sql = "SELECT * FROM `productmodels` WHERE `ImageURL` = 'access' AND ModelName = 'RM200A'";
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
    <meta name="description" content="Aim-TTi TGP3100 Series Pulse and Universal Generator with 25 or 50MHz models, single or dual channel" />
    <link rel="canonical" href="https://aimtti.co.in/product-category/function-generators/aim-tgp3100" />
    <title>TGP3100 Series Pulse and Universal Generator | Aim-TTi India</title>

    <link rel="stylesheet" href="../../../assets/css/index.css">
</head>

<body>
    <?php require_once('../../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../../common/side-menu.php'); ?>

        <div class="content">
            <h1><?php echo $heading ?></h1>
            <h2>
                Pulse and Universal Generator with 25 or 50MHz models, single or dual channel
            </h2>

            <div class="product-card">
                <div class="product-card-carousel">
                    <div class="container">
                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TGP3121.jpg?itok=G2yqQlSA" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TGP3152-fr_0.jpg?itok=uKkgjt61" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TGP3152-angl_0.jpg?itok=lcDrH-TJ" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TGP3152-angr.jpg?itok=8H_zkSl1" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TGP3152-bk_0.jpg?itok=T7_q-0_4" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/2U_half_rack_handle_2.jpg?itok=pRHrBh6l" alt="">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>


                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TGP3121.jpg?itok=G2yqQlSA" style="width:100%" onclick="currentSlide(1)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TGP3152-fr_0.jpg?itok=uKkgjt61" style="width:100%" onclick="currentSlide(2)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TGP3152-angl_0.jpg?itok=lcDrH-TJ" style="width:100%" onclick="currentSlide(3)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TGP3152-angr.jpg?itok=8H_zkSl1" style="width:100%" onclick="currentSlide(4)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TGP3152-bk_0.jpg?itok=T7_q-0_4" style="width:100%" onclick="currentSlide(5)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/2U_half_rack_handle_2.jpg?itok=pRHrBh6l" style="width:100%" onclick="currentSlide(6)" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card-details">
                    <p>The TGP3100 Series are true pulse generators using all digital techniques. They can replicate the capabilities of traditional pulse generators whilst adding many additional facilities such as pulse modulations.<br>
                        <br>
                        As well as operating as pulse generators, the instruments can act as high performance noise generators and as function/arbitrary generators - making them truly universal waveform generators.
                    </p>

                    <ul>
                        <li>Pulse waveforms from 1mHz to 50MHz [25MHz], minimum rise time 5ns [8ns]</li>
                        <li>Pulse, double pulse, pulse pattern and PRBS waveforms</li>
                        <li>Pulse period, width and delay resolutions of 100ps or 11 digits</li>
                        <li>Independently variable rise and fall times from 5ns [8ns] to 800 seconds</li>
                        <li>Low jitter asynchronous operation, externally triggered pulses or pulse reconstruction</li>
                        <li>High drive capability output can provide 20V pk-pk into 50 Ohm (unmatched)</li>
                        <li>Wide range of pulse modulations including AM.FM, PM, FSK, BPSK, SUM, PWM, PDM using internal or external modulation sources.</li>
                        <li>Triggered (burst count) or gated operation using internal or external trigger sources</li>
                        <li>Full Noise generator to 25MHz with selectable crest factor and user defined distribution</li>
                        <li>Full Arbitrary/Function generator with 16 waveform types</li>
                        <li>Sine waves up to 50MHz [25MHz]</li>
                        <li>Arbitrary waveforms at 800MS/s sampling rate and 16-bit vertical resolution</li>
                        <li>Extensive internal/external modulation of all waveform types</li>
                        <li>Linear and logarithmic sweeps of all waveform types</li>
                        <li>Front panel mounted USB Flash drive interface</li>
                        <li>GPIB (option), USB and LXI compliant LAN interfaces</li>
                    </ul>
                    <br>
                    <div> <span><a href="https://resources.aimtti.com/datasheets/AIM-TGP3100_series_pulse_generator_data_sheet-Iss3.pdf" title="Link to this datasheet/brochure (opens in a new window or tab)" target="_blank"><img class="file-icon" alt="" title="application/pdf" src="<?php echo $domain ?>application-pdf.png"> Datasheet </a> - (PDF / English)</span> </div>
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
                    <thead>
                        <tr>
                            <th>Model</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>




                        <?php

                        foreach ($options as $option) {
                            echo '

<tr>
<td class="model-details">
<h4>' . $option["ModelName"] . '</h4>
<p>
' . $option["ModelDescription"] . '
</p>
</td>
<td class="model-price price">
' . $option[$priceshow] . ' €
</td>
<td class="add-to-quotation">
<form class="add-to-quotation-form">
<label for="quantity">Quantity</label>
<input placeholder="Quantity" type="number" value="1" name="quantity" id="quantity">
<input type="hidden" id="mname" name="mname" value="' . $option['ModelName'] . '">
<input type="hidden" id="mdescription" name="mdescription" value="' . $option['ModelDescription'] . '">
<input type="hidden" id="mprice" name="mprice" value="' . $option['Price'] . '">
<input type="hidden" id="mpriceUSD" name="mpriceUSD" value="' . $option['PriceUSD'] . '">
<input type="hidden" id="mpriceGBP" name="mpriceGBP" value="' . $option['PriceGBP'] . '">
<input type="submit" name="addtoquotation" value="Add to Quotation">
</form>
</td>
</tr>

    ';
                        }
                        ?>
















                    </tbody>
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
                                    <a href="/resources/tgp3100-series-pulsearbitrary-function-generators-product-tour">TGP3100 Series Pulse/Arbitrary Function Generators Product Tour - (HTML / English)</a>
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
                                    <a href="/resources/tgp3100-series-firmware-update-v105">TGP3100 Series Firmware Update V1.05 - (ZIP / English)</a>
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
                                    <a href="/resources/tgp3100-series-pulse-generators-combined-labview-driver-and-labwindows-cvi-driver-v102">TGP3100 Series Pulse Generators combined LabVIEW Driver and LabWindows CVI Driver V1.0.2 - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tgp3100-series-pulse-generators-ivi-driver-v102">TGP3100 Series Pulse Generators IVI driver V1.0.2 - (ZIP / English)</a>
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
                                    <a href="/resources/tgp3100-series-pulse-generator-data-sheet-issue-3">TGP3100 series pulse generator data sheet - Issue 3 - (PDF / English)</a>
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
                                    <a href="/resources/tgp3100-series-guia-rapida-en-espa%C3%B1ol">TGP3100 Series Guia rapida en Español - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tgp3100-series-guida-italiano">TGP3100 Series Guida Italiano - (PDF / Italian)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tgp3100-series-guide-succinct-en-fran%C3%A7ais">TGP3100 Series Guide succinct en Français - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tgp3100-series-instruction-manual-issue-7">TGP3100 Series Instruction Manual - Issue 7 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tgp3100-series-kurzanleitung">TGP3100 Series Kurzanleitung - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tgp3100-series-quick-start-guide">TGP3100 Series Quick Start Guide - (PDF / English)</a>
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
                    <table class="views-table cols-0">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/tgp3100-series-comparison-sheet">TGP3100 Series comparison sheet - (PDF / English)</a>
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