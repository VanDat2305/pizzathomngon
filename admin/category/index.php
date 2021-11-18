<?php
require_once "../../global.php";
require "../../dao/category.php";
extract($_REQUEST);

if (exist_param("btn_insert")) {
    try {
        if ($cate_name != "") {
            category_insert($cate_name);
            unset($cate_name, $cate_id);
            $MESSAGE = "Thêm mới thành công!";
        } else {
            $MESSAGE = "Thêm mới thất bại!";
        }
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $items = category_select_page();
    $VIEW_NAME = "category/list.php";
} else if (exist_param("btn_update")) {
    try {
        category_update($cate_id, $cate_name);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $items = category_select_page();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete")) {
    try {
        category_delete($cate_id);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = category_select_page();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $checkbox = $_POST['check_id'];
        for ($i = 0; $i < count($checkbox); $i++) {
            $del_id = $checkbox[$i];
            category_delete($del_id);
        }
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = category_select_page();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    $items = category_select_page();
    // extract($item);
    $VIEW_NAME = "edit.php";
} else if (exist_param("list.php")) {
    $items = category_select_page();
    $VIEW_NAME = "list.php";
} else {
    $items = category_select_page();
    $VIEW_NAME = "list.php";
}


require "../layout.php";
