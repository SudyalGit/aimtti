<?php require_once('../../../config/index.php');

$heading = "MX Series";
$title = "MX Series Bench/System Multi-Range DC Power Supply | Aim-TTi-Instruments";
$description = "Explore Aim-TTi MX Series Bench/System Multi-Range DC Power Supply with digital control, featuring 3 or 4 outputs and 315 to 420W power capacity. Available in India with or without remote interfaces.";
$url = "https://aimtti.co.in/product-category/dc-power-supplies/mxseries";
$imageurl = "https://aimtti.co.in/sites/default/files/image/large/AIM-MX100T-1k_0.jpg";

$sql = "SELECT * FROM `productmodels` WHERE `ProductId` = 3";
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description ?>" />
    <meta name="keywords" content="cpx200d, cpx200d power supply, cpx200d power supply in india" />

    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:description" content="<?php echo $description ?>" />
    <meta property="og:url" content="<?php echo $url ?>" />
    <meta property="og:type" content="product" />
    <meta property="og:image" content="<?php echo $imageurl ?>" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $title ?>" />
    <meta name="twitter:description" content="<?php echo $description ?>" />
    <meta name="twitter:image" content="<?php echo $imageurl ?>" />

    <link rel="canonical" href="<?php echo $url ?>" />




    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="https://aimtti.co.in/favicon.ico" type="image/vnd.microsoft.icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <link rel="canonical" href="https://aimtti.co.in/product-category/dc-power-supplies/aim-mxseries" />
    <title></title>

    <link rel="stylesheet" href="../../../assets/css/index.css">
</head>

