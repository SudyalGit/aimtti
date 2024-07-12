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
    <style>
        .panel-2col-bricks .panel-col-top .inside,
        .panel-2col-bricks .panel-col-middle .inside {
            margin-bottom: .5em;
        }

        p,
        .content ul,
        .content ol,
        div {
            font-size: 14px;
            font-weight: 400;
        }

        .panel-pane,
        .region-content .block {
            padding: 8px;
        }

        .panel-2col-bricks .panel-col-first {
            float: left;
            width: 50%;
        }

        h2,
        h2.block-title {
            font-size: 20px;
            padding: 0 4px;
            color: #fff;
            background-color: #678;
            border-radius: 2px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Open Sans", Arial, Helvetica, sans, san-serif;
            font-weight: 300;
            letter-spacing: 0em;
            color: #113355;
        }

        resource_details {
            background-color: #FFF;
        }

        .view-resource-details div.view-content {
            padding: 10px;
        }
    </style>

</head>

<body>
    <?php require_once '../../includes/header.php'; ?>

    <div class="main">
        <?php require_once '../../includes/side-menu.php'; ?>

        <div class="content">
            <h1>
                <?= $mainHeading ?>
            </h1>



        </div>
    </div>

    <script src="<?= $domain; ?>assets/js/script.js"></script>
</body>

</html>