<?php

$domain = "http://localhost/mywork/";

// database
$servername = "localhost";
$username = "root";
$password = "";
$database = "aimttiindia_db";

// create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<script>console.log('database connected');</script>";
