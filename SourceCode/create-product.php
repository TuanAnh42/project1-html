<?php
require_once('./db/dbhelper.php');
require_once('./utils/utility.php');
require_once('getdata.php');
require_once('./utils/p-title.php');
session_start();
$sql = "SELECT sell_permission from users where id = ".$_SESSION['uid'];
$sp = db_get_data($sql, 1);
if($sp['sell_permission'] != "1"){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=PAGE_TITLE?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Product Name: </label>
                <input type="text" class="form-control" name="p-name" required>
            </div>
            <div class="form-group">
                <label>Brand :</label>
                <select name="brand" class="form-control" required>
                    <option value="">--Select--</option>

                    <?php
                    foreach ($brands as $brand) {
                        echo '<option value="' . $brand['id'] . '">' . $brand['name'] . '</option>';
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
                        echo '<option value="' . $range['id'] . '">' . $range['name'] . '</option>';
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
                        echo '<option value="' . $transmission['id'] . '">' . $transmission['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Fuels :</label>
                <select name="fuel" class="form-control" required>
                    <option value="">--Select--</option>

                    <?php
                    foreach ($fuels as $fuel) {
                        echo '<option value="' . $fuel['id'] . '">' . $fuel['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="stt">
                <label for="">Status :</label>
                <label for="male">Old Car</label>
                <input type="radio" name="status" value="0">
                <label for="male">New Car</label>
                <input type="radio" name="status" value="1">
            </div>
            <div class="form-group">
                <label>Price :</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label>Add Image :</label>
                <input type="file" name="file[]" multiple accept="image/png, image/jpeg, image/jpg" >
            </div>
            <div class="form-group">
                <label for="">Description :</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">

                </textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" name="upload" value="1">Save</button>
            </div>
        </form>

    </div>
</body>

</html>