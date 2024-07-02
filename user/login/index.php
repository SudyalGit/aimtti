<?php require_once('../../config/index.php'); ?>



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









    <?php
    // start session
    // session_start();

    // check if user is already logged in
    if (isset($_SESSION['user_id'])) {
        header('Location: ../../');
        exit();
    }

    $email = $password = '';
    $err = '';

    // login form submission
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            $err = 'All fields are required';
            echo $err;
        } else {
            // password stored in hased in the database
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            if ($result && mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    header('Location: ../../');
                    exit();
                } else {
                    $err = 'Incorrect password';
                    echo $err;
                }
            } else {
                $err = 'User not found';
                echo $err;
            }
        }
    }
    ?>












    <div class="main">
        <?php require_once('../../common/side-menu.php'); ?>

        <div class="content">
            <h1>Login</h1>
            <form id="login-form" action="" method="post">
                <label for="email">Email: </label>
                <span style="color: red !important; display: inline; float: none;">*</span><br>
                <input type="email" id="email" name="email" required><br>
                <label for="password">Password: </label>
                <span style="color: red !important; display: inline; float: none;">*</span><br>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" name="login" value="Login">
            </form>
            <p>Don't have an account? <a href="<?php echo $domain; ?>user/register">register</a></p>
            <p>Forgot your password? <a href="<?php echo $domain; ?>user/password">reset password</a></p>
        </div>
    </div>

    <?php require_once('../common/footer.php'); ?>

    <script src="<?php echo $domain; ?>assets/js/carousel.js"></script>
    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>
</body>

</html>