<body>
    <?php require_once('../../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../../common/side-menu.php'); ?>

        <div class="content">
            <h1><?php echo $heading ?></h1>
            <h2>
                Bench/System Multi-Range DC Power Supply with digital control, 3 or 4 Outputs, 315 to 420W with/without Remote Interfaces
            </h2>

            <div class="product-card">
                <div class="product-card-carousel">
                    <div class="container">
                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-MX100T-1k_0.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-MX100T-1k_0.jpg" alt="Aim-TTi MX100TP (MX Series) DC bench power supply">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-MX180TP_1k.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-MX180TP_1k.jpg" alt="Aim-TTi MX180TP (MX Series) DC bench power supply">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-MX100QP-S2-fr_0.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-MX100QP-S2-fr_0.jpg" alt="Aim-TTi MX100QP Series 2 (MX Series) DC bench power supply">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-Test_Bridge-1000px_0_0.png" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-Test_Bridge-1000px_0_0.png" alt="Test Bridge Software for Aim-TTi power products">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-MX-comparison-TS1QS2_0.png" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-MX-comparison-TS1QS2_0.png" alt="MX Series comparison T (triple) variants Series 1 and Q (Quad) variants Series 2">
                        </div>


                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>


                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-MX100T-1k_0.jpg" style="width:100%" onclick="currentSlide(1)" alt="Aim-TTi MX100TP (MX Series) DC bench power supply">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-MX180TP_1k.jpg" style="width:100%" onclick="currentSlide(2)" alt="Aim-TTi MX180TP (MX Series) DC bench power supply">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-MX100QP-S2-fr_0.jpg" style="width:100%" onclick="currentSlide(3)" alt="Aim-TTi MX100QP Series 2 (MX Series) DC bench power supply">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-Test_Bridge-1000px_0_0.png" style="width:100%" onclick="currentSlide(4)" alt="Test Bridge Software for Aim-TTi power products">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-MX-comparison-TS1QS2_0.png" style="width:100%" onclick="currentSlide(5)" alt="MX Series comparison T (triple) variants Series 1 and Q (Quad) variants Series 2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card-details">
                    <ul>
                        <li>Three or four high performance outputs each with full functionality</li>
                        <li>Range switching gives variable voltage/current combinations</li>
                        <li>Shared power mode provides double power from a single output</li>
                        <li>Low output noise and ripple via linear final regulation</li>
                        <li>High setting resolution of up to 1mV and 0.1mA</li>
                        <li>Variable OVP and OCP trips on all outputs which can be linked (MX-Q Series 2 units only)</li>
                        <li>Individual or combined output on/off control with programmable delay sequencing.</li>
                        <li>Selectable voltage tracking (isolated tracking)</li>
                        <li>Selectable current meter averaging</li>
                        <li>Switchable remote sense capability</li>
                        <li>Graphic LCD (colour on Series 2) provides simultaneous output metering</li>
                        <li>Numeric or spin-wheel control of all parameters</li>
                        <li>50 setting memories per output plus 50 linked memories</li>
                        <li>3U rack case for bench or rack mounting (4U rack kit accessory available)</li>
                        <li>RS-232, USB and LAN (LXI) interfaces (P models)</li>
                        <li>GPIB option (P models only)</li>
                        <li>Duplicate power &amp; sense terminals at rear (P models)</li>
                        <li>Software control from Test Bridge software (free download - P models only)</li>
                    </ul>
                    <br>
                    <div> <span><a href="https://resources.aimtti.com/datasheets/AIM-MX_Series_DC_Power_Supplies_Data_Sheet_EN_82100-1510-11.pdf" title="Link to this datasheet/brochure (opens in a new window or tab)" target="_blank"><img class="file-icon" alt="" title="application/pdf" src="<?php echo $domain ?>application-pdf.png"> Datasheet </a> - (PDF / English)</span> </div>
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
            alt="Aim-TTi-Instruments ' . $model['ModelName'] . ' DC Power Supply ">
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
                    <table class=" views-table cols-0">
                        <caption>
                            <h3>Product Tours</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/mx-series-power-supplies-product-tour">MX Series Power Supplies Product Tour - (HTML / English)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="views-table cols-0">
                        <caption>
                            <h3>Reviews</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/eev-blog-review-mx100tp">EEV Blog review MX100TP - (HTML / English)</a>
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
                                    <a href="/resources/mx100qp-firmware-file-main-v108-interface-v202">MX100QP firmware file (Main V1.08, Interface V2.02) - (HEX / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx100qp-s2-and-mx103qp-s2-firmware-file-main-v205-interface-v202">MX100QP S2 and MX103QP S2 firmware file (Main V2.05, Interface V2.02) - (HEX / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx100tp-firmware-file-main-v106-interface-v107">MX100TP firmware file (Main V1.06, Interface V1.07) - (HEX / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx180tp-firmware-file-main-v108-interface-v109">MX180TP firmware file (Main V1.08, Interface V1.09) - (HEX / English)</a>
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
                                    <a href="/resources/mx-series-power-supplies-ivi-driver-v122-32-bit">MX Series Power Supplies IVI Driver V1.22 32-bit - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx-series-power-supplies-ivi-driver-v122-64-bit">MX Series Power Supplies IVI Driver V1.22 64-bit - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx-series-power-supplies-combined-labview-driver-and-labwindows-cvi-driver-v122">MX Series Power Supplies, combined LabVIEW Driver and LabWindows CVI Driver V1.2.2 - (ZIP / English)</a>
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
                            <h3>Catalogues</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/aim-tti-power-supplies-summary-catalogue-2021">AIM-TTi Power Supplies summary catalogue 2021 - (PDF / English)</a>
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
                                    <a href="/resources/mx-series-dc-power-supplies-data-sheet-en-issue-11">MX Series DC Power Supplies Data Sheet EN Issue 11 - (PDF / English)</a>
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
                                    <a href="/resources/mx-q-mx-qp-series-2-instruction-manual-de-issue-1">MX-Q &amp; MX-QP Series 2 Instruction Manual DE Issue 1 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx-q-mx-qp-series-2-instruction-manual-en-issue-1">MX-Q &amp; MX-QP Series 2 Instruction Manual EN Issue 1 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx-q-mx-qp-series-2-instruction-manual-es-issue-1">MX-Q &amp; MX-QP Series 2 Instruction Manual ES Issue 1 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx-q-mx-qp-series-2-instruction-manual-fr-issue-1">MX-Q &amp; MX-QP Series 2 Instruction Manual FR Issue 1 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx-q-mx-qp-series-2-instruction-manual-it-issue-1">MX-Q &amp; MX-QP Series 2 Instruction Manual IT Issue 1 - (PDF / Italian)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx100q-mx100qp-instruction-manual-issue-2">MX100Q &amp; MX100QP Instruction Manual - Issue 2 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx100q-mx100qp-bedienungsanleitung-auf-deutsch-issue-2">MX100Q MX100QP Bedienungsanleitung auf Deutsch - Issue 2 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx100q-mx100qp-instrucciones-en-espanol-issue-2">MX100Q MX100QP Instrucciones en Espanol - Issue 2 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx100q-mx100qp-instructions-en-francais-issue-2">MX100Q MX100QP Instructions en Francais - Issue 2 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx100q-mx100qp-istruzioni-italiano-issue-2">MX100Q MX100QP Istruzioni in Italiano - Issue 2 - (PDF / Italian)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx100t-mx100tp-bedienungsanleitung-auf-deutsch-issue-8">MX100T &amp; MX100TP Bedienungsanleitung auf Deutsch - Issue 8 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx100t-mx100tp-instrucciones-en-espanol-issue-8">MX100T &amp; MX100TP Instrucciones en Espanol - Issue 8 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx100t-mx100tp-instruction-manual-issue-8">MX100T &amp; MX100TP Instruction Manual - Issue 8 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx100t-mx100tp-instructions-en-francais-issue-8">MX100T &amp; MX100TP Instructions en Francais - Issue 8 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx100t-mx100tp-istruzioni-italiano-issue-8">MX100T &amp; MX100TP Istruzioni in Italiano - Issue 8 - (PDF / Italian)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx180t-mx180tp-bedienungsanleitung-auf-deutsch-issue-7">MX180T &amp; MX180TP Bedienungsanleitung auf Deutsch - Issue 7 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx180t-mx180tp-instrucciones-en-espanol-issue-7">MX180T &amp; MX180TP Instrucciones en Espanol - Issue 7 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx180t-mx180tp-instruction-manual-issue-7">MX180T &amp; MX180TP Instruction Manual - Issue 7 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx180t-mx180tp-instructions-en-francais-issue-7">MX180T &amp; MX180TP Instructions en Francais - Issue 7 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/mx180t-mx180tp-istruzioni-italiano-issue-7">MX180T &amp; MX180TP Istruzioni in Italiano - Issue 7 - (PDF / Italian)</a>
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
                                    <a href="/resources/firmware-flash-update-utility">Firmware Flash update utility - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/lxi-discovery-tool">LXI discovery tool - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/test-bridge-software">Test Bridge Software - (MSI / English)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="views-table cols-0">
                        <caption>
                            <h3>YouTube Videos</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/aim-tti-mx-series-introductory-video">Aim-TTi MX Series introductory video - (YouTube Link / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/aim-tti-mx100t-dc-power-supply-introductory-video">Aim-TTi MX100T DC Power Supply introductory video - (YouTube Link / English)</a>
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