<?php
require_once '../../config/index.php';
require_once '../../php/variables.php';
require_once '../../php/functions.php';
?>

<?php
$mainHeading = "Resource Details";
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
    <link rel="stylesheet" href="<?= $domain; ?>assets/css/resources.css">

</head>

<body>
    <?php require_once '../../includes/header.php'; ?>

    <div class="main">
        <?php require_once '../../includes/side-menu.php'; ?>

        <div class="content">
            <h1>
                <?= $mainHeading ?>
            </h1>

            <div class="mb-10">
                <img class="file-type-icon"
                    src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/pdf.png?itok=x-86sse-"
                    alt="">
                <h2>
                    CPX400DP Mechanical Drawing
                </h2>
                <br><br>
                <p>
                    Dimensioned mechanical drawing in PDF format
                </p>
            </div>

            <br>
            <p>
                <b>Language(s):</b> English
                <br>
                <b>Resource Type:</b> Drawing
                <br>
                <b>Link:</b> <a href="https://resources.aimtti.com/drawings/CPX400DP-712.pdf">CPX400DP-712.pdf</a>
            </p>
            <br><br>

            <div class="col-2">
                <div>
                    <h2>Relevant Products</h2>
                    <table class="views-table cols-0">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/product-category/dc-power-supplies/aim-cpxseries"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-CPX400DP-1k.jpg?itok=epk5ft4g"
                                            width="32" height="20"
                                            alt="Aim-TTi CPX400DP (CPX Series) DC Bench power supply"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/dc-power-supplies/aim-cpxseries">CPX
                                            Series</a></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script src="<?= $domain; ?>assets/js/script.js"></script>
</body>

</html>