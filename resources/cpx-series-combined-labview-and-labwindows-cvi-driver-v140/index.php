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
                    src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/zip.png?itok=zaWqLR20"
                    alt="">
                <h2>
                    CPX Series combined LabVIEW and LabWindows CVI Driver V1.4.0
                </h2>
            </div>

            <br>
            <p>
                <b>Language(s):</b> English
                <br>
                <b>Resource Type:</b> Driver
                <br>
                <b>Link:</b> <a href="https://resources.aimtti.com/drivers/lv-cv-CPX-v1.4.0.zip">lv-cv-CPX-v1.4.0.zip</a>
            </p>
            <br><br>

            <div class="col-2">
                <div>
                    <h2>Relevant Products</h2>
                    <table>
                        <tr>
                            <td>
                                <img src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-CPX400DP-1k.jpg?itok=epk5ft4g"
                                    alt="">
                            </td>
                            <td>
                                <a href="">
                                    <h4>CPX Series</h4>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script src="<?= $domain; ?>assets/js/script.js"></script>
</body>

</html>