<?php require_once('../../../config/index.php');

$heading = "QL Series II";

$sql = "SELECT * FROM `productmodels` WHERE `ProductId` = 5";
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




$sql = "SELECT * FROM `productmodels` WHERE `ImageURL` = 'access' AND ModelName = 'RM410'";
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
    <meta name="description" content="Explore Aim-TTi QL Series II Bench/System Precision Linear Regulated DC Power Supply with digital control, offering single or triple outputs and 105 to 242 watts power capacity. Available in India with or without remote interfaces." />
    <link rel="canonical" href="https://aimtti.co.in/product-category/dc-power-supplies/aim-qlseries" />
    <title>QL Series II Bench/System Precision Linear Regulated DC Power Supply | Aim-TTi India</title>

    <link rel="stylesheet" href="../../../assets/css/index.css">
</head>

<body>
    <?php require_once('../../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../../common/side-menu.php'); ?>

        <div class="content">
            <h1><?php echo $heading ?></h1>
            <h2>
                Bench/System Precision Linear Regulated DC Power Supply with digital control, single or triple Outputs, 105 to 242 watts, with/without Remote Interfaces
            </h2>

            <div class="product-card">
                <div class="product-card-carousel">
                    <div class="container">
                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-QL564P-1k.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QL564P-1k.jpg?itok=bs5gMfLN" alt="Aim-TTi QL564P (QL series) DC power supply">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-QL355TP-1k.jpg" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QL355TP-1k.jpg?itok=RnJjyiVl" alt="Aim-TTi QL355TP (QL series) DC power supply">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/AIM-Test_Bridge-1000px_3.png" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-Test_Bridge-1000px_3.png?itok=ki4TJQBt" alt="Test Bridge Software for Aim-TTi power products">
                        </div>


                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>


                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QL564P-1k.jpg?itok=bs5gMfLN" style="width:100%" onclick="currentSlide(1)" alt="Aim-TTi QL564P (QL series) DC power supply">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-QL355TP-1k.jpg?itok=RnJjyiVl" style="width:100%" onclick="currentSlide(2)" alt="Aim-TTi QL355TP (QL series) DC power supply">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-Test_Bridge-1000px_3.png?itok=ki4TJQBt" style="width:100%" onclick="currentSlide(3)" alt="Test Bridge Software for Aim-TTi power products">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card-details">
                    <ul>
                        <li>Advanced dc power supplies, single or triple output</li>
                        <li>Up to 112 watts per output</li>
                        <li>Very high precision, very low noise, excellent dynamics</li>
                        <li>Advanced user interface with numeric and rotary control</li>
                        <li>Multiple voltage/current ranges for increased flexibility</li>
                        <li>Multiple non-volatile memories for power supply set-ups</li>
                        <li>Switchable remote sense provides perfect load regulation</li>
                        <li>Comprehensive protection including OVP and OCP trips</li>
                        <li>Compact bench footprint; modular width for rack mounting</li>
                        <li>Auxiliary output fully variable 1.00V to 6.00V at 3A with selectable voltage and current metering (T models)</li>
                        <li>Bus programmable via USB, RS232, GPIB or LAN (P models)</li>
                        <li>LAN interface is LXI compliant</li>
                        <li>Duplicate power and sense terminals at rear (P models)</li>
                    </ul>
                    <br>
                    <div> <span><a href="https://resources.aimtti.com/datasheets/AIM-QL_Series_II_DC_Power_Supplies_Data_Sheet_EN_82100-1190-4.pdf" title="Link to this datasheet/brochure (opens in a new window or tab)" target="_blank"><img class="file-icon" alt="" title="application/pdf" src="<?php echo $domain ?>application-pdf.png"> Datasheet </a> - (PDF / English)</span> </div>
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


                <table id="model-title-product" class="data-table">
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
                </table>

                <table id="model-title-accessories" class="data-table hide">
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
                                    <a href="/resources/ql-series-dc-power-supplies-product-tour">QL Series DC Power Supplies Product Tour - (HTML / English)</a>
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
                                    <a href="/resources/ql-series-ii-interface-firmware-v208">QL Series II Interface firmware V2.08 - (HEX / English)</a>
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
                                    <a href="/resources/ql-p-series-power-supplies-ivi-driver-v180">QL-P series Power Supplies IVI driver V1.8.0 - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/ql-p-series-power-supplies-labview-and-cvi-driver-v180-0">QL-P series Power Supplies LabVIEW and CVI driver V1.8.0 - (ZIP / English)</a>
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
                                    <a href="/resources/ql-series-single-output-power-supplies-mechanical-drawing">QL Series Single Output Power Supplies Mechanical Drawing - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/ql-series-triple-output-power-supplies-mechanical-drawing">QL Series Triple Output Power Supplies Mechanical Drawing - (PDF / English)</a>
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
                                    <a href="/resources/ql-series-ii-dc-power-supplies-data-sheet-en-issue-4">QL Series II DC Power Supplies Data Sheet EN Issue 4 - (PDF / English)</a>
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
                                    <a href="/resources/ql-series-ii-bedienungsanleitung-auf-deutsch-issue-8">QL Series II Bedienungsanleitung auf Deutsch - Issue 8 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/ql-series-ii-instrucciones-en-espanol-issue-8">QL Series II Instrucciones en Espanol - Issue 8 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/ql-series-ii-instruction-manual-issue-8">QL Series II Instruction Manual - Issue 8 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/ql-series-ii-instructions-en-francais-issue-8">QL Series II Instructions en Francais - Issue 8 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/ql-series-ii-istruzioni-italiano-issue-8">QL Series II Istruzioni in Italiano - Issue 8 - (PDF / Italian)</a>
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