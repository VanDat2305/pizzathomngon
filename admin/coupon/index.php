<?php
require_once "../../global.php";
require "../../dao/coupon.php";
extract($_REQUEST);
if (exist_param("form_insert")) {
    $VIEW_NAME = "form_insert.php";
} elseif (exist_param("btn_insert")) {
    if ($coupon_name != "" || $coupon_code != "" || $coupon_count != "" || $coupon_price != "" || $start_date != "" || $end_start != "") {
        try {
            coupon_insert($coupon_code, $coupon_name, $coupon_count, $coupon_used = 0, $coupon_price, $coupon_type, $coupon_status, $start_date, $end_date);
            unset($coupon_code, $coupon_name, $coupon_count, $coupon_used, $coupon_price, $coupon_type, $coupon_status, $start_date, $end_date);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!";
        }
    } else {
        $MESSAGE = "Thêm mới thất bại";
    }
    $items = coupon_select_all();
    $VIEW_NAME = "list.php";
} elseif (exist_param("form_edit")) {
    $item = coupon_select_by_id($coupon_id);
    $VIEW_NAME = "form_edit.php";
} elseif (exist_param("btn_edit")) {
    if ($coupon_name != "" || $coupon_code != "" || $coupon_count != "" || $coupon_price != "" || $start_date != "" || $end_start != "") {
        try {
            coupon_update($coupon_id, $coupon_code, $coupon_name, $coupon_count, $coupon_price, $coupon_type, $coupon_status, $start_date, $end_date);
            unset($coupon_id, $coupon_code, $coupon_name, $coupon_count, $coupon_price, $coupon_type, $coupon_status, $start_date, $end_date);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại";
        }
    } else {
        $MESSAGE = "Thêm mới thất bại";
    }
    $items = coupon_select_all();
    $VIEW_NAME = "list.php";
} elseif (exist_param("act")) {
    if ($act == "btn_acticve") {
        $coupon_status = 1;
    } else {
        $coupon_status = 0;
    }
    try {
        coupon_update_status($coupon_id, $coupon_status);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại";
    }
    $items = coupon_select_all();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_delete")) {
    try {
        coupon_delete($coupon_id);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại";
    }
    $items = coupon_select_all();
    $VIEW_NAME = "list.php";
} else {
    $items = coupon_select_all();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
