<?php
require_once('./db/dbhelper.php');
require_once('./utils/utility.php');
require_once('getdata.php');
require_once('./utils/p-title.php');
session_start();
if($_SESSION['uid'] != 1){
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
        <form action="upload-b.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Brand Name</label>
                <input type="text" class="form-control" name="b-name" required>
            </div>
            <div class="form-group">
                <label>Add Image :</label>
                <input type="file" name="file" multiple accept="image/png, image/jpeg, image/jpg" >
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