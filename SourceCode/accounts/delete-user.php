<?php
require_once('../utils/utility.php');
require_once('../db/dbhelper.php');
if (!empty($_GET)) {
	session_start();
	$id = getGet('id');
	if ($_SESSION['uid'] == 1 and $id != 1) {
		$sql_delete_user = "delete from users where id = '$id'";
		db_config($sql_delete_user);
	} else {
		header("Location: ../index.php");
		exit;
	}
}
$sql = "select * from users where id = '$id'";
$list = db_get_data($sql, true);
if($list == null) {
	header('Location: admin.php?admin=user ');
	die();
}
?>