<?php require_once('../../config/index.php');

$heading = "Software";

$sql = "SELECT * FROM `products` WHERE `CategoryId` = 15";
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
    <meta name="description" content="The Software product category is primarily for stand-alone applications. Specific software for products (drivers, firmware, etc.) is listed under the 'Data and Downloads' tab on the respective product pages. Visit the Support Page for a comprehensive 'Resource Finder' for all software, firmware, and drivers related to our products." />
    <link rel="canonical" href="https://aimtti.co.in/product-category/software" />
    <title>Software | Aim-TTi India</title>

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
                <img src="<?php echo $domain; ?>sites/default/files/category-image/AIM-Test_Bridge_s_0.png" alt="Software">
                <p>
                    The Software product category is primarily for stand-alone applications. The software for specific products (drivers, firmware etc.) is listed in the "Data and Downloads" tab on the page of the product it relates to. The Support Page also has a "Resource Finder" which can be used for listing all the software, firmware, drivers etc for a particular product.
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
                alt="Aim-TTi India ' . $product['ProductName'] . ' Software ">
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