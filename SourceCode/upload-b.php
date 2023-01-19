<?php
require_once('./utils/utility.php');
require_once('./db/dbhelper.php');
session_start();
if (!empty($_POST)) {
  $brand_name = getPost('b-name');
  $description = str_replace("'", "\'", getPost('description'));
}
if (isset($_POST['upload'])) {
  var_dump($_FILES);
  echo 1;
  $name = $_FILES['file']['name'];
  $tmp_name = $_FILES['file']['tmp_name'];
  $error =$_FILES['file']['error'];
  $ext = $_FILES['file']['type'];
  $size = $_FILES['file']['size'];
  
  
    if ($error) {
      echo "Lỗi: " . $error;
    } else {
      $upload_dir = "./img/logo/";
      $file_name = date('h-i-s') . rand(1, 1000) . $name;
      $upload_file = $upload_dir . $file_name;

      if (file_exists($upload_file)) {
        echo 'File đã tồn tại';
      } else {
        if (move_uploaded_file($tmp_name, $upload_file)) {
          echo  $name;
          echo $ext;
          echo $size . " kB";
          echo  $upload_file;
        } else echo 'loi';
      }
    }
    $sql_insert_brand = "INSERT into brands(name, description, logo)
    value('$brand_name', '$description', '$file_name')";
    db_config($sql_insert_brand);
  }
  header("Location: ./accounts/admin.php");

