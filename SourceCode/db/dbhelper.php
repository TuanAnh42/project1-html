<?php
require_once('config.php');
function db_config($sql, $ismulti = false)
{
    $conn = mysqli_connect(HOST, USER, PWD, DATABASE);
    $conn->set_charset('utf8');
    str_replace("'", "\'", $sql);
    str_replace("\"", "\\\"", $sql);
    if ($ismulti) {
        $conn->multi_query($sql);
    } else {
        $conn->query($sql);
    }
    echo mysqli_error($conn) . "\n";
    $conn->close();
}


function db_get_data($sql, $isSingle = true)
{
    $conn = mysqli_connect(HOST, USER, PWD, DATABASE);
    $conn->set_charset('utf8');
    str_replace("'", "\'", $sql);
    str_replace("\"", "\\\"", $sql);
    $data = null;
    $dataResult = $conn->query($sql);
    if ($dataResult == null) {
        return $data;
    }
    if ($isSingle) {
        $data = mysqli_fetch_assoc($dataResult);
    } else {
        $data = [];
        while (($result = mysqli_fetch_assoc($dataResult)) != null) {
            $data[] = $result;
        }
    }

    echo mysqli_error($conn) . "\n";
    $conn->close();
    return $data;
}
function db_insert_car($sql)
{
    $conn = mysqli_connect(HOST, USER, PWD, DATABASE);
    $conn->set_charset('utf8');
    str_replace("'", "\'", $sql);
    str_replace("\"", "\\\"", $sql);
    $conn->query($sql);

    echo mysqli_error($conn) . "\n";
    $id = mysqli_insert_id($conn);
    $conn->close();
    return $id;
}
