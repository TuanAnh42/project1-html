<?php
    require_once("./db/dbhelper.php");
    require_once("./utils/utility.php");
    $brand_id = getGet('brand');
    $brand_id_max = db_get_data("SELECT MAX(id) as max from brands where 1", 1);
    if($brand_id > (int)$brand_id_max['max']){
        $brand_id = "";
    }
    $range_id = getGet('range');
    $range_id_max = db_get_data("SELECT MAX(id) as max from ranges where 1", 1);
    if($range_id > (int)$range_id_max['max']){
        $range_id = "";
    }
    $transmission_id = getGet('transmission');
    $transmission_id_max = db_get_data("SELECT MAX(id) as max from transmission where 1", 1);
    if($transmission_id > (int)$transmission_id_max['max']){
        $transmission_id = "";
    }
    $fuel_id = getGet('fuel');
    $fuel_id_max = db_get_data("SELECT MAX(id) as max from fuels where 1", 1);
    if($fuel_id > (int)$fuel_id_max['max']){
        $fuel_id = "";
    }
?>
