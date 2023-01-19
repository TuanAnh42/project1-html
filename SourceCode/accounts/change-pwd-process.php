<?php
session_start();
require_once('../db/dbhelper.php');
require_once('../utils/utility.php');

if (empty($_POST) || !isset($_SESSION['uid'])) {
    header("Location: ../index.php");
    die();
    // echo $_SESSION['uid'];
}
else{
    $old_pass_1 =getMD5(getPost('o-p'));
    $new_pass = getMD5(getPost('n-p'));
    $re_new_pass = getMD5(getPost('r-n-p'));
    if($new_pass != $re_new_pass){
        echo 'New password and re-enter new password is not the same';
        exit;
    }
    else{
        $sql_select_old_pass = "SELECT password from users where id = ".$_SESSION['uid'];
        $user = db_get_data($sql_select_old_pass, 1);
        echo $old_pass_1 .", ",$user['password'];
        if($old_pass_1 != $user['password']){
            echo 'Old password is incorrect!!';
            echo '<button onclick="history.go(-2)">Return</button>';
            exit;
        }
        else{
            $sql_change_password = "UPDATE users set password = '" .$new_pass ."' where id = ".$_SESSION['uid'];
            echo $sql_change_password;
            db_config($sql_change_password);
            echo 'Change password success, return to <a href="../index.php">home page</a>';
        }
    }
}
?>