<?php require_once('../../config/index.php');

$heading = "Source Measure Units";

$sql = "SELECT * FROM `products` WHERE `CategoryId` = 3";
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
    <meta name="description" content="The Source Measure Unit (SMU) integrates a fast and agile, high power, four quadrant voltage/current source and advanced precise voltage/current meters. Available in India, it precisely supplies positive and negative voltages, sourcing or sinking power, while simultaneously measuring both current and voltage, making it ideal for rapid I-V characterization. The PowerFlex autoranging system provides flexible operation." />
    <link rel="canonical" href="https://aimtti.co.in/product-category/source-measure-units" />
    <title>Source Measure Units | Aim-TTi India</title>


    <link rel="stylesheet" href="<?php echo $domain; ?>assets/css/index.css">
</head>

<body>
    <?php require_once('../../common/header.php') ?>

    <div class="main">
        <?php require_once('../../common/side-menu.php'); ?>

        <div class="content">

            <img class="banner" src="<?php echo $domain; ?>sites/default/files/field/image/slideshow/AIM-SMU-APP-NOTE.png" alt="New AIM-SMU-APP-NOTE">

            <div>
                <h1><?php echo $heading ?></h1>
            </div>

            <div class="main-category-card">
                <img src="<?php echo $domain; ?>sites/default/files/category-image/DC_power_supplies_product_group_6c_1.jpg" alt="SMU (Source Measure Units)">
                <p>
                    The Source Measure Unit (SMU) integrates a fast and agile, high power, four quadrant voltage / current source and advanced precise voltage / current meters. Precisely supplying positive and negative voltages, sourcing or sinking power, while simultaneously measuring both current and voltage makes it ideal for rapid I-V characterization
                    <br><br>The PowerFlex autoranging system provides semi constant power characteristics so that the current capability rises as the voltage falls, unlike conventional SMUs where the maximum power can only be achieved at the top of each voltage range.
                    <br><br>The SMU provides an all-in-one solution for simplifying test applications such as I-V characterizing, semiconductor testing, battery charging/discharging and much more.
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
                alt="Aim-TTi India ' . $product['ProductName'] . ' Source Measure Units ">
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