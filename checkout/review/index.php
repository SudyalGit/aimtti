<?php
require_once('../../config/index.php');

$title = "Quotation | Aim-TTi India";
?>


<?php
// session_start();
if (isset($_POST['quotationformsubmit'])) {
    // echo 'submitted';
    $invisible = $_POST['invisible'];
    $invisiblecurrency = $_POST['invisiblecurrency'];
    $goldennumber = $_POST['goldennumber'];
    $temp = json_decode($invisible, true);
    $email = $_POST['email'];
    $organization = $_POST['organization'];
    $fullname = $_POST['fullname'];
    $country = $_POST['country'];
    $address = $_POST['address1'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $contact = $_POST['contact'];

    $_SESSION['invisiblecurrency'] = $invisiblecurrency;
    $_SESSION['goldennumber'] = $goldennumber;
    $_SESSION['invisible'] = $temp;
    $_SESSION['email'] = $email;
    $_SESSION['organization'] = $organization;
    $_SESSION['country'] = $country;
    $_SESSION['address'] = $address;
    $_SESSION['city'] = $city;
    $_SESSION['pincode'] = $pincode;
    $_SESSION['contact'] = $contact;
    $_SESSION['fullname'] = $fullname;

    if (!isset($_POST['sameAsBilling'])) {
        $shippingInfo = [
            'organization' => $_POST['shippingOrganization'],
            'country' => $_POST['shippingCountry'],
            'address' => $_POST['shippingAddress1'],
            'city' => $_POST['shippingCity'],
            'pincode' => $_POST['shippingPincode'],
        ];

        $_SESSION['shippingInfo'] = $shippingInfo;
    }



    // print_r($_SESSION);
    // echo $invisible;
    // print_r($_SESSION['goldennumber']);
    // print_r($_SESSION['invisiblecurrency']);
    // print_r($_SESSION['invisible']);
    // echo $_SESSION['invisible']['modelName'];





    // echo "<h2>Form submitted successfully!</h2>";
    // echo "<h3>Account Information</h3>";
    // echo "Email: $email<br>";
    // echo "<h3>Billing Information</h3>";
    // echo "Organization: $organization<br>";
    // echo "Country: $country<br>";
    // echo "Address: $address<br>";
    // echo "City: $city<br>";
    // echo "Pincode: $pincode<br>";
    // echo "Contact: $contact<br>";

    if (isset($shippingInfo)) {
        echo "<h3>Shipping Information</h3>";
        echo "Organization: {$shippingInfo['organization']}<br>";
        echo "Country: {$shippingInfo['country']}<br>";
        echo "Address: {$shippingInfo['address']}<br>";
        echo "City: {$shippingInfo['city']}<br>";
        echo "Pincode: {$shippingInfo['pincode']}<br>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo $domain; ?>favicon.ico" type="image/vnd.microsoft.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <link rel="stylesheet" href="<?php echo $domain; ?>assets/css/index.css">

    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #CCC;
            width: 100%;
        }

        td {
            background-color: #F1F5FA;
            padding: 4px 10px;
            border: 1px solid #CCC;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.3rem;
        }



        td[colspan="2"] {
            font-weight: 600;
            padding: 4px 10px;
            background-color: white;
            font-size: 1rem;
        }

        #quotation-table {
            margin-top: 1px;
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        #quotation-table td {
            border: 1px solid #CCC;
            padding: 4px 10px;
            background-color: white;
        }
        #sendmailandpdf{
            background-color: #667788;
            border: none;
            margin-top: 2px;
            padding: 4px 8px;
            color: white;
            font-weight: 600;
        }
        .price-cell{
            width: 10%;
        }
    </style>
</head>

<body>
    <div id="quotation"></div>



    <?php require_once('../../common/header.php'); ?>

    <div class="main">
        <?php require_once('../../common/side-menu.php'); ?>

        <div class="content">

            <h1>Review quotation</h1>

            <p>Review your quotation before continuing.</p>

            <table>
                <tbody>
                    <tr>
                        <td colspan="2">Quotation contents</td>
                    </tr>
                    <tr>
                        <td>
                            <table id="quotation-table">
                                <tr>
                                    <td>Product</td>
                                    <td>Description</td>
                                    <td>Quantity</td>
                                    <td>Price</td>
                                    <td>Total</td>
                                </tr>
                                <tr>
                                    <?php
                                    $grandtotal = 0;
                                    $currencysign = "";
                            
                                    if ($_SESSION["invisiblecurrency"] == "EUR") {
                                        $currencysign = "€";
                                    } elseif ($_SESSION["invisiblecurrency"] == "GBP") {
                                        $currencysign = "£";
                                    } elseif ($_SESSION["invisiblecurrency"] == "USD") {
                                        $currencysign = "$";
                                    }else{
                                        $currencysign = "₹";
                                    }
                                    // echo $currencysign;

                                    foreach ($_SESSION['invisible'] as $model) {
                                        if($_SESSION['invisiblecurrency'] === 'USD'){
                                            $unitprice = round($model['modelPriceUSD']);
                                        }
                                        if($_SESSION['invisiblecurrency'] === 'EUR'){
                                            $unitprice = round($model['modelPrice']);
                                        }
                                        if($_SESSION['invisiblecurrency'] === 'GBP'){
                                            $unitprice = round($model['modelPriceGBP']);
                                        }
                                        if($_SESSION['invisiblecurrency'] === 'INR'){
                                            $unitprice = round($model['modelPriceGBP'] * $_SESSION['goldennumber']);
                                        }
                                        $total = $unitprice * $model['quantity'];

                                        $grandtotal += $total;
                                        echo "<tr><td>{$model['modelName']}</td><td>{$model['modelDescription']}</td><td>{$model['quantity']}</td><td class='price-cell'>{$unitprice} {$currencysign} </td><td class='price-cell'>{$total} {$currencysign}</td></tr>";
                                    }

                                    echo "
                                    <tr style='text-align: right'>
                                        <td colspan='5'>Sales taxes, VAT and shipping costs will be included on the finalised quotation.</td>
                                    </tr>
                                    <tr>
                                        <td colspan='4'>Total</td>
                                        <td colspan='1'>$grandtotal {$currencysign}</td>
                                    </tr>
                                    ";

                                    ?>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Account information</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">E-mail address: </label><br>
                            <?php echo $email; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Billing information</td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $organization; ?>
                            <br><?php echo $fullname; ?>
                            <br><?php echo $address; ?>
                            <br><?php echo $city; ?> <?php echo $pincode; ?>
                            <br><?php echo $country; ?>
                            <br><strong>Contact Phone:</strong>
                            <br><?php echo $contact; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Shipping information
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            if (isset($shippingInfo)) {
                                echo $shippingInfo['organization'];
                                echo "<br>";
                                echo $shippingInfo['address'];
                                echo "<br>";
                                echo $shippingInfo['city'];
                                echo $shippingInfo['pincode'];
                                echo "<br>";
                                echo $shippingInfo['country'];
                                echo "<br>";
                            } else {
                                echo "Same as billing information";
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <form action="http://localhost/mywork/checkout/complete/index.php" method="post">
                <input class="cursor" id="sendmailandpdf" type="submit" name="sendmailandpdf" id="" value="Request for Quote">
            </form>
        </div>
    </div>

    <?php require_once('../../common/footer.php'); ?>

    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>

</body>

</html>