<?php
require_once('../utils/utility.php');
require_once('../db/dbhelper.php');
if (!empty($_GET)) {
	session_start();
	$id = getGet('car_id');

	$sql_check_deler = "SELECT seller_id from cars where id = " . $id;
	$deler = db_get_data($sql_check_deler, 1);
	if ($deler['seller_id'] == $_SESSION['uid'] or $_SESSION['uid'] == 1) {
		$sql_delete_product = "delete from cars where id = " . $id;
		db_config($sql_delete_product);
	} else {
		header("Location: ../index.php");
		exit;
	}
}
$sql_check = "select id from cars where id = " . $id;
$list = db_get_data($sql_check, 1);
if ($list == null) {
	header('Location: admin.php?admin=product');
	die();
}
