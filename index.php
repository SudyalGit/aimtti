<?php
require_once('./config/index.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="https://aimtti.co.in/favicon.ico" type="image/vnd.microsoft.icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="description" content="Aim-TTi India: Advanced electronic test and measurement equipment and laboratory power supplies for the Indian market" />
    <link rel="canonical" href="https://aimtti.co.in/index.php" />
    <link rel="shortlink" href="https://aimtti.co.in/" />

    <title>Aim-TTi India - Test & Measurement Instruments and Power Supplies</title>

    <link rel="stylesheet" href="<?php echo $domain; ?>assets/css/index.css">
</head>

<body>
    <?php require_once('./common/header.php'); ?>

    <div class="main">
        <?php require_once('./common/side-menu.php'); ?>

        <div class="content">
            <div>
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <img src="<?php echo $domain; ?>sites/default/files/field/image/slideshow/AIM-MX-S2_MkIIIa.png" style="width:100%" alt="New MX Series 2 Quad channel models">
                    </div>

                    <div class="mySlides fade">
                        <img src="<?php echo $domain; ?>sites/default/files/field/image/slideshow/AIM-SMU-APP-NOTE.png" style="width:100%" alt="New AIM-SMU-APP-NOTE">
                    </div>

                    <div class="mySlides fade">
                        <img src="<?php echo $domain; ?>sites/default/files/field/image/slideshow/AIM-I-prober_520.png" style="width:100%" alt="Observe and Measure current in a PCB track with I-prober 520">
                    </div>

                    <div class="mySlides fade">
                        <img src="<?php echo $domain; ?>sites/default/files/field/image/slideshow/AIM-SMU4000_Series.png" style="width:100%" alt="New SMU4000 PowerFlex Source Measure Units">
                    </div>

                    <div class="mySlides fade">
                        <img src="<?php echo $domain; ?>sites/default/files/field/image/slideshow/AIM-PSA_Series3..png" style="width:100%" alt="New Aim-TTi PSA Series 3 RF Spectrum analyzers">
                    </div>

                    <div class="mySlides fade">
                        <img src="<?php echo $domain; ?>sites/default/files/field/image/slideshow/QPX750SP_launch_2.png" style="width:100%" alt="New QPX750SP PowerFlex+ DC power supply ">
                    </div>

                    <div class="mySlides fade">
                        <img src="<?php echo $domain; ?>sites/default/files/field/image/slideshow/TGR2050_banner_2.png" style="width:100%" alt="TGR2050 RF Signal Generator">
                    </div>

                    <div class="mySlides fade">
                        <img src="<?php echo $domain; ?>sites/default/files/field/image/slideshow/TGF4000_banner_2.png" style="width:100%" alt="New TGF4000 Series high performance function generators">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>



                </div>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>
                    <span class="dot" onclick="currentSlide(7)"></span>
                    <span class="dot" onclick="currentSlide(8)"></span>
                </div>
            </div>

            <div>
                <h1>AIM-TTI | AIM &amp; THURLBY THANDAR INSTRUMENTS</h1>
                <p>
                    Aim-TTi designs and manufactures advanced electronic test and measurement equipment and
                    laboratory power supplies. Our products are available to purchase throughout the world.
                </p>
            </div>

            <div class="two-column">
                <div class="left-column">
                    <div class="box">
                        <h2>POWER SUPPLIES &amp; LOADS</h2>
                        <a href="<?php echo $domain; ?>product-category/dc-power-supplies">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-dcpsu.jpg" alt="AIM TTi India Power Supplies and Loads">
                            <div>
                                <h3>DC Power Supplies</h3>
                                <p>
                                    Laboratory power supplies for bench-top or remote control and system use.
                                </p>
                            </div>
                        </a>
                        <a href="<?php echo $domain; ?>product-category/electronic-loads">
                            <img src="<?php echo $domain; ?>sites/default/files/category-image/frontpage_categ_dcloads2.jpg" alt="AIM TTi India DC Electronic Loads">
                            <div>
                                <h3>Electronic Loads</h3>
                                <p>
                                    Flexible electronic DC loads for general purpose applications.
                                </p>
                            </div>
                        </a>
                    </div>


                    <div class="box">
                        <h2>PRECISION MEASUREMENT</h2>
                        <a href="<?php echo $domain; ?>product-category/source-measure-units">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-smu.jpg" alt="AIM TTi India Source Measure Untis">
                            <div>
                                <h3>Source Measure Units</h3>
                                <p>
                                    High speed precision characterization.
                                </p>
                            </div>
                        </a>
                        <a href="<?php echo $domain; ?>product-category/multimeters">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-mmeter.jpg" alt="AIM TTi India multimeters">
                            <div>
                                <h3>Multimeters</h3>
                                <p>
                                    Bench-top digital multimeters for professional applications. High accuracy and resolution.
                                </p>
                            </div>
                        </a>
                        <a href="<?php echo $domain; ?>product-category/frequency-counters">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-fcounter.jpg" alt="AIM TTi India frequency counters">
                            <div>
                                <h3>Frequency Counters</h3>
                                <p>
                                    Handheld and bench-top frequency counters up to 6GHz.
                                </p>
                            </div>
                        </a>
                        <a href="<?php echo $domain; ?>product-category/lcr">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-lcr.jpg" alt="AIM TTi India LCR component measurement">
                            <div>
                                <h3>LCR Measurement</h3>
                                <p>
                                    Precision component measurements
                                </p>
                            </div>
                        </a>
                        <a href="<?php echo $domain; ?>product-category/current-probes">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-cprobe.jpg" alt="AIM TTi India current probes">
                            <div>
                                <h3>Current Probes</h3>
                                <p>
                                    Innovative DC to 5MHz current probes for PCB tracks, component legs etc.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="right-column">
                    <div class="box">
                        <h2>WAVEFORM GENERATORS</h2>
                        <a href="<?php echo $domain; ?>product-category/function-generators">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-fgen.jpg" alt="AIM TTi India function generators">
                            <div>
                                <h3>Function Generators</h3>
                                <p>
                                    Analogue and Digital (DDS) function generators with frequencies up to 160MHz.
                                </p>
                            </div>
                        </a>
                        <a href="<?php echo $domain; ?>product-category/pulse-generators">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-pgen.jpg" alt="AIM TTi India pulse generators">
                            <div>
                                <h3>Pulse Generators</h3>
                                <p>
                                    Dedicated pulse generators and function generators with true pulse capability.
                                </p>
                            </div>
                        </a>
                        <a href="<?php echo $domain; ?>product-category/arbitrary-generators">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-agen.jpg" alt="AIM TTi India Arbitrary waveform generators">
                            <div>
                                <h3>Arbitrary Generators</h3>
                                <p>
                                    True variable-clock arbitrary waveform generators, single or dual channel.
                                </p>
                            </div>
                        </a>
                        <a href="<?php echo $domain; ?>product-category/waveform-amplifiers">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-wamp.jpg" alt="AIM TTi India waveform amplifiers">
                            <div>
                                <h3>Waveform Amplifiers</h3>
                                <p>
                                    Used to increase generator output level up to 30V pk-pk.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <h2>RF & EMC TEST EQUIPMENT</h2>
                        <a href="<?php echo $domain; ?>product-category/spectrum-analyzers">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-spectana.jpg" alt="AIM TTi India spectrum analyzers">
                            <div>
                                <h3>Spectrum Analyzers</h3>
                                <p>
                                    Low cost handheld RF spectrum analyzers with bandwidths up to 6GHz.
                                </p>
                            </div>
                        </a>
                        <a href="<?php echo $domain; ?>product-category/rf-signal-generators">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-rfgen.jpg" alt="AIM TTi India RF Signal Generators">
                            <div>
                                <h3>RF Signal Generators</h3>
                                <p>
                                    Performance RF generators from 1.0GHz to 6.0GHz
                                </p>
                            </div>
                        </a>
                        <a href="<?php echo $domain; ?>product-category/emc-analyzers">
                            <img src="<?php echo $domain; ?>sites/default/files/image/frontpage-categ-emcana.jpg" alt="AIM TTi India EMC Analyzers">
                            <div>
                                <h3>EMC Analyzers</h3>
                                <p>
                                    For EMC measurements to EN61000-3-2 and EN61000-3-3.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('./common/footer.php'); ?>

    <script src="<?php echo $domain; ?>assets/js/carousel.js"></script>
    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>

</body>

</html>