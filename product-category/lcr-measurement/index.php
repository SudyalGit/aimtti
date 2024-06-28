<?php require_once('../../config/index.php');

$heading = "LCR Measurement";

$sql = "SELECT * FROM `products` WHERE `CategoryId` = 10";
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
    <meta name="description" content="LCR component bridge with built-in test fixture and limits comparator with binning, available in India. Micro-ohmmeter with four terminal Kelvin clip leads." />
    <link rel="canonical" href="https://aimtti.co.in/product-category/lcr-measurement" />
    <title>LCR Measurement | Aim-TTi India</title>

    <link rel="stylesheet" href="<?php echo $domain; ?>assets/css/index.css">
</head>

<body>
    <?php require_once('../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../common/side-menu.php'); ?>

        <div class="content">

            <div>
                <h1><?php echo $heading ?></h1>
            </div>

            <div class="main-category-card">
                <img src="<?php echo $domain; ?>sites/default/files/category-image/category-lcr1_0.jpg" alt="LCR measurement and micro-ohmmeter">
                <p>
                    LCR component bridge with built-in test fixture and limits comparator with binning.
                    <br><br>Micro-ohmmeter with four terminal Kelvin clip leads.
                    <br><br>High basic accuracy, rechargeable battery operation.
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
                alt="Aim-TTi India ' . $product['ProductName'] . ' LCR Measurement ">
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