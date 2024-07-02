<?php require_once('../../config/index.php'); ?>

<?php
// start session
// session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../checkout/complete/vendor/autoload.php';

$mail = new PHPMailer(true);


// check if user is already logged in
if (isset($_SESSION['user_id'])) {
    header('Location: ../../');
    exit();
}

$email = $password = '';
$err = '';

// login form submission
if (isset($_POST['reset'])) {
    $email = $_POST['email'];

    if (empty($email)) {
        $err = 'All fields are required';
        echo $err;
    } else {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            // set new password and email
            $password = bin2hex(random_bytes(8));
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);  // hash password

            $sql = "UPDATE users SET password = '$hashed_password' WHERE email = '$email'";
            mysqli_query($conn, $sql);


            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'sudhyal99@gmail.com';                     //SMTP username
                $mail->Password   = 'vvdpvqyjbbinktul';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS` 

                //Recipients
                $mail->setFrom('sudhyal99@gmail.com', 'Aim-TTi Contact us Form');
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
                $mail->Subject = 'Aim TTi India Team';
                $mail->Body    = "Your new password is: $password";
                $mail->AltBody = '';

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
        } else {
            $err = 'Invalid email';
            echo $err;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="https://aimtti.co.in/favicon.ico" type="image/vnd.microsoft.icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="description" content="Overview of available support from Aim-TTi India including links to downloads, manuals, brochures, drivers, and more." />
    <link rel="canonical" href="https://aimtti.co.in/support" />
    <title>Support | Aim-TTi India</title>

    <link rel="stylesheet" href="../../assets/css/index.css">
</head>
<style>
    h2 {
        margin-top: 0.5rem;
    }

    h3 {
        margin-top: 30px;
        margin-bottom: 2px;
    }

    a {
        color: #0062A0;
    }

    #login-form input {
        margin-bottom: 10px;
        width: 300px;
    }

    #login-form input[type="submit"] {
        border-radius: 3px;
        border: 2px solid rgba(136, 136, 136, 0.3803921569);
        padding: 0 3px;
        font-weight: 700;
        width: auto;
    }
</style>

<body>
    <?php require_once('../../common/header.php'); ?>

    <div class="main">
        <?php require_once('../../common/side-menu.php'); ?>

        <div class="content">
            <h1>Request New Password</h1>
            <form id="login-form" action="" method="post">
                <label for="email">Email: </label>
                <span style="color: red !important; display: inline; float: none;">*</span><br>
                <input type="email" id="email" name="email"><br>
                <input type="submit" name="reset" value="Email new Password">
            </form>
            <p>Don't have an account? <a href="<?php echo $domain; ?>user/register">register</a></p>
        </div>
    </div>

    <?php require_once('../common/footer.php'); ?>

    <script src="<?php echo $domain; ?>assets/js/carousel.js"></script>
    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>
</body>

</html>