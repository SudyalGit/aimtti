<?php require_once('../config/index.php'); ?>


<?php

$requiredInput = '';

// generating captcha

$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < 6; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}







use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../checkout/complete/vendor/autoload.php';



$mail = new PHPMailer(true);

if (isset($_POST["contactformsubmit"])) {



    if ($_POST['captcha'] != $_POST['captchacode']) {
        $requiredInput = 'Please fill the correct captcha.';
        echo '<script type="text/javascript">alert("' . $requiredInput . '");</script>';
    } else {

        // echo 'form submitted';
        $email = $_POST['email'];


        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'sudhyal99@gmail.com';                     //SMTP username
            $mail->Password   = 'vvdpvqyjbbinktul';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS` 

            //Recipients
            $mail->setFrom('sudhyal99@gmail.com', 'Mailer');
            $mail->addAddress($email);     //Add a recipient
            $mail->addAddress('sudhyal99@gmail.com');               //Name is optional
            $mail->addReplyTo('sudhyal99@gmail.com', 'Information');
            $mail->addCC('sudhyal99@gmail.com');
            $mail->addBCC('sudhyal99@gmail.com');

            // Attachments
            // $mail->addAttachment('quotation.pdf');         //Add attachments
            // $mail->addAttachment('/quotation/output.pdf', 'output.pdf');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Quote for Aim-TTI Products';
            $mail->Body    = '<b> Thanks for your giving us an opportunity to quote </b>';
            $mail->AltBody = 'Kindly find enclosed our best offer for Aim-TTi Products';

            $mail->send();
            $message = "Your Request has been sent successfully";
            $success = true;
            // echo $message;
            $color = "#28a745";
        } catch (Exception $e) {
            $message = "Wrong Information Please try again";
            $success = false;
            // echo $message;
            $color = "#dc3545";
        }
    }
}






?>




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
        display: inline-block;
    }

    #contactformsubmit {
        margin-top: 8px;
        width: auto !important;
        padding: 2px 4px;
    }

    #captcha-code {
        color: #002876;
        font-size: 30px;
        font-weight: 500;
        text-align: center;
        padding: 4px;
        border-radius: 4px;
        letter-spacing: 4px;
    }

    #alert-message {
        padding: 10px 10px;
        display: none;
    }
</style>



<body>
    <?php require_once('../common/header.php'); ?>

    <div class="main">
        <?php require_once('../common/side-menu.php'); ?>

        <div class="content">

            <div style="<?php if (isset($color)) echo "background-color: " . $color . ";"; ?>color: white" id="alert-message"><?php if (isset($message)) echo $message; ?></div>

            <h1>Contact Aim-TTi India</h1>

            <p><b>Aim-TTi, India</b> Delhi, Mumbai, Banglore, Chennai, Kolkata</p>
            <p><b>Tel: </b><a href="tel:+91 8076967694">+91 8076967694</a> <b>Email: </b><a href="mailto:in-sales@aimtti.co.in">in-sales@aimtti.co.in</a></p>
            <p>For more information on Aim-TTi products, specific service or support queries, or if you would like to be contacted by one of our sales team please fill in the form below.</p>

            <div class="contact-form">
                <form id="contactform" action="" method="post">




                    <div class="form-group">
                        <label for="request-type">Request type:</label>
                        <!-- <span style="color: red !important; display: inline; float: none;">*</span> -->
                        <select name="request-type" id="request-type">
                            <option value="none">None</option>
                            <option value="Product Information">Product Information</option>
                            <option value="Sales Enquiry">Sales enquiry</option>
                            <option value="Technical query">Technical query</option>
                            <option value="Warranty Repair">Warranty repair</option>
                            <option value="Out of warranty Repair">Out of warranty repair</option>
                            <option value="Other">Other</option>

                        </select>
                    </div>

                    <br>



                    <div class="form-group">
                        <label for="name">Name:</label>
                        <span style="color: red !important; display: inline; float: none;">*</span>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <br>


                    <div class="form-group">
                        <label for="email">Email:</label>
                        <span style="color: red !important; display: inline; float: none;">*</span>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="organization">Organization:</label>
                        <span style="color: red !important; display: inline; float: none;">*</span>
                        <input type="text" id="organization" name="organization" required>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address">
                    </div>

                    <br>


                    <div class="form-group">
                        <label for="city">Town/City:</label>
                        <input type="text" id="city" name="city">
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="postcode">Postcode/ZIP:</label>
                        <input type="text" id="postcode" name="postcode">
                    </div>

                    <br>
                    <div class="form-group">
                        <label for="country">Country:</label>
                        <span style="color: red !important; display: inline; float: none;">*</span>
                        <input type="text" id="country" name="country" required>
                    </div>


                    <br>
                    <div class="form-group">
                        <label for="telephone">Telephone:</label>
                        <span style="color: red !important; display: inline; float: none;">*</span>
                        <input type="text" id="telephone" name="telephone" required>
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <p style="font-size: 10px">
                            Please let us have as much detail as possible. If this is a technical enquiry, please let us know the serial number of your unit (which allows us to know its build configuration) and the firmware version(s) if applicable.
                        </p>
                        <textarea style="width: 100%; height: 100px" id="message" name="message"></textarea>
                    </div>

                    <br>


                    <div class="form-group">
                        <label for="captcha">Captcha Code</label>
                        <span style="color: red !important; display: inline; float: none;">*</span>
                        <span style="font-size: 10px; color: red !important;""><?php echo $requiredInput ?></span>
                        <input type=" text" name="captcha" id="captcha" required>
                    </div>

                    <input type="hidden" name="captchacode" id="" value="<?php echo $randomString; ?>">

                    <div class="form-group">
                        <div id="captcha-code">
                            <?php
                            echo $randomString;
                            ?>
                        </div>
                    </div>
                    <br>



                    <input type="submit" name="contactformsubmit" id="contactformsubmit">


            </div>

            </form>
        </div>

    </div>

    <?php require_once('../common/footer.php'); ?>

    <!-- <script src="<?php echo $domain; ?>assets/js/carousel.js"></script> -->
    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>

    <script>
        const alertBox = document.getElementById("alert-message");

        function showSuccessAlert() {
            if (alertBox.innerHTML != "") {
                alertBox.style.display = "block";
                alertBox.style.backgroundColor = "#28a745";
                setTimeout(function() {
                    alertBox.style.display = "none";
                }, 2000);
            }
        }

        function showDangerAlert() {
            if (alertBox.innerHTML != "") {
                alertBox.style.display = "block";
                alertBox.style.backgroundColor = "#dc354";
                setTimeout(function() {
                    alertBox.style.display = "none";
                }, 2000);
            }
        }

        showSuccessAlert();
        showDangerAlert();
    </script>
</body>

</html>