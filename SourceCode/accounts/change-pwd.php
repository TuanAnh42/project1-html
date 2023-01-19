<?php
require_once('../utils/p-title.php');
session_start();
if (empty($_POST) || !isset($_SESSION['uid'])) {
    header("Location: ../index.php");
    die();
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
        <form action="change-pwd-process.php" method="POST">
        <div class="form-group">
            <label>Old Password</label>
            <input type="password" class="form-control" name="o-p" required>
        </div>
        <div class="form-group">
            <label>New Password</label>
            <input type="password" minlength="8" class="form-control" name="n-p" required>
        </div>
        <div class="form-group">
            <label>Re-Enter New Password</label>
            <input type="password" minlength="8" class="form-control" name="r-n-p" required>
        </div>
        <div class="form-group">
            <button class="btn btn-success" name="upload" value="1">Save</button>
        </div>
        </form>
    </div>
</body>

</html>