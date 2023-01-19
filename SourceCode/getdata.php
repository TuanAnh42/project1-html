<?php
    $sql_select_brands = "SELECT name, id, logo from brands";
    $brands = db_get_data($sql_select_brands, 0);
    $sql_select_ranges = "SELECT name, id from ranges";
    $ranges = db_get_data($sql_select_ranges, 0);
    $sql_select_fuels = "SELECT name, id from fuels";
    $fuels = db_get_data($sql_select_fuels, 0);
    $sql_select_transmissions = "SELECT name, id from transmissions";
    $transmissions = db_get_data($sql_select_transmissions, 0);
