<?php
require_once "../../global.php";
require "../../dao/slider.php";
check_role_admin();
extract($_REQUEST);
if (exist_param("btn_insert")) {
    $up_slide_image = save_file("slide_image", "$IMAGE_DIR/banners/");
    $slide_image = strlen($up_slide_image) > 0 ? $up_slide_image : "";
    if (strlen($slide_image) > 0) {
        try {
            slide_insert($slide_image);
            unset($slide_image, $slide_id, $slide_status);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!";
        }
    } else {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $items = slide_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("act")) {

    if ($act == "btn_hien") {
        try {
            slide_update($slide_id, 1);
            $MESSAGE = "Cập nhật thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
        }
    } elseif ($act == "btn_an") {
        try {
            slide_update($slide_id, 0);
            $MESSAGE = "Cập nhật thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
        }
    }
    $items = slide_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete")) {
    try {
        slide_delete($slide_id);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = slide_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $checkbox = $_POST['check_id'];
        for ($i = 0; $i < count($checkbox); $i++) {
            $del_id = $checkbox[$i];
            slide_delete($del_id);
        }
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = slide_select_all();
    $VIEW_NAME = "list.php";
} else {
    $items = slide_select_all();
    $VIEW_NAME = "list.php";
}


require "../layout.php";
