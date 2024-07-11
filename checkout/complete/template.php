<?php
// session_start();
// print_r($_SESSION);
function generateReferenceNumber()
{
    // Get the current date
    $currentDate = date('dm'); // Day and month
    $currentYear = date('Y'); // Full year
    $nextYear = date('y', strtotime('+1 year')); // Last two digits of the next year

    // Construct the reference number
    $referenceNumber = "NEPL/BELB/Q-$currentDate/$currentYear-$nextYear";

    return $referenceNumber;
}

$grandtotal = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
    }

    .quote-doc {
        padding: 10px 40px 20px 40px;
        width: 710px;
        /* border: 2px solid red; */
    }

    .col-2 {
        position: relative;
    }

    .address-box {
        display: inline-block;
        width: 300px;
        /* border: 1px solid black; */
    }

    .ref-box {
        /* border: 1px solid black; */
        display: inline-block;
        width: 300px;
        position: absolute;
        top: 0;
        right: 0;
    }

    table {
        width: 100%;
        padding: 5px;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        text-align: left;
        padding: 5px;
    }


    .sub-total,
    .gst,
    .total,
    .sub-total td,
    .gst td,
    .total td {
        border: none;
    }

    .sub-total td,
    .gst td,
    .total td {
        border-bottom: 1px solid black;
        padding: 2px;
        text-align: center;
    }

    td[colspan='3'] {
        text-align: right;
        font-weight: bold;
        border: none;
    }

    .sub-total td {
        padding-top: 10px;
    }


    .logo {
        height: 100px;
        position: relative;
    }

    .logo img {
        position: absolute;
        right: 0;
        top: 0;
    }
</style>

<body>
    <div class="quote-doc">
        <div class="logo">
            <img height="40px" src="https://www.aimtti.co.in/assets/images/Aim-TTi-logo_220.png" alt="">
        </div>

        <div class="col-2">
            <div class="address-box">
                <strong>For the attention of</strong>
                <br>
                <?php echo strtoupper($_SESSION['fullname']); ?>
                <br>
                <?php echo strtoupper($_SESSION['organization']); ?>
                <br>
                <?php echo strtoupper($_SESSION['address']); ?>
                <br>
                <?php echo strtoupper($_SESSION['city']); ?> <?php echo strtoupper($_SESSION['pincode']); ?>
                <br>
                <?php echo strtoupper($_SESSION['country']); ?>
            </div>
            <div class="ref-box">
                <div style="font-size: 20px; color: black; font-weight: bold; padding-bottom: 20px;">PRO FORMA INVOICE</div>
                <br>
                <strong>Reference:</strong> <?php echo generateReferenceNumber(); ?>
                <br>
                <strong>Date:</strong> <?php echo date('d-m-Y'); ?>
            </div>
        </div>

        <br><br>

        <div class="msg">
            <div style="padding-bottom: 20px;">
                Dear <?php echo strtoupper($_SESSION['fullname']); ?>,
            </div>
            <div>
                We thank you for your valued enquiry referred to above and have pleasure in submitting our Pro Forma Invoice,
                offered strictly under our Terms of Business, as printed in our current catalogue or website.
            </div>
        </div>

        <br><br>

        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Discription</th>
                        <th>Unit Price</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>


                    <?php

                    $subtotal = 0;


                    foreach ($_SESSION['invisible'] as $item) {


                        if ($_SESSION['invisiblecurrency'] === 'INR') {
                            $unitprice = round($item['modelPriceGBP'] * $_SESSION['goldennumber']);
                        }
                        if ($_SESSION['invisiblecurrency'] === 'USD') {
                            $unitprice = round($item['modelPriceUSD']);
                        }
                        if ($_SESSION['invisiblecurrency'] === 'EUR') {
                            $unitprice = round($item['modelPrice']);
                        }
                        if ($_SESSION['invisiblecurrency'] === 'GBP') {
                            $unitprice = round($item['modelPriceGBP']);
                        }

                        $totalamount = $unitprice * $item['quantity'];
                        $subtotal = $subtotal + $totalamount;

                        echo '
    <tr>

        <td>' . $item['modelName'] . '</td>
        <td>' . $item['modelDescription'] . '</td>
        <td>' . number_format($item['quantity'], 2) . '</td>
        <td>' . number_format($unitprice, 2) .  '</td>
        <td>' . number_format($totalamount, 2) . '</td>

    </tr>';
                    }

                    ?>





                    <tr class="sub-total">
                        <td colspan="3">Sub Total</td>
                        <td colspan="2"><?php echo number_format($subtotal, 2); ?></td>
                    </tr>
                    <tr class="gst">
                        <td colspan="3">GST</td>
                        <td colspan="2"><?php echo number_format($subtotal * 0.18, 2); ?></td>
                    </tr>
                    <tr class="total">
                        <td colspan="3">Total</td>
                        <td colspan="2"><?php echo number_format($subtotal * 1.18, 2); ?> <?php echo $_SESSION['invisiblecurrency']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br><br>

        <div class="term-box">
            The above prices will be held firm for a period of 30 days. Orders placed and delivered after this time however, will be
            charged at prices ruling at date of despatch.
            <br><br>
            Should you require further assistance, please contact us at +91 80 7696 7694.
            <br><br>
            Yours Sincerely,
            <br>
            for Aim TTi India Pvt. Ltd.
            <br><br>
            <div style="text-decoration: underline;">
                Customer Service Department
            </div>
        </div>

        <br><br>
        <hr>
        <br><br>

        <footer>
            <div style="display: inline-block; font-size: 8px; font-weight: bold; width: 200px; line-height: 10px">
                Aim TTi India Pvt. Ltd.
                <br>
                WZ-1258, Third Floor, Nand Gyan Bhawan
                <br>
                Ashram Lane, Palam Village,
                <br>
                New Delhi – 110045
                <br>
                aimtti.co.in
                <br>
                GSTIN : 07AADCN9370Q1ZO
                <br>
                PAN: AADCN9370Q
            </div>
            <div style="display: inline-block; width: 150px; padding-left: 40px; font-size: 8px; line-height: 10px">
                Accounts
                <br>
                Tel +91 (0) 80 4000 3888
                <br>
                Fax +91 (0) 80 4000 3880
            </div>
        </footer>
    </div>
</body>

</html>