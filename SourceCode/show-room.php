<?php
require_once('./utils/utility.php');
require_once('./db/dbhelper.php');
require_once('getdata.php');
require_once('./utils/p-title.php');

if (!empty($_GET)) {
    $s = getGet('s');
    $current = [];
    $current['brand_id'] = getGet('brand');
    $current['range_id'] = getGet('range');
    $current['transmission_id'] = getGet('transmission');
    $current['fuel_id'] = getGet('fuel');
    $current['status'] = '"' . (getGet('status')) . '"';
    $c_page = getGet('page');
    $i = 1;
    $sql_select_cars = "SELECT * from cars where ";

    $sql_select_amount = "SELECT count(id) as max from cars where ";
    foreach ($current as $item => $value) {
        if ($value != null and $value != "" and $value != "\"\"") {
            if ($i == 1) {
                $sql_select_cars .= $item . " = " . $value;
                $sql_select_amount .= $item . " = " . $value;;
                $i++;
            } else {
                $sql_select_cars .= " and " . $item . " = " . $value;
                $sql_select_amount .= " and " . $item . " = " . $value;
                $i++;
            }
        }
    }
    if ($i == 1) {
        $sql_select_cars .= 1;
        $sql_select_amount .= 1;
    }

    // echo $sql_select_cars;

} else {
    $sql_select_cars = "SELECT * from cars ";
    $sql_select_amount = "SELECT count(id) as max from cars";
}
if (isset($s)) {
    $sql_select_amount = "SELECT count(id) as max from cars where name like '%" . $s . "%'";
}
// echo $sql_select_cars;
$maxPage = db_get_data($sql_select_amount, 1);
$maxPage['max'] = ceil($maxPage['max'] / 5);
$limit = 5;
$page = getGet('page');
// echo $sql_select_amount;
if (!isset($page) || $page < 0 || $page == null) {
    $page = 1;
}
if ($page > $maxPage['max']) {
    $page = $maxPage['max'];
}
$index = ($page - 1) * $limit;
$sql_select_cars .= " order by update_at DESC limit $index, $limit";
if (isset($s)) {
    $sql_select_cars = "SELECT * from cars where name like '%" . $s . "%'";
}
$cars = db_get_data($sql_select_cars, 0);
// echo $sql_select_cars;
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
    <link rel="stylesheet" type="text/css" href="./style/filter-style.css">
    <link rel="stylesheet" href="./style/brand-detail-style.css">
    <link rel="stylesheet" href="style/show-room-style.css">
</head>

<body>
    <!-- include and display Header -->
    <?php include('layout/header.php'); ?>
    <main>
        <div class="brand-show">

            <?php


            if (isset($current['brand_id']) and $current['brand_id'] != null) {
                $sql_select_detail_brand = "SELECT name, id, logo, description from brands where id = " . $current['brand_id'];
                $brand_detail = db_get_data($sql_select_detail_brand, 1);
                include('brand-detail.php');
            }
            ?>
        </div>
        <div class="filter">
            <?php
            include('filter.php');
            ?>
        </div>
        <div class="cars_show">
            <?php

            if ($cars) {
                foreach ($cars as $car) {
                    $sql_select_transmission = "SELECT name from transmissions where id = " . $car['transmission_id'];
                    $transmission = db_get_data($sql_select_transmission, 1);
                    $sql_select_fuel = "SELECT name from fuels where id = " . $car['fuel_id'];
                    $fuel = db_get_data($sql_select_fuel);
                    $sql_select_brand = "SELECT name from brands where id = " . $car['brand_id'];
                    $brand = db_get_data($sql_select_brand);
                    $sql_select_img = "SELECT name from imgdetails where car_id = " . $car['id'] . " LIMIT 1";
                    $img = db_get_data($sql_select_img, 1);
                    $sql_select_seller = "SELECT user_name, avatar from users where id = " . $car['seller_id'];
                    $seller = db_get_data($sql_select_seller);
                    if ($car['status'] == "0") {
                        $status = "Pre Owned";
                    } else {
                        $status = "New Car";
                    }
                    echo '<div class="car-item" onclick="redirect(' . $car['id'] . ')">
                <img src="img/cars/' . $img['name'] . '" alt="thumbnail">
                <div class="main-info">
                    <div class="car-info">
                        <h3>' . $car['name'] . '</h3>
                        <span>Price: ' . $car['price'] . '</span>
                        <div class="info">
                            <p><i class="fa-solid fa-calendar"></i>' . $brand['name'] . '</p>
                            <p><i class="fa-solid fa-gear"></i>' . $transmission['name'] . '</p>
                            <p><i class="fa-solid fa-flag-checkered"></i>' . $status . '</p>
                            <p><i class="fa-solid fa-gas-pump"></i>' . $fuel['name'] . '</p>
                        </div>
                    </div>
                    <div class="seller-info">
                        <img src="img/avatar/' . $seller['avatar'] . '" alt="avatar">
                        <span>' . $seller['user_name'] . '</span>
                        
                    </div>
                    <span style="font-size:13px; float:right">Update At: ' . $car['update_at'] . '</span>
                </div>
            </div>';
                }
            }
            ?>

        </div>
        <div class="page-changer">
            <button onclick="pageChange(<?= $page - 1 ?>, <?=(isset($c_page)?$c_page:$page)?>)" <?php if (!isset($c_page) or $page == 1) {
                                                                        echo "disabled";
                                                                    } ?>>Pre</button>
            <?php
            if (isset($c_page)) {
                for ($i = 1; $i <= $maxPage['max']; $i++) {
                    if ($i == $page) {
                        echo "<button onclick='pageChange($i, " . $c_page . ")' class=\"active\" disabled>$i</button>";
                    } else {
                        echo "<button onclick='pageChange($i, " . $c_page . ")'>$i</button>";
                    }
                }
            } else {
                for ($i = 1; $i <= $maxPage['max']; $i++) {
                    if ($i == $page) {
                        echo "<button onclick='pageChange1($i)' class=\"active\" disabled>$i</button>";
                    } else {
                        echo "<button onclick='pageChange1($i)'>$i</button>";
                    }
                }
            }
            ?>
            <button onclick="pageChange(<?= $page + 1 ?>, <?=(isset($c_page)?$c_page:$page)?>)" <?php if ($page >= $maxPage['max'] || $maxPage['max'] == 1) {
                                                                        echo "disabled";
                                                                    } ?>>Next</button>
        </div>
    </main>
    <!-- include and display footer -->
    <?php include('layout/footer.php'); ?>

    <script>
        function redirect(id) {
            window.location.href = "product-detail.php?car_id=" + id;
        }

        function pageChange1(page) {
            var check = window.location.href.includes('?');
            var check2 = window.location.href.includes('page')
            if (check) {
                window.location.href += "&page=" + page;
            } else {
                window.location.href += "?page=" + page;
            }
        }

        function pageChange(page, currentPage) {
            var check = window.location.href.includes('?');
            var check2 = window.location.href.includes('page')
            if (check && !check2) {
                window.location.href += "&page=" + page;
            } else if (!check) {
                window.location.href += "?page=" + page;
            } else if (check && check2) {
                window.location.href = window.location.href.replace('page=' + currentPage, 'page=' + page)
            }
        }
    </script>
</body>

</html>