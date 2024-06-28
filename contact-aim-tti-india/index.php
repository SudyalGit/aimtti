<?php require_once('../config/index.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="https://aimtti.co.in/favicon.ico" type="image/vnd.microsoft.icon" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <meta name="description" content="Contact page for general and technical enquiries for Aim-TTi India." />
    <link rel="canonical" href="https://aimtti.co.in/webform/contact-aim-tti-india" />
    <title>Contact Aim-TTi | Aim-TTi India</title>

    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<style>
  


    @media only screen and (max-width: 600px) {
        .content {
            width: 100% !important;
        }

        #contactform input,
        select {
            display: block;
            width: 100% !important;
        }

        #contactformsubmit {
            margin-top: 8px;
            width: auto !important;
            padding: 2px 4px;
        }
    }

    input[type=number] {
        width: 60px;
    }

    label {
        color: #444;
    }

    #contactform input,
    #contactform select {
        display: block;
        width: 500px;
    }

    #contactform .form-group {
        background-color: #DDDDDD;
        padding: 4px;
        margin-top: 4px;
    }

    #contactformsubmit{
        margin-top: 8px;
            width: auto !important;
            padding: 2px 4px;
    }
</style>

<body>
    <?php require_once('../common/header.php'); ?>

    <div class="main">
        <?php require_once('../common/side-menu.php'); ?>

        <div class="content">

            <h1>Contact Aim-TTi</h1>

            <div class="contact-form">
                <form id="contactform" action="" method="post">

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <span style="color: red !important; display: inline; float: none;">*</span>
                        <input type="text" id="name" name="name" required>
                    </div>


                    <div class="form-group">
                        <label for="email">Email:</label>
                        <span style="color: red !important; display: inline; float: none;">*</span>
                        <input type="email" id="email" name="email" required>
                    </div>



                    <div class="form-group">
                        <label for="organization">Organization:</label>
                        <input type="text" id="organization" name="organization">
                    </div>


                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address">
                    </div>




                    <div class="form-group">
                        <label for="city">Town/City:</label>
                        <input type="text" id="city" name="city">
                    </div>



                    <div class="form-group">
                        <label for="postcode">Postcode/ZIP:</label>
                        <input type="text" id="postcode" name="postcode">
                    </div>


                    <div class="form-group">
                        <label for="country">Country:</label>
                        <input type="text" id="country" name="country">
                    </div>



                    <div class="form-group">
                        <label for="telephone">Telephone:</label>
                        <input type="text" id="telephone" name="telephone">
                    </div>



                    <div class="form-group">
                        <label for="message">Message:</label>
                        <p style="font-size: 10px">
                            Please let us have as much detail as possible. If this is a technical enquiry, please let us know the serial number of your unit (which allows us to know its build configuration) and the firmware version(s) if applicable.
                        </p>
                        <textarea style="width: 100%; height: 100px" id="message" name="message"></textarea>
                    </div>



                    <input type="submit" name="contactformsubmit" id="contactformsubmit">


            </div>

            </form>
        </div>

    </div>

    <?php require_once('../common/footer.php'); ?>

    <script src="<?php echo $domain; ?>assets/js/carousel.js"></script>
    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>
</body>

</html>