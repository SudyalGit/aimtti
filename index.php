<?php
require_once './config/index.php';
require_once './php/variables.php';
require_once './php/functions.php';
?>

<?php
$mainHeading = "AIM-TTI | AIM & THURLBY THANDAR INSTRUMENTS";
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
    <?php require_once './includes/header.php'; ?>

    <div class="main">
        <?php require_once './includes/side-menu.php'; ?>
        <div class="content">
            <?php require_once './includes/slider.php'; ?>

            <h1>
                <?= $mainHeading ?>
            </h1>
            <p>
                Aim-TTi designs and manufactures advanced electronic test and measurement equipment and laboratory power
                supplies. Our products are available to purchase throughout the world.
            </p>

            <br>

            <div class="col-2">

                <div class="coloumn">
                    <h2>POWER SUPPLIES & LOADS</h2>

                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-dcpsu.jpg" alt="">
                        <div>
                            <a href="<?= $domain; ?>product-category/dc-power-supplies">
                                <h3>DC Power Supplies</h3>
                            </a>
                            <p>
                                Laboratory power supplies for bench-top or remote control and system use.
                            </p>
                        </div>
                    </div>



                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/category-image/frontpage_categ_dcloads2.jpg"
                            alt="">
                        <div>
                            <a href="">
                                <h3>Electronic Loads</h3>
                            </a>
                            <p>
                                Flexible electronic DC loads for general purpose applications.
                            </p>
                        </div>
                    </div>

                    <h2>PRECISION MEASUREMENT</h2>

                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-smu.jpg" alt="">
                        <div>
                            <a href="">
                                <h3>Source Measure Units</h3>
                            </a>
                            <p>
                                High speed precision characterization.
                            </p>
                        </div>
                    </div>



                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-mmeter.jpg" alt="">
                        <div>
                            <a href="">
                                <h3>Multimeters</h3>
                            </a>
                            <p>
                                Bench-top digital multimeters for professional applications. High accuracy and
                                resolution.
                            </p>
                        </div>
                    </div>


                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-fcounter.jpg" alt="">
                        <div>
                            <a href="">
                                <h3>Frequency Counters</h3>
                            </a>
                            <p>
                                Handheld and bench-top frequency counters up to 6GHz.
                            </p>
                        </div>
                    </div>


                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-lcr.jpg" alt="">
                        <div>
                            <a href="">
                                <h3>LCR Measurement</h3>
                            </a>
                            <p>
                                Precision component measurements
                            </p>
                        </div>
                    </div>



                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-cprobe.jpg" alt="">
                        <div>
                            <a href="">
                                <h3>Current Probes</h3>
                            </a>
                            <p>
                                Innovative DC to 5MHz current probes for PCB tracks, component legs etc.
                            </p>
                        </div>
                    </div>





                </div>

                <div class=" coloumn">
                    <h2>WAVEFORM GENERATORS</h2>

                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-fgen.jpg" alt="">
                        <div>
                            <a href="">
                                <h3>Function Generators</h3>
                            </a>
                            <p>
                                Analogue and Digital (DDS) function generators with frequencies up to 160MHz.
                            </p>
                        </div>
                    </div>



                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-pgen.jpg" alt="">
                        <div>
                            <a href="">
                                <h3>Pulse Generators</h3>
                            </a>
                            <p>
                                Dedicated pulse generators and function generators with true pulse capability.
                            </p>
                        </div>
                    </div>


                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-agen.jpg" alt="">
                        <div>
                            <a href="">
                                <h3>Arbitrary Generators</h3>
                            </a>
                            <p>
                                True variable-clock arbitrary waveform generators, single or dual channel.
                            </p>
                        </div>
                    </div>

                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-wamp.jpg" alt="">
                        <div>
                            <a href="">
                                <h3>Waveform Amplifiers</h3>
                            </a>
                            <p>
                                Used to increase generator output level up to 30V pk-pk.
                            </p>
                        </div>
                    </div>

                    <h2>RF & EMC TEST EQUIPMENT</h2>

                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-spectana.jpg" alt="">
                        <div>
                            <a href="">
                                <h3>Spectrum Analyzers</h3>
                            </a>
                            <p>
                                Low cost handheld RF spectrum analyzers with bandwidths up to 6GHz.
                            </p>
                        </div>
                    </div>



                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-rfgen.jpg" alt="">
                        <div>
                            <a href="">
                                <h3>RF Signal Generators</h3>
                            </a>
                            <p>
                                Performance RF generators from 1.0GHz to 6.0GHz
                            </p>
                        </div>
                    </div>


                    <div class="home-product-card">
                        <img src="https://www.aimtti.com/sites/default/files/image/frontpage-categ-emcana.jpg" alt="">
                        <div>
                            <a href="">
                                <h3>EMC Analyzers</h3>
                            </a>
                            <p>
                                For EMC measurements to EN61000-3-2 and EN61000-3-3.
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script src="<?= $domain; ?>assets/js/script.js"></script>
</body>

</html>