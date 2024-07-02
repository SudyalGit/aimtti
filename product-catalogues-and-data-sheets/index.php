<?php require_once('../config/index.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="https://aimtti.co.in/favicon.ico" type="image/vnd.microsoft.icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="description" content="Product brochures and catalogues index page for Aim-TTi India" />
    <link rel="canonical" href="https://aimtti.co.in/product-catalogues-and-data-sheets" />
    <title>Product Catalogues and Data Sheets | Aim-TTi India</title>

    <link rel="stylesheet" href="../assets/css/index.css">
</head>

<style>
    p {
        padding-top: 0.5rem;
    }

    .catalog {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 1rem;
        padding: 2rem;
    }

    .catalog-items {
        background-color: #334455;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.5rem;
    }

    .catalog-items span {
        font-size: 15px;
        text-align: center;
        color: white;
    }

    hr {
        border: 1px solid #667788;
    }

    @media only screen and (max-width: 600px) {
        p {
            padding-top: 0.5rem;
        }

        .catalog {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            padding: 2rem;
        }

        .catalog-items {
            background-color: #334455;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.5rem;
        }

        .catalog-items span {
            font-size: 15px;
            text-align: center;
            color: white;
        }

        hr {
            border: 1px solid #667788;
        }
    }
</style>

<body>
    <?php require_once('../common/header.php'); ?>

    <div class="main">
        <?php require_once('../common/side-menu.php'); ?>

        <div class="content">
            <h1>Product Catalogues and Data Sheets</h1>
            <h3>Product Shortform Catalogue</h3>
            <p>The product shortform catalogue contains illustrations, major feature points, and brief specifications for all Aim-TTi products.</p>

            <div class="catalog">
                <div>
                    <a class="catalog-items" href="https://resources.aimtti.com/catalogues/Aim-TTi_Catalogue_2024_iss15_lowres.pdf">
                        <img src="../sites/default/files/brochure/Aim-TTi_Catalogue_2024_iss15_lowres.png" alt="Shortform Catalogue">
                        <span>Aim-TTi Shortform Catalogue Issue 15 PDF</span>
                    </a>
                </div>
                <div>
                    <a class="catalog-items" href="http://resources.aimtti.com/catalogues/Aim-TTi_Power_Supply_Catalogue_iss2.pdf">
                        <img src="../sites/default/files/Aim-TTi-Power-Supply-Catalogue_Iss1_web.png" alt="Shortform Catalogue">
                        <span>Aim-TTi Power Supplies Shortform Catalogue 2021 PDF</span>
                    </a>
                </div>
                <div>
                    <a class="catalog-items" href="http://resources.aimtti.com/docs/AIM-generator_comparison.pdf">
                        <img src="../sites/default/files/AIM-generator_comparison.png" alt="Function Generator Comparison Table">
                        <span>Aim-TTi Function Generator comparison table</span>
                    </a>
                </div>
            </div>

            <h3>Individual Product Data Sheets</h3>
            <p>A PDF data-sheet/brochure is available from each product page. These contain more detail and technical specifications.</p>

            <!-- horizontal break -->
            <br><br>
            <hr>
            <br><br>

            <h3>Product Tours</h3>
            <p>Visit the <a href="<?php echo $domain; ?>product-tours">Product Tours Index Page</a> for a list of products for which a tour is available.</p>

        </div>
    </div>

    <?php require_once('../common/footer.php'); ?>

    <!-- <script src="<?php echo $domain; ?>assets/js/carousel.js"></script> -->
    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>
</body>

</html>