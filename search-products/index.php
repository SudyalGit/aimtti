<?php
require_once('../config/index.php');

// Retrieve search query
$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';



// SQL query to search for products
$sql = "SELECT * FROM productmodels WHERE ModelName LIKE ?";
$searchTerm = "%" . mysqli_real_escape_string($conn, $searchQuery) . "%";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $searchTerm);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
// print_r($result);

// echo mysqli_fetch_assoc($result)['ModelName'];
// echo mysqli_fetch_assoc($result)['ModelName'];
// echo mysqli_fetch_assoc($result)['ModelName'];
// echo mysqli_fetch_assoc($result)['ModelName'];

$title = "Product Search | Aim-TTi India";

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

<style>
    table {
        border: 1px solid #CCC;
        width: 100%;
        margin-bottom: 5px;
        border-collapse: collapse;
    }

    .views-align-center {
        text-align: center;
    }

    thead th,
    th {
        background: #f7f7f7;
        border-bottom: 1px solid #ccc;
        color: #333;
    }

    td,
    th {
        padding: 0px 12px;
    }

    th {
        text-align: left;
        font-weight: 400;
    }

    table img {
        height: 90%;
        width: 90%;
        object-fit: contain;
    }

    td {
        width: 15%;
    }

    .views-field {
        width: 85%;
        font-size: 14px;
    }

    .views-field a {
        font-size: 16px;
    }

    tr {
        border: 1px solid #CCC;
    }

    a {
        color: #0062A0;
        text-decoration: none;
    }
</style>

<body>
    <?php require_once('../common/header.php'); ?>

    <div class="main">
        <?php require_once('../common/side-menu.php'); ?>

        <div class="content">

            <h1>Product Search</h1>

            <table class="views-table cols-2">
                <thead>
                    <tr>
                        <th class=" views-align-center" scope="col">
                            Series Image </th>
                        <th class="views-field views-field-views-conditional" scope="col">
                            Details </th>
                    </tr>
                </thead>
                <tbody>



                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            $sql = "SELECT * FROM products WHERE ProductID = " . $row['ProductID'];
                            $rsl = mysqli_query($conn, $sql);

                            $r = mysqli_fetch_assoc($rsl);
                            // echo $r["ProductName"];

                            echo '
                            
<tr class="odd views-row-first">
    <td>
        <a href="/product-category/dc-power-supplies/aim-cpxseries"><img src="' . $domain . 'sites/default/files/styles/medium/public/' . htmlspecialchars($row['ImageURL']) . '" width="100" height="61" alt="Aim-TTi CPX400DP (CPX Series) DC Bench power supply"></a>
    </td>
    <td class="views-field views-field-views-conditional">
        <a href="' . $domain . 'product-category' . htmlspecialchars($r["ProductURL"]) . '">' . htmlspecialchars($r["ProductName"]) . '</a><br>
         Model: ' . htmlspecialchars($row['ModelName']) . ' - ' . htmlspecialchars($row['ModelDescription']) . '
    </td>
</tr>


                            ';
                        }
                    } else {
                        echo "<li>No results found</li>";
                    }
                    ?>





                    <!-- <tr class="odd views-row-first">
                        <td>
                            <a href="/product-category/dc-power-supplies/aim-cpxseries"><img src="https://www.aimtti.com/sites/default/files/styles/thumbnail/public/image/large/AIM-CPX400DP-1k.jpg?itok=qRUSdsDg" width="100" height="61" alt="Aim-TTi CPX400DP (CPX Series) DC Bench power supply"></a>
                        </td>
                        <td class="views-field views-field-views-conditional">
                            <b>Product Series:</b> <a href="/product-category/dc-power-supplies/aim-cpxseries">CPX Series</a><br>
                            <b>Model: </b>CPX200D - Bench/System/ATE Programmable DC Power Supply Dual Output, 2 x 60V/10A 180W, No Interfaces
                        </td>
                    </tr> -->





                </tbody>
            </table>
        </div>
    </div>

    <?php require_once('../common/footer.php'); ?>

    <script src="<?php echo $domain; ?>assets/js/carousel.js"></script>
    <script src="<?php echo $domain; ?>assets/js/currency-selection.js"></script>
    <script src="<?php echo $domain; ?>assets/js/add-to-quatation.js"></script>

</body>

</html>