<?php
require_once '../../../config/index.php';
require_once '../../../php/variables.php';
require_once '../../../php/functions.php';
?>

<?php

$sql = "SELECT * FROM `productmodels` WHERE `ProductId` = 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $models = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $models[] = $row;
    }
    // print_r($models);
}

$img = [
    'https://www.aimtti.com/sites/default/files/styles/product_medium/public/image/large/AIM-CPX400DP-1k.jpg?itok=1XnLht3u',
    'https://www.aimtti.com/sites/default/files/styles/product_medium/public/image/large/AIM-CPX400SP-1k.jpg?itok=dIdKvPL3',
];
$mainHeading = "CPX Series";
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
    <?php require_once '../../../includes/header.php'; ?>

    <div class="main">
        <?php require_once '../../../includes/side-menu.php'; ?>
        <div class="content">
            <h1>
                <?= $mainHeading ?>
            </h1>
            <h2>
                Bench/System/ATE Programmable DC Power Supply Single or Dual Outputs, 360 to 840 watts, with or without
                Remote Interfaces
            </h2>

            <div class="product-card">
                <div class="product-card-carousel">
                    <div class="container">
                        <?php productCarousel($img) ?>
                    </div>
                </div>

                <div class="product-card-details">
                    <ul>
                        <li>PowerFlex design gives variable voltage and current combinations within a maximum power
                            range</li>
                        <li>Up to 60 volts and up to 20 amps</li>
                        <li>180 watts or 420 watts maximum per output</li>
                        <li>Isolated outputs can be wired in series or parallel</li>
                        <li>Constant voltage or constant current operation</li>
                        <li>Settings Locking (S-Lock)</li>
                        <li>PowerFlex or fixed-range operation</li>
                        <li>Variable OVP trips</li>
                        <li>Selectable remote sense terminals</li>
                        <li>Compact quarter or half rack 3U case size</li>
                        <li>Isolated analogue remote control (CPX400SA only)</li>
                        <li>RS232, USB &amp; LXI compliant LAN (P models only)</li>
                        <li>GPIB Option (P models only)</li>
                    </ul>
                    <br>
                    <div>
                        <span>
                            <a href="" title="" target="_blank"><img class="file-icon" alt="" title="application/pdf"
                                    src="<?= $domain ?>application-pdf.png"> Datasheet </a> - (PDF /
                            English)
                        </span>
                    </div>
                </div>
            </div>

            <div class="model-list-box">

                <!-- MODEL LIST TITLES -->
                <div class="model-list-title">
                    <a href="">
                        <button>Product</button>
                    </a>
                    <a href="">
                        <button>Options</button>
                    </a>
                    <a href="">
                        <button>Accessories</button>
                    </a>
                    <a href="#datadownloads-list">
                        <button>Data and Downloads</button>
                    </a>
                </div>

                <!-- DATA DOWNLOADS LIST TABLE -->
                <div id="datadownloads-list" class="datadownloads-list-table">

                    <h3>Product Tours</h3>
                    <table>
                        <tr>
                            <td>
                                <a href="<?= $domain ?>resources/cpx-series-dc-power-supplies-product-tour">
                                    CPX Series DC Power Supplies Product Tour - (HTML / English)
                                </a>
                            </td>
                        </tr>
                    </table>

                    <h3>Firmware Files</h3>
                    <table>
                        <tr>
                            <td>
                                <a href="<?= $domain ?>resources/cpx-series-interface-firmware-file-v420">
                                    CPX Series Interface firmware file V4.20 - (HEX / English)
                                </a>
                            </td>
                        </tr>
                    </table>

                    <h3>Drivers</h3>
                    <table>
                        <tr>
                            <td>
                                <a href="<?= $domain ?>resources/cpx-series-combined-labview-and-labwindows-cvi-driver-v140">
                                    CPX Series combined LabVIEW and LabWindows CVI Driver V1.4.0 - (ZIP / English)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    CPX Series Power Supplies IVI Driver V1.4.0 - (ZIP / English)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="<?= $domain ?>resources/usb-driver-v211">
                                    USB Driver V2.11 - (ZIP / English)
                                </a>
                            </td>
                        </tr>
                    </table>

                    <h3>Catalogues</h3>
                    <table>
                        <tr>
                            <td>
                                <a href="">
                                    AIM-TTi Power Supplies summary catalogue 2021 - (PDF / English)
                                </a>
                            </td>
                        </tr>
                    </table>

                    <h3>Datasheets</h3>
                    <table>
                        <tr>
                            <td>
                                <a href="">
                                    CPX Series DC Power Supplies Data sheet EN Issue 8 - (PDF / English)
                                </a>
                            </td>
                        </tr>
                    </table>

                    <h3>Manuals</h3>
                    <table>
                        <tr>
                            <td>
                                <a href="">
                                    CPX200 Instruction Manual - Issue 13 - (PDF / English)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    CPX200D & DP Instruction Manual - Issue 9 - (PDF / English)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    CPX400 Instruction Manual - (PDF / English, French, German, Italian, Spanish)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    CPX400A Instruction Manual - Issue 5 - (PDF / English, French, German, Italian,
                                    Spanish)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    CPX400D & DP Instruction Manual - Issue 14 - (PDF / English)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    CPX400S, SA & SP Instruction Manual - Issue 10 - (PDF / English)
                                </a>
                            </td>
                        </tr>
                    </table>

                    <h3>Software / Apps</h3>
                    <table>
                        <tr>
                            <td>
                                <a href="">
                                    Firmware Flash update utility - (ZIP / English)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    LXI discovery tool - (ZIP / English)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    Test Bridge Software - (MSI / English)
                                </a>
                            </td>
                        </tr>
                    </table>


                </div>

                <table class="model-list-table">
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
                        modelListRender($models);
                        ?>
                    </tbody>
                </table>


            </div>

        </div>
    </div>

    <script src="<?= $domain; ?>assets/js/script.js"></script>
</body>

</html>