<?php require_once('../../../config/index.php');

$title = "PSA Series 5 Handheld RF Spectrum Analyzer | Aim-TTi India India";
$heading = "PSA Series 5";

$sql = "SELECT * FROM `productmodels` WHERE `ProductId` = 26";
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





$sql = "SELECT * FROM `productmodels` WHERE `ImageURL` = 'options' AND `ModelName` = 'PSA U02 Option'";
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




$sql = "SELECT * FROM `productmodels` WHERE `ImageURL` = 'access' AND (ModelName = 'PSA-VC' OR ModelName = 'PSA-ANT2' OR ModelName = 'PSA-SC2' OR ModelName = 'PSA-CK')";
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
    <meta name="description" content="Aim-TTi PSA Series 5 Handheld RF Spectrum Analyzer with 10MHz to 3.6 or 6.0GHz bandwidth options" />
    <link rel="canonical" href="https://aimtti.co.in/product-category/spectrum-analyzers/aim-psaseries5" />
    <title>PSA Series 5 Handheld RF Spectrum Analyzer | Aim-TTi India</title>

    <link rel="stylesheet" href="../../../assets/css/index.css">
</head>

<body>
    <?php require_once('../../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../../common/side-menu.php'); ?>

        <div class="content">
            <h1><?php echo $heading ?></h1>
            <h2>
                Handheld RF Spectrum Analyzer with 10MHz to 3.6 or 6.0GHz bandwidth options
            </h2>

            <div class="product-card">
                <div class="product-card-carousel">
                    <div class="container">
                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/PSA6005-1000px.jpg?itok=dFtGg7By" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-PSA_5_Stylus_1k.jpg?itok=M2v_GbA2" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-PSA_Series5_up_L_1k.jpg?itok=kokYUP5a" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-PSA_Series5_up_R_1k.jpg?itok=TDHVBG7e" alt="">
                        </div>

                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-PSA_Series5_kit_1k.jpg?itok=uG2Sg5-w" alt="">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>


                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/PSA6005-1000px.jpg?itok=dFtGg7By" style="width:100%" onclick="currentSlide(1)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-PSA_5_Stylus_1k.jpg?itok=M2v_GbA2" style="width:100%" onclick="currentSlide(2)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-PSA_Series5_up_L_1k.jpg?itok=kokYUP5a" style="width:100%" onclick="currentSlide(3)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-PSA_Series5_up_R_1k.jpg?itok=TDHVBG7e" style="width:100%" onclick="currentSlide(4)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/AIM-PSA_Series5_kit_1k.jpg?itok=uG2Sg5-w" style="width:100%" onclick="currentSlide(5)" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card-details">
                    <p>True hand-held battery powered RF spectrum analyzers.</p>

                    <ul>
                        <li>10MHz to 3600MHz or 6000MHz frequency range</li>
                        <li>Resolution bandwidths from 300Hz to 10MHz (1:3:10)</li>
                        <li>-120dBm typical noise floor at -40dBm ref. level/10kHz RBW</li>
                        <li>Measurement in dBm or dBµV, mV or µW</li>
                        <li>Zero span mode with AM and FM audio demodulation</li>
                        <li>Trace modes of normal, peak hold and trace average</li>
                        <li>Live, View and Reference traces in contrasting colours</li>
                        <li>Twin markers with readout of absolute &amp; difference values</li>
                        <li>Smart marker movement with selectable peak tracking</li>
                        <li>Frequency counter with down to 10Hz resolution</li>
                        <li>Frequency presets and independent state storage</li>
                        <li>Auto-find automatically sets sweep parameters for the highest signal found</li>
                        <li>Unlimited storage for waveforms, set-ups and screens</li>
                        <li>User assignable file names, file stamping from real-time clock</li>
                        <li>USB interfaces for Flash drives and PC connection</li>
                        <li>Comprehensive status and context sensitive help screens</li>
                        <li>Rechargeable lithium ion battery giving more than 3 hours continuous operation from a charge</li>
                        <li>Smaller and lighter than other spectrum analyzers (weight only 0.56 kg)</li>
                        <li><strong>Additional features - with option U02:</strong>
                            <ul>
                                <li>High Resolution Scan Mode - up to 210,000 points with pan and zoom</li>
                                <li>Limit lines and limit patterns with limits comparator</li>
                                <li>Data logging of peak values, complete traces or screen images from timer, external trigger or limits comparator</li>
                                <li>Automatic Measurements for CP, ACPR and OBW</li>
                                <li>Waveform demodulation for AM and FM signals</li>
                                <li>Sweep triggering from external trigger or limits comparator</li>
                                <li>Compensation tables, fixed offsets and 75R compensation</li>
                                <li>Custom Presets - fast change for repetitive setups</li>
                                <li>Capability to show screen contents on a PC</li>
                            </ul>
                        </li>
                    </ul>
                    <br>
                    <div> <span><a href="https://resources.aimtti.com/datasheets/AIM-PSA_series_5_spectrum_analyzers_data_sheet-Iss4.pdf" title="Link to this datasheet/brochure (opens in a new window or tab)" target="_blank"><img class="file-icon" alt="" title="application/pdf" src="<?php echo $domain ?>application-pdf.png"> Datasheet </a> - (PDF / English)</span> </div>
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
                                    <a href="/resources/psa-spectrum-analyzers-product-tour">PSA Spectrum Analyzers Product Tour - (HTML / English)</a>
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
                                    <a href="/resources/psa-series-5-firmware-update-v403">PSA Series 5 firmware update V4.03 - (ZIP / English)</a>
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
                                    <a href="/resources/psa-series-5-spectrum-analyzers-datasheet-issue-4">PSA Series 5 spectrum analyzers datasheet - issue 4 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/psa-series-u01-and-u02-option-features">PSA Series U01 and U02 Option Features - (PDF / English)</a>
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
                                    <a href="/resources/psa-safety-document-and-quick-start-guide-issue-2">PSA Safety Document and Quick Start Guide Issue 2 - (PDF / English, French, German, Italian, Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/psa-manager-changes">PSA-Manager Changes - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/psa-manager-user-guide-v2">PSA-Manager User Guide V2 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/psa-manager-user-guide-v3">PSA-Manager User Guide V3 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/psa6005-psa3605-breve-guida-italiano-issue-3">PSA6005 &amp; PSA3605 Breve guida in Italiano - Issue 3 - (PDF / Italian)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/psa6005-psa3605-english-shortguide-issue-3">PSA6005 &amp; PSA3605 English ShortGuide - Issue 3 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/psa6005-psa3605-guia-rapida-en-es-espanol-issue-3">PSA6005 &amp; PSA3605 Guia rapida en es Espanol - Issue 3 - (PDF / Spanish)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/psa6005-psa3605-guide-succinct-en-francais-issue-3">PSA6005 &amp; PSA3605 Guide succinct en Francais - Issue 3 - (PDF / French)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/psa6005-psa3605-kurzanleitung-issue-3">PSA6005 &amp; PSA3605 Kurzanleitung - Issue 3 - (PDF / German)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/psa6005-3605-instruction-manual-issue-7">PSA6005 3605 Instruction Manual - Issue 7 - (PDF / English)</a>
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
                                    <a href="/resources/psa-manager-v30">PSA Manager V3.0 - (EXE / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/psa-view-v110">PSA View V1.10 - (ZIP / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/software-option-unlock-key-file-generation">Software Option Unlock Key File Generation - (HTML / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/test-bridge-psa-software">Test Bridge PSA Software - (ZIP / English)</a>
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