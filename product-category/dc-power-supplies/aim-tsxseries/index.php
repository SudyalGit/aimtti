<?php require_once('../../../config/index.php');

$heading = "TSX Series";

$sql = "SELECT * FROM `productmodels` WHERE `ProductId` = 4";
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




$sql = "SELECT * FROM `productmodels` WHERE `ImageURL` = 'access' AND ModelName = 'RM300A'";
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
    <meta name="description" content="Discover Aim-TTi TSX Series Bench/System silent DC Power Supply with mixed-mode regulation, offering single output up to 360 watts. Available in India with or without remote interfaces." />
    <link rel="canonical" href="https://aimtti.co.in/product-category/dc-power-supplies/aim-tsxseries" />
    <title>TSX Series Bench/System silent DC Power Supply with mixed-mode regulation | Aim-TTi India</title>

    <link rel="stylesheet" href="../../../assets/css/index.css">
</head>

<body>
    <?php require_once('../../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../../common/side-menu.php'); ?>

        <div class="content">
            <h1><?php echo $heading ?></h1>
            <h2>
                Bench/System silent DC Power Supply with mixed-mode regulation - single output up to 360 watts, with/without remote interfaces
            </h2>

            <div class="product-card">
                <div class="product-card-carousel">
                    <div class="container">
                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-TSX3510P-1k_0.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TSX3510P-1k_0.jpg" alt="Aim-TTi TSX3510P (TSX Series) DC Power supply">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-TSX1820-1k.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TSX1820-1k.jpg" alt="Aim-TTi TSX1820 (TSX Series) DC Power supply">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-Test_Bridge-1000px_5.png" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-Test_Bridge-1000px_5.png" alt="Test Bridge Software for Aim-TTi power products">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>


                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TSX3510P-1k_0.jpg" style="width:100%" onclick="currentSlide(1)" alt="Aim-TTi TSX3510P (TSX Series) DC Power supply">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-TSX1820-1k.jpg" style="width:100%" onclick="currentSlide(2)" alt="Aim-TTi TSX1820 (TSX Series) DC Power supply">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-Test_Bridge-1000px_5.png" style="width:100%" onclick="currentSlide(3)" alt="Test Bridge Software for Aim-TTi power products">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card-details">
                    <ul>
                        <li>Compact &amp; lightweight power supply</li>
                        <li>0 to 18V at 0 to 20A or 0 to 35V at 0 to 10A</li>
                        <li>Bench or rack mounting, front &amp; rear terminals</li>
                        <li>Silent fan-less convection cooling</li>
                        <li>Very low noise, excellent transient response</li>
                        <li>Comprehensive protection including OVP trip</li>
                        <li>High setting resolution, remote sense terminals</li>
                        <li>Analogue controls</li>
                    </ul>
                    <p>P LXI versions add:</p>
                    <ul>
                        <li>USB, RS232 and LAN interfaces as standard</li>
                        <li>Optional GPIB interface</li>
                        <li>Keyboard setting of all parameters</li>
                        <li>Rotary and delta (step) control of V and I</li>
                        <li>Watts display, non-volatile storage of 25 settings</li>
                        <li>Fully programmable with bus readback of V &amp; I</li>
                    </ul>
                    <br>
                    <div> <span><a href="https://resources.aimtti.com/datasheets/AIM-TSX_Series_II_DC_Power_Supplies_Data_Sheet_EN_82100-0044-3.pdf" title="Link to this datasheet/brochure (opens in a new window or tab)" target="_blank"><img class="file-icon" alt="" title="application/pdf" src="<?php echo $domain ?>application-pdf.png"> Datasheet </a> - (PDF / English)</span> </div>
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
                            <h3>Firmware Files</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/tsx-p-firmware-version-104">TSX-P Firmware version 1.04 - (HEX / English)</a>
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
                                    <a href="/resources/tsx-p-series-combined-labview-and-labwindows-cvi-driver-v11">TSX-P series combined LabVIEW and LabWindows CVI driver V1.1 - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tsx-p-series-ivi-driver-v11">TSX-P series IVI driver V1.1 - (ZIP / English)</a>
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
                                    <a href="/resources/tsx-series-ii-dc-power-supplies-data-sheet-en-issue-3">TSX Series II DC Power Supplies Data Sheet EN Issue 3 - (PDF / English)</a>
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
                                    <a href="/resources/tsx-series-i-instruction-manual-issue-16">TSX Series I Instruction Manual - Issue 16 - (PDF / English, French, German, Italian, Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tsx-series-ii-instruction-manual-issue-1">TSX Series II Instruction Manual - Issue 1 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tsx-p-series-i-instruction-manual-issue-18">TSX-P Series I Instruction Manual - Issue 18 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tsx-p-series-ii-bedienungsanleitung-auf-deutsch-issue-1">TSX-P Series II Bedienungsanleitung auf Deutsch - Issue 1 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tsx-p-series-ii-instruction-manual-issue-1">TSX-P Series II Instruction Manual - Issue 1 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/tsx-p-series-ii-instructions-en-francais-issue-1">TSX-P Series II Instructions en Francais - Issue 1 - (PDF / French)</a>
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