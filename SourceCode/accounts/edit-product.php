<?php
require_once('../utils/utility.php');
require_once('../db/dbhelper.php');
require_once('../getdata.php');
require_once('../utils/p-title.php');

if (!empty($_GET)) {
    session_start();
    $id = getGet('car_id');

    $sql_check_editor = "SELECT seller_id from cars where id = " . $id;
    $editor = db_get_data($sql_check_editor, 1);
    if ($editor['seller_id'] != $_SESSION['uid']) {
        header("Location: ../index.php");
        exit;
    }
    $sql_select_car = "SELECT * from cars where id = " . $id;
    $car = db_get_data($sql_select_car);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=PAGE_TITLE?></title>
    <link rel="stylesheet" href="../style/style_edit/style-edit-product.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="container">
        <form action="edit-product-process.php" method="POST">
            <input type="number" name="car_id" value="<?=$id?>"  style="display: none;">
            <div class="form-group">
                <label>Product Name: </label>
                <input type="text" class="form-control" name="p-name" required value="<?= $car['name'] ?>">
            </div>
            <div class="form-group">
                <label>Brand :</label>
                <select name="brand" class="form-control" required>
                    <option value="">--Select--</option>

                    <?php
                    foreach ($brands as $brand) {
                        if ($brand['id'] == $car['brand_id']) {
                            echo '<option value="' . $brand['id'] . '" selected>' . $brand['name'] . '</option>';
                        } else {

                            echo '<option value="' . $brand['id'] . '">' . $brand['name'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Ranges :</label>
                <select name="range" class="form-control" required>
                    <option value="">--Select--</option>

                    <?php
                    foreach ($ranges as $range) {
                        if ($range['id'] == $car['range_id']) {
                            echo '<option value="' . $range['id'] . '" selected>' . $range['name'] . '</option>';
                        } else {

                            echo '<option value="' . $range['id'] . '">' . $range['name'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Transmissions :</label>
                <select name="transmission" class="form-control" required>
                    <option value="">--Select--</option>

                    <?php
                    foreach ($transmissions as $transmission) {
                        if ($transmission['id'] == $car['transmission_id']) {
                            echo '<option value="' . $transmission['id'] . '" selected>' . $transmission['name'] . '</option>';
                        } else {

                            echo '<option value="' . $transmission['id'] . '">' . $transmission['name'] . '</option>';
                        }}
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Fuels :</label>
                <select name="fuel" class="form-control" required>
                    <option value="">--Select--</option>

                    <?php
                    foreach ($fuels as $fuel) {
                        if ($fuel['id'] == $car['fuel_id']) {
                            echo '<option value="' . $fuel['id'] . '" selected>' . $fuel['name'] . '</option>';
                        } else {

                            echo '<option value="' . $fuel['id'] . '">' . $fuel['name'] . '</option>';
                        }}
                    ?>
                </select>
            </div>
            <div class="stt">
                <label for="">Status :</label>
                <label for="male">Old Car</label>
                <input type="radio" name="status" value="0" required>
                <label for="male">New Car</label>
                <input type="radio" name="status" value="1" required>
            </div>
            <div class="form-group">
                <label>Price :</label>
                <input type="text" name="price" class="form-control" value="<?=$car['price']?>">
            </div>
            <div class="form-group">
                <label for="">Description :</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">
                        <?=$car['description'] ?>
                </textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" name="upload" value="1">Save</button>
            </div>
        </form>

    </div>
</body>

</html>