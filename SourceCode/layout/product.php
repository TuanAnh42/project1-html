<?php

require_once('../utils/utility.php');
require_once('../db/dbhelper.php');
if (!empty($_GET)) {
    if (isset($_GET['s'])) {
        $s = " and name like '%" . getGet("s") . "%'";
    }
}
$sql_select_cars = "SELECT id, name, brand_id, price, status, seller_id from cars where seller_id = ".$_SESSION['uid'];
if(isset($s)){
    $sql_select_cars .= $s;
}

$sql_select_cars .= " order by update_at DESC";
// echo $sql_select_cars;
$cars = db_get_data($sql_select_cars, 0);
?>

    <div class="container">
        <div class="header">
            <h2> Product Management</h2>
            <hr>
        </div>
        <div class="content">
            <div class="buttons">
                <button class="buttons-1"><a href="../create-product.php"><i class="fa fa-plus" aria-hidden="true"></i> Create New Product</a></button>
                <form action="" method="GET" onsubmit="return false">
                    <div class="search">
                        <input type="text" name="s" id="">
                        <button class="buttons-5">Search</button>
                    </div>
                </form>
            </div>
            <hr>
            <div class="list">
                <table>
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Brand</th>
                            <th colspan="2">Manipulation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($cars)){
                        foreach ($cars as $car) {
                            $sql_select_img = "SELECT name from imgdetails where car_id = " . $car['id'] . " LIMIT 1";
                            $img = db_get_data($sql_select_img, 1);
                            $sql_select_brand = "SELECT name from brands where id =" . $car['brand_id'];
                            $brand = db_get_data($sql_select_brand);
                            echo '<tr>
                                <td>' . $car['id'] . '</td>
                                <td>' . $car['name'] . '</td>
                                <td><img class="image" src="../img/cars/' . $img['name'] . '" alt="Thumbnail"></td>
                                <td>' . $car['status'] . '</td>
                                <td>$' . $car['price'] . '</td>
                                <td>' . $brand['name'] . '</td>
                                <td class="edit"><a href="edit-product.php?car_id=' . $car['id'] . '">Edit</a></td>
                                <td class="delete"><button onclick="delete1(' . $car['id'] . ')">Delete</button></td>
                            </tr>';}
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        var today = new Date();
        var date = today.getMonth() + 1 + '/' + today.getDate() + '/' + today.getFullYear();
        var time = today.getHours() + ":" + today.getMinutes();
        var dateTime = date + ' ' + time;
        document.getElementById("time").innerHTML = "Now: " + dateTime;

        function delete1(id) {
            if (confirm("Are you so sure about that?") == true) {
                window.location.href = "delete-product.php?car_id=" + id;
            }
        }
        document.querySelector('.buttons-5').addEventListener("click", function() {
            window.location.href += "&s=" + document.querySelector('[name=s]').value
        })
    </script>
