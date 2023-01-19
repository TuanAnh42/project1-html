<?php
require_once('../utils/utility.php');
require_once('../db/dbhelper.php');
session_start();
if (!empty($_POST)) {
  $car_name = getPost('p-name');
  $brand_id = getPost('brand');
  $range_id = getPost('range');
  $transmission_id = getPost('transmission');
  $fuel_id = getPost('fuel');
  $status = getPost('status');
  $price = getPost('price');
  $description = (getPost('description'));
  $sql_update_car = "UPDATE cars set name = '$car_name', brand_id = $brand_id, range_id = $range_id, transmission_id = $transmission_id, description = '$description', fuel_id = $fuel_id, price = $price, status = '$status', update_at = '".date('y-m-d h-i-s')."' where id =".$_POST['car_id'];
  if(db_config($sql_update_car)){
    echo 1;
  };
}

  header("Location: admin.php?admin=product");

