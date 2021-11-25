<?php
require_once "../../global.php";
require "../../dao/logo.php";
extract($_REQUEST);
if (exist_param("btn_insert")) {
    $up_logo_image = save_file("logo_image", "$IMAGE_DIR/logos/");
    $logo_image = strlen($up_logo_image) > 0 ? $up_logo_image : "";
    if (strlen($logo_image) > 0) {
        try {
            logo_insert($logo_image);
            unset($logo_image, $logo_id, $logo_status);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!";
        }
    } else {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $items = logo_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("act")) {

    if ($act == "btn_hien") {
        try {
            logo_update($logo_id, 1);
            $MESSAGE = "Cập nhật thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
        }
    } elseif ($act == "btn_an") {
        try {
            logo_update($logo_id, 0);
            $MESSAGE = "Cập nhật thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
        }
    }
    $items = logo_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete")) {
    try {
        logo_delete($logo_id);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = logo_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $checkbox = $_POST['check_id'];
        for ($i = 0; $i < count($checkbox); $i++) {
            $del_id = $checkbox[$i];
            logo_delete($del_id);
        }
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = logo_select_all();
    $VIEW_NAME = "list.php";
} else {
    $items = logo_select_all();
    $VIEW_NAME = "list.php";
}


require "../layout.php";
