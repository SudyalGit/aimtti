<?php
session_start();
require_once('../../config/index.php');

$title = "Quotation | Aim-TTi India";
$message = "";
$success = true;
$color = '#398d39';
?>








<!-- PDF HANDLING -->

<?php
require_once 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Configure Dompdf options
$options = new Options();
$options->set('isRemoteEnabled', true);

// Instantiate and use the Dompdf class with the configured options
$dompdf = new Dompdf($options);

// Load HTML content with the image
ob_start();
include('template.php');
$htmlContent = ob_get_clean();
$dompdf->loadHtml($htmlContent);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Define the output folder and file path
$outputFolder = __DIR__ . '';
$outputPath = $outputFolder . '/quotation.pdf';

// Create the output folder if it doesn't exist
if (!file_exists($outputFolder)) {
    mkdir($outputFolder, 0777, true);
}

// Save the generated PDF to a file
file_put_contents($outputPath, $dompdf->output());

// echo "PDF file created successfully at " . $outputPath;
?>





<!-- MAIL HANDLING -->

<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST["sendmailandpdf"])) {
    // echo 'form submitted';
    $email = $_SESSION['email'];
}

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.aimtti.co.in';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'in-sales@aimtti.co.in';                     //SMTP username
    $mail->Password   = 'In-sales@2324';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS` 

    //Recipients
    $mail->setFrom('in-sales@aimtti.co.in', 'Aim-TTi-Sales');
    $mail->addAddress($email);     //Add a recipient
    $mail->addAddress('in-sales@aimtti.co.in');               //Name is optional
    $mail->addReplyTo('in-sales@aimtti.co.in', 'Information');
    $mail->addCC('in-sales@aimtti.co.in');
    $mail->addBCC('in-sales@aimtti.co.in');

    // Attachments
    $mail->addAttachment('quotation.pdf');         //Add attachments
    // $mail->addAttachment('/quotation/output.pdf', 'output.pdf');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Quote for Aim-TTI Products';
    $mail->Body    = 'Thanks for your enquiry and giving us an opportunity to quote<br><br><br><br>Best Regards<br>Aim-TTi Sales Team<br> </b> <br> Call us: <a href="tel:+918076967694">+91 80 7696 7694</a>';
    $mail->AltBody = 'Kindly find enclosed our best offer for Aim-TTi Products';

    $mail->send();
    session_destroy();
    $message = "THANKS! for your enquiry <br>Your Quotation has been sent to your registered email id. Our Sales Team will get it touch with you shortly";
    echo '<script>
    localStorage.clear();
    </script>';
    // echo 'Message has been sent';
} catch (Exception $e) {
    $message = "Wrong Information Please try again";
    $success = false;
    $color = "red";
    // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
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


</head>

<body>
    <div id="quotation"></div>



    <?php require_once('../../common/header.php'); ?>

    <div class="main">
        <?php require_once('../../common/side-menu.php'); ?>

        <div style="margin-top: 6%; margin-left: 144px;" class="content">

            <h1 style="color: <?php echo $color; ?>; font-weight: 500;">
                <?php $success ? print('(✓) Quotation Sent') : print('(X) Quotation Not Sent'); ?>
            </h1>
            
            <p>
                <?php echo $message; ?>
            </p>

            
        </div>
    </div>

    <?php require_once('../../common/footer.php'); ?>

    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>
    <script src="<?php echo $domain; ?>assets/js/cart.js"></script>


</body>

</html>