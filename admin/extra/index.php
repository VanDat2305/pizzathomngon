<?php
require_once "../../global.php";
require "../../dao/category.php";
require "../../dao/extra_topping.php";
extract($_REQUEST);

if (exist_param("form_insert")) {
    $items = category_select_all();
    // extract($item);
    $VIEW_NAME = "form_insert.php";
} elseif (exist_param("btn_insert")) {
    $items = category_select_all();
    if ($extra_name != "" || $extra_price > 0) {
        try {
            extra_insert($extra_name, $extra_price, $category_id);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!";
        }
    } else {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    $items = extra_select_by_id($extra_id);
    // extract($item);
    $VIEW_NAME = "form_edit.php";
} else if (exist_param("btn_update")) {
    $items = extra_select_by_id($extra_id);
    try {
        extra_update($extra_id, $extra_name, $extra_price);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $items = category_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete")) {
    try {
        extra_delete($extra_id);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = category_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $checkbox = $_POST['check_id'];
        for ($i = 0; $i < count($checkbox); $i++) {
            $del_id = $checkbox[$i];
            extra_delete($del_id);
        }
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = extra_select_all($id);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_info")) {
    $item_bl = extra_exist_cate_id($id);
    if ($item_bl) {
        $items = extra_select_all($id);
        $VIEW_NAME = "list_topping.php";
    } else {
        $items = category_select_all();
        $VIEW_NAME = "form_insert.php";
    }
} else {
    $items = category_select_all();
    $VIEW_NAME = "list.php";
}


require "../layout.php";
