<?php require_once('../../config/index.php'); ?>

<?php
$username = $email = $password = $confirm_password = "";
$username_err = $email_err = $password_err = $confirm_password_err = "";

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $organisation = $_POST['organisation'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $id = date("Ymdhis");

    if (empty($username)) {
        $username_err = "Please enter a username.";
        echo $username_err;
    }

    if (empty($email)) {
        $email_err = "Please enter an email.";
        echo $email_err;
    }

    if (empty($password)) {
        $password_err = "Please enter a password.";
        echo $password_err;
    }

    if (empty($confirm_password)) {
        $confirm_password_err = "Please confirm password.";
        echo $confirm_password_err;
    }

    if ($password != $confirm_password) {
        $confirm_password_err = "Passwords do not match.";
        echo $confirm_password_err;
    }

    // check email already exist or not
    $sql = "SELECT * FROM `users` WHERE `Email` = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $email_err = "Email already exists.";
        echo $email_err;
    }

    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`id`, `Username`, `Email`, `Password`) VALUES ('$id', '$username', '$email', '$hashed_password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: $domain/user/login");
        } else {
            echo "Something went wrong. Please try again later.";
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

    #register-form input {
        margin-bottom: 10px;
        width: 300px;
    }

    #register-form input[type="submit"] {
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
            <h1>Register</h1>
            <form id="register-form" action="" method="post">
                <label for="username">Username: </label>
                <span style="color: red !important; display: inline; float: none;">*</span><br>
                <input type="text" id="username" name="username" required><br>
                <label for="email">Email: </label>
                <span style="color: red !important; display: inline; float: none;">*</span><br>
                <input type="email" id="email" name="email" required><br>
                <label for="organisation">Organization: </label>
                <span style="color: red !important; display: inline; float: none;">*</span><br>
                <input type="text" id="organisation" name="organisation" required><br>
                <label for="contact">Contact: </label>
                <span style="color: red !important; display: inline; float: none;">*</span><br>
                <input type="text" id="contact" name="contact" required><br>
                <label for="password">Password: </label>
                <span style="color: red !important; display: inline; float: none;">*</span><br>
                <input type="password" id="password" name="password" required><br>
                <label for="confirm-password">Confirm Password: </label>
                <span style="color: red !important; display: inline; float: none;">*</span><br>
                <input type="password" id="confirm-password" name="confirm-password" required><br><br>
                <input type="submit" value="Register" name="register">
            </form>
            <p>Already have an account? <a href="<?php echo $domain; ?>user/login">login</a></p>
        </div>
    </div>

    <?php require_once('../../common/footer.php'); ?>

    <script src="<?php echo $domain; ?>assets/js/carousel.js"></script>
    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>
</body>

</html>