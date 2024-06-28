<?php require_once('../../../config/index.php');

$title = "Rack Mounts | Aim-TTi India India";
$heading = "Rack Mounts";

$sql = "SELECT * FROM `productmodels` WHERE `ProductId` = 39";
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
    <meta name="description" content="Aim-TTi Rack Mounts Rack mounts for Aim-TTi equipment" />
    <link rel="canonical" href="https://aimtti.co.in/product-category/product-accessories/aim-rackmounts" />
    <title>Rack Mounts | Aim-TTi India</title>

    <link rel="stylesheet" href="../../../assets/css/index.css">
</head>

<body>
    <?php require_once('../../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../../common/side-menu.php'); ?>

        <div class="content">
            <h1><?php echo $heading ?></h1>
            <h2>
                Rack mounts for Aim-TTi equipment
            </h2>

            <div class="product-card">
                <div class="product-card-carousel">
                    <div class="container">
                        <div class="mySlides">
                            <img class="model-for-image cursor" data-img="<?php echo $domain ?>sites/default/files/image/large/" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/rack-images-330.jpg?itok=42b2Yg1O" alt="">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>


                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="<?php echo $domain ?>sites/default/files/styles/product_medium/public/image/large/rack-images-330.jpg?itok=42b2Yg1O" style="width:100%" onclick="currentSlide(1)" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="product-card-details">
                    <ul>
                        <li>RM50A - 2U Rack Mount for bench instruments</li>
                        <li>RM200A - 2U Rack Mount for half rack instrument, includes 1/2 rack blanking plate</li>
                        <li>RM300A - 3U Rack Mount for half rack instrument, includes 1/2 rack blanking plate</li>
                        <li>RM410 - 4U Rack Mount for QL PSUs, includes two 1/3 rack blanking plates</li>
                        <li>RM460 - 4U Rack Mount for CPX, QPX and PL Series PSUs</li>
                        <li>RM1242/4 - 3U Rack Mount for 2 &amp; 4 channel TGA arbitrary generators</li>
                    </ul>
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
                            <h3>Drawings</h3>
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/resources/rm200a-rack-mount-kit-mechanical-drawing">RM200A Rack Mount Kit Mechanical Drawing - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm300-rack-mount-kit-mechanical-drawing">RM300 Rack Mount Kit Mechanical Drawing - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm310-rack-mount-kit-mechanical-drawing">RM310 Rack Mount Kit Mechanical Drawing - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm410-rack-mount-kit-mechanical-drawing">RM410 Rack Mount Kit Mechanical Drawing - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm420-rack-mount-kit-mechanical-drawing">RM420 Rack Mount Kit Mechanical Drawing - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm450a-rack-mount-kit-mechanical-drawing">RM450A Rack Mount Kit Mechanical Drawing - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm460-rack-mount-kit-mechanical-drawing">RM460 Rack Mount Kit Mechanical Drawing - (PDF / English)</a>
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
                                    <a href="/resources/rm200a-19-inch-rack-kit-instructions-issue-4">RM200A-19 inch Rack Kit Instructions - Issue 4 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm300a-19-inch-rack-kit-leaflet-issue-6">RM300A-19 inch Rack Kit Leaflet - Issue 6 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm310-qpx-series-rackmount-instruction-leaflet-issue-2">RM310 QPX Series Rackmount Instruction Leaflet - Issue 2 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm410-19-inch-rack-kit-instruction-leaflet-issue-1">RM410-19 inch Rack Kit Instruction Leaflet - Issue 1 - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm420-rack-kit-instructions-48511-1510-iss1a">RM420 rack kit instructions-48511-1510 Iss1A - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm450a-19-inch-rack-kit-instructions-issue-1a">RM450A-19 inch Rack Kit Instructions - Issue 1A - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm460-19-inch-rack-kit-instructions-iss1a">RM460-19 inch Rack Kit Instructions Iss1A - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm50a-assembly-instructions">RM50A Assembly Instructions - (PDF / English)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/resources/rm50a-19-inch-rack-assembly-instruction-leaflet-issue-1a">RM50A-19 inch Rack Assembly Instruction Leaflet - Issue 1A - (PDF / English)</a>
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