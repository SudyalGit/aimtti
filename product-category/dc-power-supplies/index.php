<?php
require_once '../../config/index.php';
require_once '../../php/variables.php';
require_once '../../php/functions.php';
?>

<?php

$sql = "SELECT * FROM `products` WHERE `CategoryId` = 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $products = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
    // print_r($products);
}

$mainHeading = "DC Power Supplies";
$pageTitle = "Aim-TTi Instruments - Test & Measurement Instruments and Power Supplies";
$pageDescription = "Aim-TTi India: Advanced electronic test and measurement equipment and laboratory power supplies for the Indian market";
$pageKeywords = "";
$pageUrl = __DIR__;
$pageImgUrl = "https://aimtti.co.in/assets/images/Aim-TTi-logo_220.png";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    setMeta($pageTitle, $pageDescription, $pageKeywords, $pageUrl, $pageImgUrl);
    ?>

    <!-- CSS FILES -->
    <link rel="stylesheet" href="<?= $domain; ?>assets/css/main.css">
    <link rel="stylesheet" href="<?= $domain; ?>assets/css/style.css">
</head>

<body>
    <?php require_once '../../includes/header.php'; ?>

    <div class="main">
        <?php require_once '../../includes/side-menu.php'; ?>
        <div class="content">
            <h1>
                <?= $mainHeading ?>
            </h1>

            <img class="banner"
                src="https://www.aimtti.com/sites/default/files/field/image/slideshow/AIM-MX-S2_MkIIIa.png" alt="">

            <div class="col-2 align-center p-10">
                <img src="https://www.aimtti.com/sites/default/files/category-image/DC_power_supplies_product_group_6c_1.jpg"
                    alt="">
                <p>
                    Laboratory DC power supplies intended for standard bench-top applications or remote control and
                    system use.
                    <br><br>
                    Single, dual, triple and quad output models with power from 30 watts up to 1200 watts. Isolated
                    outputs with automatic CV/CI crossover enabling series and parallel connection. Linear, Mixed-mode
                    or PowerFlex regulation. Remote control models with variants of Analogue, USB, RS232, GPIB and
                    LAN/LXI interfaces. Convection or quiet fan cooled, fitted with Aim-TTi safety terminals and most
                    models feature remote sense.
                    <br><br>
                    A DC Power Supplies Shortform Catalogue is also available
                    <br><br>
                    Find a power supply using the filters below or from the list of Product Series below that
                </p>
            </div>

            <div class="product-list-box">
                <h2>Select by Product Series</h2>

                <table class="product-series-table">
                    <tbody>
                        <?php
                        productListRender($products);
                        ?>
                    </tbody>
                </table>
            </div>


        </div>
    </div>

    <script src="<?= $domain; ?>assets/js/script.js"></script>
</body>

</html>