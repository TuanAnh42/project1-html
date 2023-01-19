<?php
require_once('./utils/utility.php');
require_once('./db/dbhelper.php');
date_default_timezone_set("America/New_York");
session_start();
if (!empty($_POST)) {
  $car_name = getPost('p-name');
  $brand_id = getPost('brand');
  $range_id = getPost('range');
  $transmission_id = getPost('transmission');
  $fuel_id = getPost('fuel');
  $status = getPost('status');
  $price = getPost('price');
  $description = str_replace("'", "\'", getPost('description'));
  $sql_insert_car = "INSERT into cars(name, brand_id, range_id, transmission_id, description, fuel_id, price, status, update_at, seller_id)
                    value('$car_name', '$brand_id', '$range_id', '$transmission_id', '$description', '$fuel_id', '$price', '$status', '" . date('y-m-d h-i-s') . "', '" . $_SESSION['uid'] . "');";

  $current_id = db_insert_car($sql_insert_car);
  echo $current_id;
}
if (isset($_POST['upload'])) {
  var_dump($_FILES);
  echo 1;
  $name = [];
  $tmp_name = [];
  $error = [];
  $ext = [];
  $size = [];
  foreach ($_FILES['file']['name'] as $file) {
    $name[] = $file;
  }
  foreach ($_FILES['file']['tmp_name'] as $file) {
    $tmp_name[] = $file;
  }
  foreach ($_FILES['file']['error'] as $file) {
    $error[] = $file;
  }
  foreach ($_FILES['file']['type'] as $file) {
    $ext[] = $file;
  }
  foreach ($_FILES['file']['size'] as $file) {
    $size[] = round($file / 1024, 2);
  }
  echo "Tổng số file được tải lên: " . count($name) . "<br>";
  echo "<table>";
  for ($i = 0; $i < count($name); $i++) {
    if ($error[$i] > 0) {
      echo "Lỗi: " . $error[$i];
    } else {
      $upload_dir = "./img/cars/";
      $file_name = date('h-i-s') . rand(1, 1000) . $name[$i];
      $upload_file = $upload_dir . $file_name;

      if (file_exists($upload_file)) {
        echo 'File đã tồn tại';
      } else {
        if (move_uploaded_file($tmp_name[$i], $upload_file)) {
          echo "<tr>\n<td>" . $name[$i] . "</td>\n";
          echo '<td>' . $ext[$i] . "</td>\n";
          echo '<td>' . $size[$i] . " kB</td>\n";
          echo '<td>' . $upload_file . "</td>\n</tr>";
          $sql_add_img = "INSERT INTO imgdetails(car_id, name)
          value('$current_id', '$file_name')";
          if (db_config($sql_add_img)) {
            echo 'Added img success';
          }
        } else echo 'loi';
      }
    }
  }
  echo '</table>';
  header("Location: ./accounts/admin.php");
}
