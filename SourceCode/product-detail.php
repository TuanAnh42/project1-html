<?php
require_once('./db/dbhelper.php');
require_once('./utils/utility.php');
require_once('./getdata.php');
require_once('./utils/p-title.php');
if (!empty($_GET)) {
    $car_id = getGet('car_id');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=PAGE_TITLE?></title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.5.0.min.js" defer></script>
    <script type="text/javascript" src="./js/slide.js" defer></script>
    <link rel="stylesheet" href="./style/slide-style.css">
    <link rel="stylesheet" href="./style/header-style.css">
    <!-- <link rel="stylesheet" href="./vendor/fontawesome-free-6.1.1-web/css/all.min.css"> -->
    <script src="https://kit.fontawesome.com/36fca0a55a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/footer-style.css">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./js/scroll.js"></script>
    <script src="./js/sticky.js" defer></script>

</head>

<body>
    <header>
        <?php
            include('./layout/header.php');
            if (isset($car_id)) {
                $sql_select_car = "SELECT * from cars where id = " . $car_id;
                $car = db_get_data($sql_select_car, 1);
                $sql_select_imgs = "SELECT * from imgdetails where car_id = " . $car['id'];
                $imgs = db_get_data($sql_select_imgs, 0);
                $sql_select_transmission = "SELECT name from transmissions where id = " . $car['transmission_id'];
                $transmission = db_get_data($sql_select_transmission, 1);
                $sql_select_fuel = "SELECT name from fuels where id = " . $car['fuel_id'];
                $fuel = db_get_data($sql_select_fuel, 1);
                $sql_select_brand = "SELECT name from brands where id = " . $car['brand_id'];
                $brand = db_get_data($sql_select_brand, 1);
                $sql_select_range = "SELECT name from ranges where id = " . $car['range_id'];
                $range = db_get_data($sql_select_range, 1);
                $sql_select_seller = "SELECT * from users where id = " . $car['seller_id'];
                $seller = db_get_data($sql_select_seller, 1);
                if($car['status'] == 1){
                    $status = "New";
                }
                else{
                    $status = "Pre Owned";
                }
                // var_dump($imgs);
            }
        ?>
    </header>
    <div class="main">
        <h2><?= $car['name'] ?></h2>
        <h4>Price: <b style="font-size: 25px;color: #1b5fac;">$<?= $car['price'] ?></b></h4>
        <div class="main_left">
            <div class="slide">
                <div class="slide-top">
                    <img src="./img/cars/<?= $imgs[0]['name'] ?>" id="main-img">
                </div>
                <div class="botton">
                    <div class="slide-botton">
                        <p>
                            <?php
                            foreach ($imgs as $img) {
                                echo '<img src="./img/cars/' . $img['name'] . '">';
                            }
                            ?>
                        </p>

                    </div>
                    <div class="infor_top">
                        <div class="line1">
                            <p>
                                <i class="fas fa-calendar"></i><b>Brand </b> <i><?=$brand['name'] ?></i>
                            </p>
                            <p>
                                <i class="fa fa-car"></i><b>Range: </b> <i><?=$range['name']?> </i>
                            </p>
                            <p>
                                <i class="fa-solid fa-car-on"></i>
                                <b>Status</b> <i><?=$status ?></i>
                            </p>
                        </div>
                        <div class="line2">

                            <p>
                                <i class="fa-solid fa-gauge-high"></i>
                                <b>Transmision: </b> <i><?=$transmission['name'] ?></i>
                            </p>
                            <p>
                                <i class="fa fa-gas-pump"></i>
                                <b>Engine Type </b> <i><?=$fuel['name']?></i>
                            </p>
                        </div>
                    </div>
                    <div class="infor_botton">
                        <h3>Describe</h3>
                        <div class="describe">
                            <p><?=$car['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_right">
            <div class="row">
                <img src="img/avatar/<?=$seller['avatar']?>" alt="avt">
                <h3><?=$seller['user_name']?></h3>
            </div>
            <div class="row">
                <i>Address: <?=$seller['address'] ?></i>
            </div>
            <div class="row">
                <p>Email: <a href="mailto:<?=$seller['email'] ?>"><?=$seller['email'] ?></a></p>
            </div>
            <div class="row">
                <p>Phone: <a href="tel:<?$seller['phone_number'] ?>"><?=$seller['phone_number'] ?></a></p>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <footer>
        <?php
            include('./layout/footer.php');
        ?>
    </footer>
</body>

</html>