<?php require_once('../../config/index.php');

$heading = "Spectrum Analyzers";

$sql = "SELECT * FROM `products` WHERE `CategoryId` = 12";
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
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="description" content="Low-cost handheld RF spectrum analyzers with bandwidths up to 6.0GHz, powered by lithium-ion rechargeable batteries. Available in India." />
    <link rel="canonical" href="https://aimtti.co.in/product-category/spectrum-analyzers" />
    <title>Spectrum Analyzers | Aim-TTi India</title>

    <link rel="stylesheet" href="<?php echo $domain; ?>assets/css/index.css">
</head>

<body>
    <?php require_once('../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../common/side-menu.php'); ?>

        <div class="content">

            <img class="banner" src="<?php echo $domain; ?>sites/default/files/field/image/slideshow/AIM-PSA_Series3..png" alt="New Aim-TTi PSA Series 3 RF Spectrum analyzers">

            <div>
                <h1><?php echo $heading ?></h1>
            </div>

            <div class="main-category-card">
                <img src="<?php echo $domain; ?>sites/default/files/category-image/category-psa1.jpg" alt="Hand-held RF spectrum analyzers">
                <p>
                    Highly capable handheld RF spectrum analyzers with bandwidths up to 6.0GHz.
                    <br><br>The PSA Series 3 and PSA Series 5 differ in architecture and offer a different balance of features, bandwidth and price. Both feature colour touchscreen and rechargeable battery operation. The PSA Series 3 replaces the PSA Series 2.
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
                alt="Aim-TTi India ' . $product['ProductName'] . ' Spectrum Analyzers ">
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