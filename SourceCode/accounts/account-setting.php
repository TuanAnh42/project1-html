<?php
require_once('../db/dbhelper.php');
require_once('../utils/getuser.php');
require_once('../utils/p-title.php');
    if($_SESSION['logged'] != 1){
        header('Location: ../index.php');
        die();
    }
    $sql_select_cars = "SELECT id, name, brand_id, price, status, seller_id from cars where seller_id = ".$_SESSION['uid']." order by update_at DESC";
    $cars = db_get_data($sql_select_cars, 0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=PAGE_TITLE?></title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="../style/adm-header-style.css"> -->
    <link rel="stylesheet" href="../style/adm-menu-style.css">
    <!-- <link rel="stylesheet" href="../style/style-create.css"> -->
    <!-- <link rel="stylesheet" href="../style/style-dashboard.css"> -->
    <link rel="stylesheet" href="../style/style-product.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="../style/style-profile.css"> -->
    <link rel="stylesheet" href="../style/style-user.css">
    <script src="../js/toChangeAvt.js"></script>
</head>
<body>
    <main>
        <?php
        include("../layout/adm-menu.php");
        ?>
        <div class="row-right">
            <?php
            if(isset($_GET['admin'])){
                $tam=$_GET['admin'];
            }else{
                $tam='profile';
            }
            if($tam=='profile'){
                include('../layout/profile.php');
            }elseif($tam=='user'){
                include('../layout/user.php');
                
            }elseif($tam=='product' ){
                include('../layout/product.php');
            }else{
                include('../layout/brand.php');
            }
            
            ?>
        </div>
    </main>
    <footer>
        
    </footer>
</body>
</html>