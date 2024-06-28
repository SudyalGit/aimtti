<?php require_once('../../../config/index.php');

$title = "QPX Series Bench/System DC Power Supply | Aim-TTi India India";
$heading = "QPX Series";

$sql = "SELECT * FROM `productmodels` WHERE `ProductId` = 2";
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
    <meta name="description" content="Discover Aim-TTi QPX Series Bench/System DC Power Supply featuring PowerFlex or PowerFlex+ regulation, single or dual outputs up to 1200 watts. Available in India with or without digital remote interfaces." />
    <link rel="canonical" href="https://aimtti.co.in/product-category/dc-power-supplies/aim-qpxseries" />
    <title>QPX Series Bench/System DC Power Supply | Aim-TTi India</title>

    <link rel="stylesheet" href="../../../assets/css/index.css">
</head>

<body>
    <?php require_once('../../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../../common/side-menu.php'); ?>

        <div class="content">
            <h1><?php echo $heading ?></h1>
            <h2>
                Bench/System DC Power Supply with PowerFlex or PowerFlex+ regulation, Single or Dual Outputs up to 1200 watts, with/without Digital Remote Interfaces
            </h2>

            <div class="product-card">
                <div class="product-card-carousel">
                    <div class="container">
                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-QPX750_600_stack-1k.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX750_600_stack-1k.jpg" alt="Aim-TTi QPX750SP and QPX600DP composite">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-QPX750SP-1k_0.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX750SP-1k_0.jpg" alt="Aim-TTi QPX750SP Bench /System DC Power supply">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-QPX750SP-bk-1k.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX750SP-bk-1k.jpg" alt="Aim-TTi QPX750SP Bench /System DC Power supply - back panel with optional GPIB fitted">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-QPX1200-1k_0.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX1200-1k_0.jpg" alt="Aim-TTi QPX1200 Bench/System DC Power Supply">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-QPX1200SP-bk-1k.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX1200SP-bk-1k.jpg" alt="Aim-TTi QPX1200DP back panel with optional GPIB fitted">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-QPX600D-1k_0.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX600D-1k_0.jpg" alt="Aim-TTi QPX600L dual channel Bench/System DC Power Supply">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-QPX600DP-bk-1k.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX600DP-bk-1k.jpg" alt="Aim-TTi QPX600DP back panel with optional GPIB fitted">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-QPX-power-envelopes.png" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX-power-envelopes.png" alt="Aim-TTi QPX Series PowerFlex power envelopes">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-Test_Bridge-1000px_4.png" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-Test_Bridge-1000px_4.png" alt="Test Bridge Software for Aim-TTi power products">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>


                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX750_600_stack-1k.jpg" style="width:100%" onclick="currentSlide(1)" alt="Aim-TTi QPX750SP and QPX600DP composite">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX750SP-1k_0.jpg" style="width:100%" onclick="currentSlide(2)" alt="Aim-TTi QPX750SP Bench /System DC Power supply">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX750SP-bk-1k.jpg" style="width:100%" onclick="currentSlide(3)" alt="Aim-TTi QPX750SP Bench /System DC Power supply - back panel with optional GPIB fitted">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX1200-1k_0.jpg" style="width:100%" onclick="currentSlide(4)" alt="Aim-TTi QPX1200 Bench/System DC Power Supply">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX1200SP-bk-1k.jpg" style="width:100%" onclick="currentSlide(5)" alt="Aim-TTi QPX1200DP back panel with optional GPIB fitted">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX600D-1k_0.jpg" style="width:100%" onclick="currentSlide(6)" alt="Aim-TTi QPX600L dual channel Bench/System DC Power Supply">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX600DP-bk-1k.jpg" style="width:100%" onclick="currentSlide(7)" alt="Aim-TTi QPX600DP back panel with optional GPIB fitted">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QPX-power-envelopes.png" style="width:100%" onclick="currentSlide(8)" alt="Aim-TTi QPX Series PowerFlex power envelopes">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-Test_Bridge-1000px_4.png" style="width:100%" onclick="currentSlide(9)" alt="Test Bridge Software for Aim-TTi power products">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card-details">
                    <ul>
                        <li>Wide range of voltage/current combinations</li>
                        <li>Up to 80V and up to 50A within the same power envelope</li>
                        <li>Low output ripple and noise of &lt;3mV rms at full power</li>
                        <li>High setting resolution of 1mV</li>
                        <li>Analogue control interfaces for voltage and current</li>
                        <li>Bench or rack mounting, front and rear terminals</li>
                        <li>USB and LAN (LXI) interfaces with GPIB optional (QPX600DP, QPX1200SP and QPX750SP)</li>
                    </ul>
                    <br>
                    <div> <span><a href="https://resources.aimtti.com/datasheets/AIM-QPX_Series_DC_Power_Supplies_Data_Sheet_EN_82100-1580-3.pdf" title="Link to this datasheet/brochure (opens in a new window or tab)" target="_blank"><img class="file-icon" alt="" title="application/pdf" src="<?php echo $domain ?>application-pdf.png"> Datasheet </a> - (PDF / English)</span> </div>
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
            alt="Aim-TTi India ' . $model['ModelName'] . ' DC Power Supply ">
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
                            <h3>Recall Notices</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/product-safety-recall-qpx750sp-mar-2024">PRODUCT SAFETY RECALL - QPX750SP MAR 2024 - (PDF / English)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="views-table cols-0">
                        <caption>
                            <h3>Product Tours</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/qpx-series-dc-power-supplies-product-tour">QPX Series DC Power Supplies Product Tour - (HTML / English)</a>
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
                                    <a href="/resources/qpx1200-firmware-update-v4-hardware-v429-408">QPX1200 Firmware Update for V4 Hardware (V4.29-4.08) - (HEX / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200-interface-firmware-update-v408">QPX1200 Interface Firmware Update V4.08 - (HEX / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx600dp-firmware-update-v209">QPX600DP Firmware Update V2.09 - (HEX / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx750sp-firmware-version-103">QPX750SP firmware version 1.03 - (ZIP / English)</a>
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
                                    <a href="/resources/qpx-series-power-supplies-combined-labview-driver-and-labwindows-cvi-driver-v141">QPX series Power Supplies combined LabVIEW Driver and LabWindows CVI Driver V1.4.1 - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx-series-power-supplies-ivi-driver-v141">QPX series Power Supplies IVI Driver V1.4.1 - (ZIP / English)</a>
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
                            <h3>Drawings</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200-power-supplies-mechanical-drawing">QPX1200 Power Supplies Mechanical Drawing - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx600-power-supplies-mechanical-drawing">QPX600 Power Supplies Mechanical Drawing - (PDF / English)</a>
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
                                    <a href="/resources/qpx-series-dc-power-supplies-data-sheet-en-issue-3">QPX Series DC Power Supplies Data Sheet EN Issue 3 - (PDF / English)</a>
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
                                    <a href="/resources/qpx1200-bedienungsanleitung-auf-deutsch-issue-3">QPX1200 Bedienungsanleitung auf Deutsch - Issue 3 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200-instrucciones-en-espanol-issue-3">QPX1200 Instrucciones en Espanol - Issue 3 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200-instruction-manual-issue-3">QPX1200 Instruction Manual - Issue 3 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200-instructions-en-francais-issue-3">QPX1200 Instructions en Francais - Issue 3 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200-istruzioni-italiano-issue-3">QPX1200 Istruzioni in Italiano - Issue 3 - (PDF / Italian)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200l-bedienungsanleitung-auf-deutsch-issue-8">QPX1200L Bedienungsanleitung auf Deutsch - Issue 8 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200l-instrucciones-en-espanol-issue-8">QPX1200L Instrucciones en Espanol - Issue 8 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200l-instruction-manual-issue-8">QPX1200L Instruction Manual - Issue 8 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200l-instructions-en-francais-issue-8">QPX1200L Instructions en Francais - Issue 8 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200l-istruzioni-italiano-issue-8">QPX1200L Istruzioni in Italiano - Issue 8 - (PDF / Italian)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200s-sp-bedienungsanleitung-auf-deutsch-issue-13">QPX1200S &amp; SP Bedienungsanleitung auf Deutsch - Issue 13 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200s-sp-instrucciones-en-espanol-issue-13">QPX1200S &amp; SP Instrucciones en Espanol - Issue 13 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200s-sp-instruction-manual-issue-13">QPX1200S &amp; SP Instruction Manual - Issue 13 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200s-sp-instructions-en-francais-issue-13">QPX1200S &amp; SP Instructions en Francais - Issue 13 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx1200s-sp-istruzioni-italiano-issue-13">QPX1200S &amp; SP Istruzioni in Italiano - Issue 13 - (PDF / Italian)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx600-addendum-48511-1461-iss1">QPX600 Addendum 48511-1461 Iss1 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx600d-dp-bedienungsanleitung-auf-deutsch-issue-14">QPX600D &amp; DP Bedienungsanleitung auf Deutsch - Issue 14 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx600d-dp-instrucciones-en-espanol-issue-14">QPX600D &amp; DP Instrucciones en Espanol - Issue 14 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx600d-dp-instruction-manual-issue-14">QPX600D &amp; DP Instruction Manual - Issue 14 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx600d-dp-instructions-en-francais-issue-14">QPX600D &amp; DP Instructions en Francais - Issue 14 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx600d-dp-istruzioni-italiano-issue-14">QPX600D &amp; DP Istruzioni in Italiano - Issue 14 - (PDF / Italian)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx750sp-bedienungsanleitung-auf-deutsch-issue-1">QPX750SP Bedienungsanleitung auf Deutsch - Issue 1 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx750sp-instrucciones-en-espanol-issue-1">QPX750SP Instrucciones en Espanol - Issue 1 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx750sp-instruction-manual-issue-1">QPX750SP Instruction Manual - Issue 1 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx750sp-instructions-en-francais-issue-1">QPX750SP Instructions en Francais - Issue 1 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/qpx750sp-istruzioni-italiano-issue-1">QPX750SP Istruzioni in Italiano - Issue 1 - (PDF / Italian)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm310-qpx-series-rackmount-instruction-leaflet-issue-2">RM310 QPX Series Rackmount Instruction Leaflet - Issue 2 - (PDF / English)</a>
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
                            <tr>
                                <td>
                                    <a href="/resources/tti-firmware-transfer-utility">TTi Firmware Transfer Utility - (ZIP / English)</a>
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