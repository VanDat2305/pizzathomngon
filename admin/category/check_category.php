<?php
require_once "../../global.php";
require "../../dao/category.php";
if (isset($_GET['act']) ) {
   

if ($_GET['act'] == 'insert') {
    $result = category_exist_name($_GET['category_name']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if ($_GET['act'] == 'update') {
    // var_dump($_GET['ma_category']);
    $result = category_exist_category_name($_GET['category_id'],$_GET['category_name']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
}