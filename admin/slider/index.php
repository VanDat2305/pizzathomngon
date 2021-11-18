<?php
require_once "../../global.php";
require "../../dao/slide.php";
extract($_REQUEST);
if (exist_param("btn_insert")) {
    $up_hinh = save_file("hinh", "$IMAGE_DIR/slides/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : "";
    if (strlen($hinh) > 0) {     
        try {
                slide_insert($hinh);
                unset($hinh, $slider_id,$slider_status);
                $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!";
        }
    }else{
         $MESSAGE = "Thêm mới thất bại!";
    } 
    $items = slide_select_all();
    $VIEW_NAME = "slide/list.php";
} else if (exist_param("btn_update")) {
    try {
        slide_update($slider_id, $hinh);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $items = slide_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete")) {
    try {
        slide_delete($slider_id);
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
} else{
    $items = slide_select_all();
    $VIEW_NAME = "list.php";
}


require "../template.php";
