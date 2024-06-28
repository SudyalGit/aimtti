<?php require_once('../config/index.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="https://aimtti.co.in/favicon.ico" type="image/vnd.microsoft.icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="description" content="Aim-TTi India: Leading manufacturer of electronic test and measurement instruments, catering to the Indian market and beyond." />
    <link rel="canonical" href="https://aimtti.co.in/about-aim-tti" />
    <title>About Aim-TTi India | Aim-TTi</title>

    <link rel="stylesheet" href="../assets/css/index.css">
</head>

<style>
    .about-us {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem 0;
        gap: 1rem;
    }

    .company {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
    }

    .company div {
        display: flex;
        gap: 0.5rem;
    }

    h2 {
        margin: 0.5rem 0;
    }

    p {
        padding: 0;
    }

    @media only screen and (max-width: 600px) {
        .about-us {
            display: grid;
            grid-template-columns: 1fr;
            align-items: center;
            justify-content: center;
            padding: 1rem 0;
            gap: 1rem;
        }

        .company {
            display: grid;
            grid-template-columns: 1fr;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .company div {
            display: grid;
            grid-template-columns: 1fr;
            gap: 0.5rem;
        }

        h2 {
            margin: 0.5rem 0;
        }

        p {
            padding: 0;
        }
    }
</style>

<body>
    <?php require_once('../common/header.php'); ?>

    <div class="main">
        <?php require_once('../common/side-menu.php'); ?>

        <div class="content">
            <h1>About Aim-TTi India</h1>

            <div class="about-us">
                <img src="../sites/default/files/u6738/factory_4c.jpg" alt="Aim-TTi factory, Huntingdon, UK">
                <p>
                    Welcome to Aim-TTI India, your trusted partner in electronic test and measurement equipment. As the authorized Indian representative of Aim-TTi (Aim and Thurlby Thandar Instruments),
                    <br><br>
                    We bring high-quality, precision electronic instruments to the Indian market, ensuring that engineers, scientists, and technicians have access to the best tools available for their work.
                    <br><br>
                    All TTi products are designed and manufactured at our Huntingdon facility. The portfolio of products from Thurlby Thandar Instruments (TTi) and Aim Instruments is grouped under the overall banner of Aim-TTi.
                </p>
            </div>

            <h2>Company History (TTi)</h2>
            <div class="company">
                <p>
                    Thurlby Thandar instruments Ltd dates from the late 1970s when two companies, Thurlby Electronics Ltd and Thandar Electronics Ltd (formerly Sinclair) were both manufacturing electronic test equipment in Cambridgeshire, England. The two companies merged to form Thurlby Thandar Instruments Ltd (TTI) in 1989. The Aim brand was added when TTi products were introduced to the USA market. All products now sell under the Aim-TTi brand.
                </p>
                <div>
                    <img src="../sites/default/files/u6738/smt_4c.jpg" alt="Surface Mount machines at Aim-TTi">
                    <img src="../sites/default/files/u6738/mfg_4c.jpg" alt="Factory floor, Huntingdon UK">
                </div>
            </div>
            <div>
                <p>
                    <br>
                    Aim-TTi are best known for being innovative leaders in PowerFlex, multi-range and precision power supplies. The full range of products extends to function and arbitrary generators, RF spectrum analyzers and generators and precision measurement instruments.
                    <br><br>
                    We believe that our tag line of “Measurably Better Value” represents our aim of producing high quality instruments at competitive prices, supported by low cost of ownership through great reliability and factory support.
                </p>
            </div>

            <h2>Contact Information</h2>
            <div class="contact">
                <p>
                    Aim and Thurlby Thandar Instruments,
                    <br>Glebe Rd, Huntingdon,
                    <br>Cambridgeshire,
                    <br>PE29 7DR,
                    <br>United Kingdom

                    <br><br><b>Tel:</b> <a href="">+44 (0)1480 412451</a>
                    <br><b>Fax:</b> +44 (0)1480 450409
                    <br><b>Email:</b> <a href="">sales@aimtti.com</a>
                    <br><b>Office Hours:</b> 08:00 to 17:00 Monday to Thursday, 08:00 - 12:00 Friday, UK time.
                    <br><b>EU Authorized Representative:</b> AIIATEL, Johann-Wiedeman Straẞe 20, DE-86609, Donauwörth, Germany
                </p>
            </div>

            <h2>Company Information</h2>
            <div class="information">
                <p>
                    Thurlby Thandar Instruments Limited is a Private Limited Company registered in England and Wales, company number 02434384
                    Registered Address: 2 Glebe Road, Huntingdon, Cambridgeshire, PE29 7DR, England
                    <br><br>
                    <b>TTi is an ISO9001 approved company.</b>
                    <br>All Aim-TTi products are designed and manufactured using documented quality procedures and fully traceable standards.
                </p>
                <br><br>
                <img src="../sites/default/files/image/icons/BSI_ISO9001_red_4light.png" alt="ISO9001:2008 logo" width="100">
                <br><br>
                <p>
                    Cert. No. FM20695
                    <br>Standard: BS EN IS09001:2015
                </p>
            </div>
        </div>
    </div>

    <?php require_once('../common/footer.php'); ?>

    <!-- <script src="<?php echo $domain; ?>assets/js/carousel.js"></script> -->
    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>
</body>

</html>