<?php require_once('../../../config/index.php');

$heading = "CPX Series";

$title = "CPX400D Bench Power Supply /System/ATE Programmable DC Power Supply | Dual Output 2 x 60V/20A 420W | Aim-TTi-Instruments";
$description = "Explore the CPX400D Bench/System/ATE Programmable DC Power Supply from Aim-TTi. Featuring dual outputs of 2 x 60V/20A 420W, this model is ideal for demanding applications. No interfaces included. Discover more at Aim-TTi India.";
$url = "https://aimtti.co.in/product-category/dc-power-supplies/cpx400d";
$imageurl = "https://aimtti.co.in/sites/default/files/CPX400D-1000px.jpg";

$sql = "SELECT * FROM `productmodels` WHERE `ProductId` = 1";
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

// echo $_COOKIE['selectedCurrency'];

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

    <link rel="stylesheet" href="../../../assets/css/index.css">
</head>

<body>
    <?php require_once('../../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../../common/side-menu.php'); ?>

        <div class="content">
            <h1><?php echo $heading ?></h1>
            <h2>
                Bench/System/ATE Programmable DC Power Supply Single or Dual Outputs, 360 to 840 watts, with or without Remote Interfaces
            </h2>

            <div class="product-card">
                <div class="product-card-carousel">
                    <div class="container">
                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-CPX400DP-1k.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-CPX400DP-1k.jpg" alt="Aim-TTi CPX400DP (CPX Series) DC Bench power supply">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-CPX400SP-1k.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-CPX400SP-1k.jpg" alt="Aim-TTi CPX400SP (CPX Series) DC Bench power supply">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/cpx-pwr-curves.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/cpx-pwr-curves.jpg" alt="Aim-TTi CPX Series Power Envelope">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-Test_Bridge-1000px.png" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-Test_Bridge-1000px.png" alt="Test Bridge Software for Aim-TTi power products">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>


                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-CPX400DP-1k.jpg" style="width:100%" onclick="currentSlide(1)" alt="Aim-TTi CPX400DP (CPX Series) DC Bench power supply">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-CPX400SP-1k.jpg" style="width:100%" onclick="currentSlide(2)" alt="Aim-TTi CPX400SP (CPX Series) DC Bench power supply">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/cpx-pwr-curves.jpg" style="width:100%" onclick="currentSlide(3)" alt="Aim-TTi CPX Series Power Envelope">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-Test_Bridge-1000px.png" style="width:100%" onclick="currentSlide(4)" alt="Test Bridge Software for Aim-TTi power products">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card-details">
                    <ul>
                        <li>PowerFlex design gives variable voltage and current combinations within a maximum power range</li>
                        <li>Up to 60 volts and up to 20 amps</li>
                        <li>180 watts or 420 watts maximum per output</li>
                        <li>Isolated outputs can be wired in series or parallel</li>
                        <li>Constant voltage or constant current operation</li>
                        <li>Settings Locking (S-Lock)</li>
                        <li>PowerFlex or fixed-range operation</li>
                        <li>Variable OVP trips</li>
                        <li>Selectable remote sense terminals</li>
                        <li>Compact quarter or half rack 3U case size</li>
                        <li>Isolated analogue remote control (CPX400SA only)</li>
                        <li>RS232, USB &amp; LXI compliant LAN (P models only)</li>
                        <li>GPIB Option (P models only)</li>
                    </ul>
                    <br>
                    <div> <span><a href="https://resources.aimtti.com/datasheets/AIM-CPX_Series_DC_Power_Supplies_Data_sheet_EN_82100-1400-8.pdf" title="Link to this datasheet/brochure (opens in a new window or tab)" target="_blank"><img class="file-icon" alt="" title="application/pdf" src="<?php echo $domain ?>application-pdf.png"> Datasheet </a> - (PDF / English)</span> </div>
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
                                    <a href="/resources/cpx-series-dc-power-supplies-product-tour">CPX Series DC Power Supplies Product Tour - (HTML / English)</a>
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
                                    <a href="/resources/cpx-series-interface-firmware-file-v420">CPX Series Interface firmware file V4.20 - (HEX / English)</a>
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
                                    <a href="/resources/cpx-series-combined-labview-and-labwindows-cvi-driver-v140">CPX Series combined LabVIEW and LabWindows CVI Driver V1.4.0 - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx-series-power-supplies-ivi-driver-v140">CPX Series Power Supplies IVI Driver V1.4.0 - (ZIP / English)</a>
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
                                    <a href="/resources/cpx400dp-mechanical-drawing">CPX400DP Mechanical Drawing - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400sp-mechanical-drawing">CPX400SP Mechanical Drawing - (PDF / English)</a>
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
                                    <a href="/resources/cpx-series-dc-power-supplies-data-sheet-en-issue-8">CPX Series DC Power Supplies Data sheet EN Issue 8 - (PDF / English)</a>
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
                                    <a href="/resources/cpx200-instruction-manual-issue-13">CPX200 Instruction Manual - Issue 13 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx200d-dp-bedienungsanleitung-auf-deutsch-issue-9">CPX200D &amp; DP Bedienungsanleitung auf Deutsch - Issue 9 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx200d-dp-instrucciones-en-espanol-issue-9">CPX200D &amp; DP Instrucciones en Espanol - Issue 9 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx200d-dp-instruction-manual-issue-9">CPX200D &amp; DP Instruction Manual - Issue 9 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx200d-dp-instructions-en-francais-issue-9">CPX200D &amp; DP Instructions en Francais - Issue 9 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx200d-dp-istruzioni-italiano-issue-9">CPX200D &amp; DP Istruzioni in Italiano - Issue 9 - (PDF / Italian)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400-instruction-manual">CPX400 Instruction Manual - (PDF / English, French, German, Italian, Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400a-instruction-manual-issue-5">CPX400A Instruction Manual - Issue 5 - (PDF / English, French, German, Italian, Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400d-dp-bedienungsanleitung-auf-deutsch-issue-14">CPX400D &amp; DP Bedienungsanleitung auf Deutsch - Issue 14 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400d-dp-instrucciones-en-espanol-issue-14">CPX400D &amp; DP Instrucciones en Espanol - Issue 14 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400d-dp-instruction-manual-issue-14">CPX400D &amp; DP Instruction Manual - Issue 14 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400d-dp-instructions-en-francais-issue-14">CPX400D &amp; DP Instructions en Francais - Issue 14 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400d-dp-istruzioni-italiano-issue-14">CPX400D &amp; DP Istruzioni in Italiano - Issue 14 - (PDF / Italian)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400s-sa-sp-bedienungsanleitung-auf-deutsch-issue-10">CPX400S, SA &amp; SP Bedienungsanleitung auf Deutsch - Issue 10 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400s-sa-sp-instrucciones-en-espanol-issue-10">CPX400S, SA &amp; SP Instrucciones en Espanol - Issue 10 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400s-sa-sp-instruction-manual-issue-10">CPX400S, SA &amp; SP Instruction Manual - Issue 10 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400s-sa-sp-instructions-en-francais-issue-10">CPX400S, SA &amp; SP Instructions en Francais - Issue 10 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/cpx400s-sa-sp-istruzioni-italiano-issue-10">CPX400S, SA &amp; SP Istruzioni in Italiano - Issue 10 - (PDF / Italian)</a>
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