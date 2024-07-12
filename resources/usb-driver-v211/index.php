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
                    CPX Series Power Supplies IVI Driver V1.4.0
                </h2>
                <br><br>
                <p>
                    YOU MIGHT NOT NEED THIS DRIVER: Beginning with Windows 10, Windows will use its own USB CDC
                    (Communications Device Class) driver automatically and a separate driver is not necessary for the
                    device to function correctly. The only real downside to this is that the name of the device will not
                    be present in Device Manager unless the .inf file is used as Windows will give it a generic name.
                    For earlier versions of Windows the driver will be necessary. If your device is already recognized
                    with a previous version of this driver, there is no advantage in changing to this version.
                    <br><br>
                    This download is a zip file containing the .inf file for Windows USB virtual COM ports used on
                    multiple AIM-TTi devices. To use it, unzip the files into a new directory on your computer. The
                    Windows installer must be pointed to this directory when the device is plugged in.
                    <br><br>
                    This version adds support for the TGF4000 Series function generators and some upcoming products.
                </p>
            </div>

            <br>
            <p>
                <b>Language(s):</b> English
                <br>
                <b>Resource Type:</b> Driver
                <br>
                <b>Link:</b> <a href="USB_ARM_VCP_211.zip">USB_ARM_VCP_211.zip</a>
            </p>
            <br><br>

            <div class="col-2">
                <div>
                    <h2>Relevant Products</h2>
                    <table class="views-table cols-0">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/product-category/multimeters/aim-1908">
                                        <img src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-1908-fr2-1k_0.jpg?itok=5wLn1vdt"
                                            width="32" height="17"
                                            alt="AIM-TTi 1908 True RMS Programmable multimeter - front">
                                    </a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/multimeters/aim-1908">1908 Series</a></strong>
                                </td>
                            </tr>
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
                            <tr>
                                <td>
                                    <a href="/product-category/dc-power-supplies/aim-el-rseries"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-EL155R-1k.jpg?itok=i74tHzRW"
                                            width="32" height="22" alt="Aim-TTi EL155R DC Power supply"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/dc-power-supplies/aim-el-rseries">EL-R
                                            Series</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/dc-power-supplies/aim-ex-rseries"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-EX2020R-1k.jpg?itok=bIlwg4ZD"
                                            width="32" height="22"
                                            alt="Aim-TTi EX2020R (EX-R series) DC power supply"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/dc-power-supplies/aim-ex-rseries">EX-R
                                            Series</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/electronic-loads/aim-ld400series"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-LD400-1k.jpg?itok=rvZFcQS8"
                                            width="32" height="19" alt="Aim-TTi LD400 DC Electronic Load"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/electronic-loads/aim-ld400series">LD400
                                            Series</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/dc-power-supplies/aim-mxseries"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-MX100T-1k_0.jpg?itok=50t6_lwc"
                                            width="32" height="19"
                                            alt="Aim-TTi MX100TP (MX Series) DC bench power supply"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/dc-power-supplies/aim-mxseries">MX
                                            Series</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/dc-power-supplies/aim-plseries"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-PL303-1k.jpg?itok=Y0bC5RlM"
                                            width="32" height="19" alt="Aim-TTi PL303 (PL Series) DC power supply"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/dc-power-supplies/aim-plseries">PL
                                            Series</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/dc-power-supplies/aim-plhseries"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-PLH250-P-1k.jpg?itok=DLuDF-tD"
                                            width="32" height="19"
                                            alt="Aim-TTi PLH250P (PLH series) DC power supply"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/dc-power-supplies/aim-plhseries">PLH
                                            Series</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/legacy-products/aim-psaseries2"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/psa2702-700.jpg?itok=DpPnMAEC"
                                            width="24" height="32"
                                            alt="Aim-TTi PSA2702 (PSA Series 2) Spectrum analyzer"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/legacy-products/aim-psaseries2">PSA Series
                                            2</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/spectrum-analyzers/aim-psaseries3"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-PSA2703-fr-1k.png?itok=M9DbVr--"
                                            width="32" height="32"
                                            alt="Aim-TTi PSA2703 (PSA Series 3) Spectrum Analyzer"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/spectrum-analyzers/aim-psaseries3">PSA Series
                                            3</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/spectrum-analyzers/aim-psaseries5"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/PSA6005-1000px.jpg?itok=0iuGtdon"
                                            width="32" height="32"
                                            alt="Aim-TTi PSA6005 (PSA Series 5) Spectrum analyzer - in hand"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/spectrum-analyzers/aim-psaseries5">PSA Series
                                            5</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/dc-power-supplies/aim-qlseries"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-QL564P-1k.jpg?itok=Jiq2yxdk"
                                            width="32" height="22" alt="Aim-TTi QL564P (QL series) DC power supply"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/dc-power-supplies/aim-qlseries">QL Series
                                            II</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/dc-power-supplies/aim-qpxseries"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-QPX750_600_stack-1k.jpg?itok=NBNGlvV_"
                                            width="32" height="26" alt="Aim-TTi QPX750SP and QPX600DP composite"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/dc-power-supplies/aim-qpxseries">QPX
                                            Series</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/function-generators/aim-tg251xa-501xaseries"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-TG5011-1k.png?itok=rfstH9Dt"
                                            width="32" height="17"
                                            alt="Aim-TTi TG5011 High Performance Function/Arbitrary/Pulse Generator"></a>
                                </td>
                                <td>
                                    <strong><a
                                            href="/product-category/function-generators/aim-tg251xa-501xaseries">TG251xA/501xA
                                            Series</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/function-generators/aim-tgf4000"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-TGF4242_fr_top-1k.jpg?itok=gzimtT78"
                                            width="32" height="16"
                                            alt="Aim-TTi TGF4242 Function Generator (TGF4000 Series) - front"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/function-generators/aim-tgf4000">TGF4000
                                            Series</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/function-generators/aim-tgp3100"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-TGP3121.jpg?itok=kcxQW-Id"
                                            width="32" height="19"
                                            alt="AIM-TTi TGP3121 (TGP3100 Series) Pulse and Function Generator - front"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/function-generators/aim-tgp3100">TGP3100
                                            Series</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/rf-signal-generators/aim-tgr205x"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-TGR2053-1k_0.jpg?itok=R023bYRx"
                                            width="32" height="19" alt="TGR2053 (New TGR2050 Series) - front"></a>
                                </td>
                                <td>
                                    <strong><a href="/product-category/rf-signal-generators/aim-tgr205x">TGR205x
                                            Series</a></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/product-category/rf-signal-generators/aim-tgr6000"><img
                                            src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/image/large/AIM-TGR6000-1k.jpg?itok=aSFSTa8o"
                                            width="32" height="16" alt="Aim-TTi TGR6000 6GHz RF Signal Generator"></a>
                                </td>
                                <td>
                                    <strong><a
                                            href="/product-category/rf-signal-generators/aim-tgr6000">TGR6000</a></strong>
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