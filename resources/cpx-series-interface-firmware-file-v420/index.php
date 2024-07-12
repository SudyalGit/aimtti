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
                    src="https://www.aimtti.com/sites/default/files/styles/small_thumb_32px/public/hex.png?itok=RGa8yzi3"
                    alt="">
                <h2>
                    CCPX Series Interface firmware file V4.20
                </h2>
            </div>


            <p>
                Updates to the digital bus interface firmware may be made available from time to time. This firmware
                resides in flash memory and can be updated via the USB interface. The interface firmware version is
                displayed briefly when the power supply is switched on. This is the second number that is displayed and
                is in the form "IF X.XX" (EG, "IF 1.01"). This download is a hex file to be used with the Firmware Flash
                Utility (see link below).
                <br><br>
                Version 4.0x adds LXI v1.4 (core 2011) support to the LAN interface.
                <br>
                Version 4.07 and 4.08 fix a number of LAN related issues discovered since the release of 4.0x, mainly
                related to mDNS.
                <br>
                Version 4.09 was never released. 4.10 fixes the following issues:
            </p>
            <br>
            <ul>
                <li>GPIB address was being shown as zero at start up.</li>
                <li>Commands "I1?" and "I2?" now show 1mA resolution</li>
                <li>Remote setting of V2 was always 1mV less than requested.</li>
                <li>GPIB "ibtrg" command would put controller into 9914 mode</li>
            </ul>
            <br>
            <p>
                Version 4.11 modifies the minimum current limit settable by remote to 0.005A.
                <br>
                Version 4.12 fixes intermittent LAN dropout issues and provides LANRESET remote command to recover
                network communication in the event of a VPN disconnection
                <br>
                Version 4.20 improves LAN robustness under continuous heavy traffic
                <br>
                This firmware is common to CPX200DP, CPX400SP and CPX400DP.
                <br>
                Note that updating from versions prior to 4.0x will cause all the LAN settings to return to the
                defaults.
            </p>
            <br>
            <p>
                <b>Language(s):</b> English
                <br>
                <b>Resource Type:</b> Firmware File
                <br>
                <b>Link:</b> <a
                    href="https://resources.aimtti.com/firmware/TTi_CPX_200_400_IF_420.hex">TTi_CPX_200_400_IF_420.hex</a>
                <br><br>
                <b>See Also:</b> <a href="">Firmware Flash update utility</a>
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