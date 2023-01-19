<?php
require_once('./db/dbhelper.php');
require_once('./utils/utility.php');
require_once('getdata.php');
require_once('./utils/p-title.php');
$sql_select_lastest_cars = "SELECT * from cars order by update_at DESC limit 9";
$lastest_cars = db_get_data($sql_select_lastest_cars, 0);
// echo $sql_select_lastest_cars;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=PAGE_TITLE?></title>
    <link rel="stylesheet" href="./style/footer-style.css">
    <link rel="stylesheet" href="./style/style.css">

    <link rel="stylesheet" href="./style/header-style.css">
    <link rel="stylesheet" href="./style/slide-style.css">
    <link rel="stylesheet" href="./style/signup.css">
    <!-- <link rel="stylesheet" href="./style/about-us-style.css"> -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="https://kit.fontawesome.com/36fca0a55a.js" crossorigin="anonymous"></script>
    <script src="js/slide.js"></script>
    <script defer src="js/sticky.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/ajax-loadDoc.js"></script>
    <script src="./js/scroll.js"></script>
    <link rel="stylesheet" href="./style/main-content-style.css">

</head>

<body>
    <!-- include and display Header -->
    <?php include('layout/header.php'); ?>
    <?php include('layout/slide.php'); ?>
    <main>
        <div class="lastest">
            <h3>Lastest Car</h3>
            <?php
            if ($lastest_cars) {
                foreach ($lastest_cars as $lastest_car) {
                    $sql_select_transmission = "SELECT name from transmissions where id = " . $lastest_car['transmission_id'];
                    $transmission = db_get_data($sql_select_transmission, 1);
                    $sql_select_fuel = "SELECT name from fuels where id = " . $lastest_car['fuel_id'];
                    $fuel = db_get_data($sql_select_fuel);
                    $sql_select_brand = "SELECT name from brands where id = " . $lastest_car['brand_id'];
                    $brand = db_get_data($sql_select_brand);
                    $sql_select_img = "SELECT name from imgdetails where car_id = " . $lastest_car['id'] . " LIMIT 1";
                    $img = db_get_data($sql_select_img, 1);
                    if ($lastest_car['status'] == "0") {
                        $status = "Pre Owned";
                    } else {
                        $status = "New Car";
                    }
                    echo '<div class="car-item">
                        <a href="product-detail.php?car_id=' . $lastest_car['id'] . '"><img src="./img/cars/' . $img['name'] . '" alt="thumbnail"></a>
                        <h3>' . $lastest_car['name'] . '</h3>
                        <span>Price: ' . $lastest_car['price'] . '</span>
                        <div class="info">
                            <p><i class="fa-solid fa-calendar"></i>' . $brand['name'] . '</p>
                            <p><i class="fa-solid fa-gear"></i>' . $transmission['name'] . '</p>
                            <p><i class="fa-solid fa-flag-checkered"></i>' . $status . '</p>
                            <p><i class="fa-solid fa-gas-pump"></i>' . $fuel['name'] . '</p>
                        </div>
                    </div>';
                }
            }
            ?>

        </div>
    </main>
    <!-- include and display footer -->
    <?php include('layout/footer.php'); ?>
</body>

</html>