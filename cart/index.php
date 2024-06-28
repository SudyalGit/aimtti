<?php
require_once('../config/index.php');

$title = "Quotation | Aim-TTi India";
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="https://www.aimtti.com/favicon.ico" type="image/vnd.microsoft.icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <link rel="canonical" href="https://www.aimtti.com/cart" />
    <title>Quotation | Aim-TTi India</title>

    <link rel="stylesheet" href="<?php echo $domain; ?>assets/css/index.css">

    <style>
        table {
            border: 1px solid #CCC;
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th {
            background: #f7f7f7;
            border-bottom: 1px solid #ccc;
            color: #333;
            padding: 4px 8px;
            vertical-align: middle;
            font-weight: 400;
            font-size: 15px;
            text-align: left;
        }

        td {
            padding: 4px 8px;
            vertical-align: middle;
            font-size: 14px;
        }

        tr {
            border-bottom: 1px solid #ccc;
        }

        .quantity-input {
            width: 50px;
        }


        .remove button {
            padding: 2px;
        }

        #totalsum {
            padding: 1rem;
            text-align: right;
        }

        .request-quotation-btn {
            background-color: #667788;
            border: none;
            margin-top: 2px;
            padding: 4px 8px;
            color: white;
            font-weight: 600;
        }

        .request-quotation-btn a {
            text-decoration: none;
            color: white;
        }

        .request-quotation-btn-container {
            text-align: right;
        }

        /* .cart-container{
            overflow-x:auto;
        } */

        @media only screen and (max-width: 600px) {
            .content {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
    <div id="quotation"></div>



    <?php require_once('../common/header.php'); ?>

    <div class="main">
        <?php require_once('../common/side-menu.php'); ?>

        <div class="content">

            <h1>Quotation</h1>

            <div class="cart-container">
                <div style="overflow-x:auto;">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Remove</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div id="totalsum"></div>
                <div class="request-quotation-btn-container">
                    <button class="request-quotation-btn cursor"><a href="<?php echo $domain; ?>checkout">Request Quotation</a></button>
                </div>
            </div>
        </div>
    </div>


    <?php require_once('../common/footer.php'); ?>

    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>
    <script src="<?php echo $domain; ?>assets/js/cart.js"></script>





</body>

</html>