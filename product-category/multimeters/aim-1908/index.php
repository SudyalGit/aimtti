<?php require_once('../../../config/index.php');

$title = "1908 Series 5.5 digit Dual Measurement Bench Multimeter | Aim-TTi India India";
$heading = "1908 Series";

$sql = "SELECT * FROM `productmodels` WHERE `ProductId` = 20";
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
if($_COOKIE['selectedCurrency'] === 'USD'){
    $priceshow = 'PriceUSD';
}
if($_COOKIE['selectedCurrency'] === 'GBP'){
    $priceshow = 'PriceGBP';
}
if($_COOKIE['selectedCurrency'] === 'EUR'){
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
    <meta name="description" content="Aim-TTi 1908 Series 5.5 digit Dual Measurement Bench Multimeter with USB and optional RS232, LXI/LAN and GPIB interfaces" />
    <link rel="canonical" href="https://aimtti.co.in/product-category/multimeters/aim-1908" />
    <title>1908 Series 5.5 digit Dual Measurement Bench Multimeter | Aim-TTi India</title>

    <link rel="stylesheet" href="../../../assets/css/index.css">
</head>

<body>
    <?php require_once('../../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../../common/side-menu.php'); ?>

        <div class="content">
            <h1><?php echo $heading ?></h1>
            <h2>
                5.5 digit Dual Measurement Bench Multimeter with USB and optional RS232, LXI/LAN and GPIB interfaces
            </h2>

            <div class="product-card">
                <div class="product-card-carousel">
                    <div class="container">
                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-1908-fr2-1k_0.jpg?itok=Avpmy7Mi" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/1908R-fr-r_0.jpg?itok=90CwvKG-" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/1908-bk_0.jpg?itok=dXXzBfGf" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/1908R-fr-r_0.jpg?itok=90CwvKG-" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/1908-PC-Link-GUI.png?itok=JFh6h7d4" alt="">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>


                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-1908-fr2-1k_0.jpg?itok=Avpmy7Mi" style="width:100%" onclick="currentSlide(1)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/1908R-fr-r_0.jpg?itok=90CwvKG-" style="width:100%" onclick="currentSlide(2)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/1908-bk_0.jpg?itok=dXXzBfGf" style="width:100%" onclick="currentSlide(3)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/2U_half_rack_handle.jpg?itok=INNzIV2p" style="width:100%" onclick="currentSlide(4)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/1908-PC-Link-GUI.png?itok=JFh6h7d4" style="width:100%" onclick="currentSlide(5)" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card-details">
                    <ul>
                        <li>Affordable 5.5 digit high performance bench/portable multimeter</li>
                        <li>Dual display and dual measurement capability</li>
                        <li>Mains power or Internal rechargeable batteries for true portability</li>
                        <li>High accuracy and resolution: 0.02%, 1µV, 0.1µA, 1mΩ</li>
                        <li>True RMS AC, Frequency, capacitance and temperature measurements</li>
                        <li>Wide range of computing functions e.g. Ax + B</li>
                        <li>USB interface standard on 1908</li>
                        <li>USB, RS232 and LAN/LXI standard on 1908P with GPIB available as an option</li>
                    </ul>
                    <br>
                    <div> <span><a href="https://resources.aimtti.com/datasheets/AIM-1908_Multimeter_Data_Sheet_EN_82100-1530-5.pdf" title="Link to this datasheet/brochure (opens in a new window or tab)" target="_blank"><img class="file-icon" alt="" title="application/pdf" src="<?php echo $domain ?>application-pdf.png"> Datasheet </a> - (PDF / English)</span> </div>
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
                            <h3>Firmware Files</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/1908-firmware-v109102">1908 firmware V1.09/1.02 - (HEX / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/1908p-firmware-v109102109">1908P firmware V1.09/1.02/1.09 - (HEX / English)</a>
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
                                    <a href="/resources/1908-digital-multimeter-ivilabview-driver-32-bit-installer-v120">1908 Digital Multimeter, IVI/LabVIEW Driver (32-bit installer) V1.20 - (MSI / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/1908-digital-multimeter-ivilabview-driver-64-bit-installer-v120">1908 Digital Multimeter, IVI/LabVIEW Driver (64-bit installer) V1.20 - (MSI / English)</a>
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
                                    <a href="/resources/1908-multimeter-data-sheet-en-issue-5">1908 Multimeter Data Sheet EN Issue 5 - (PDF / English)</a>
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
                                    <a href="/resources/1908-bedienungsanleitung-auf-deutsch-issue-6">1908 Bedienungsanleitung auf Deutsch - Issue 6 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/1908-instrucciones-en-espanol-issue-6">1908 Instrucciones en Espanol - Issue 6 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/1908-instructions-en-francais-issue-6">1908 Instructions en Francais - Issue 6 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/1908-instuction-manual-issue-6">1908 Instuction Manual - Issue 6 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/1908-istruzioni-italiano-issue-6">1908 Istruzioni in Italiano - Issue 6 - (PDF / Italian)</a>
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
                                    <a href="/resources/1908-pc-link-v101">1908-PC Link V1.01 - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/firmware-flash-update-utility-1908">Firmware Flash update utility (1908) - (ZIP / English)</a>
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