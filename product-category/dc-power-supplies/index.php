<?php require_once('../../config/index.php');

$heading = "DC Power Supplies";

$title = "DC Power Supplies | Aim-TTi-Instruments";
$description = "Bench and Laboratory Programmable DC Power Supplies, single or multiple channels, available in India";
$url = "https://aimtti.co.in/product-category/dc-power-supplies";
$imageurl = "https://aimtti.co.in/sites/default/files/category-image/DC_power_supplies_product_group_6c_1.jpg";

$sql = "SELECT * FROM `products` WHERE `CategoryId` = 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $products = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
    // print_r($products);
} else {
    // echo "No results found";
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

    <link rel="stylesheet" href="<?php echo $domain; ?>assets/css/index.css">
</head>

<body>
    <?php require_once('../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../common/side-menu.php'); ?>

        <div class="content">

            <img class="banner" src="<?php echo $domain; ?>sites/default/files/field/image/slideshow/AIM-MX-S2_MkIIIa.png" alt="New MX Series 2 Quad channel models">

            <div>
                <h1><?php echo $heading ?></h1>
            </div>

            <div class="main-category-card">
                <img src="<?php echo $domain; ?>sites/default/files/category-image/DC_power_supplies_product_group_6c_1.jpg" alt="DC Power Supplies group shot">
                <p>
                    Laboratory DC power supplies intended for standard bench-top applications or remote control and system use.
                    <br><br>Single, dual, triple and quad output models with power from 30 watts up to 1200 watts. Isolated outputs with automatic CV/CI crossover enabling series and parallel connection. Linear, Mixed-mode or PowerFlex regulation. Remote control models with variants of Analogue, USB, RS232, GPIB and LAN/LXI interfaces. Convection or quiet fan cooled, fitted with Aim-TTi safety terminals and most models feature remote sense.
                    <br><br>A DC Power Supplies Shortform Catalogue is also available
                    <br><br>Find a power supply using the filters below or from the list of Product Series below that
                </p>
            </div>

            <div class="product-series">
                <div class="product-series-title">
                    <h2>Select by Product Series</h2>
                </div>
                <table>


                    <?php

                    foreach ($products as $product) {
                        echo '

<tr>
    <td class="image">
        <a href="' . $domain . 'product-category' . $product['ProductURL'] . '">
            <img src="' . $domain . 'sites/default/files/styles/prod_cats/public/image/large/' . $product['ImageURL'] . '"
                alt="Aim-TTi-Instruments ' . $product['ProductName'] . ' DC Power Supply ">
        </a>
    </td>
    <td class="details">
        <a href="' . $domain . 'product-category' . $product['ProductURL'] . '">
            ' . $product['ProductName'] . '
        </a>
        <p>
            ' . $product['ProductDescription'] . '
        </p>
    </td>
</tr>

                    ';
                    }
                    ?>

                </table>
            </div>


        </div>
    </div>

    <?php require_once('../../common/footer.php'); ?>


    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>
</body>

</html>