<?php
require_once "../../global.php";
require "../../dao/blog.php";
extract($_REQUEST);
if (exist_param("btn_info")) {
    $item = blog_select_by_id($blog_id);
    $VIEW_NAME = "list_detail.php";
} elseif (exist_param("form_insert")) {
    $VIEW_NAME = "form_insert.php";
} elseif (exist_param("btn_insert")) {
    $up_blog_image = save_file("blog_image", "$IMAGE_DIR/blog/");
    $blog_image = strlen($up_blog_image) > 0 ? $up_blog_image : "";
    $create_at =  date_format(date_create(), 'Y-m-d H:i:s');
    $status = 0;
    try {
        blog_insert($blog_title, $blog_content, $blog_image, $create_at, $status);
        unset($blog_title, $blog_content, $blog_image, $create_at, $status);
        $MESSAGE = "Thêm mới thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $items = blog_select_all();
    $VIEW_NAME = "list.php";
} elseif (exist_param("form_edit")) {
    $item = blog_select_by_id($blog_id);
    $VIEW_NAME = "form_edit.php";
} elseif (exist_param("btn_edit")) {
    $up_image = save_file("blog_image", "$IMAGE_DIR/blog/");
    $blog_image = strlen($up_image) > 0 ? $up_image : $image_old;
    try {
        blog_update($blog_id, $blog_title, $blog_content, $blog_image);
        unset($blog_id, $blog_title, $blog_content, $blog_image);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại";
    }
    $items = blog_select_all();
    $VIEW_NAME = "list.php";
} elseif (exist_param("act")) {
    if ($act == "btn_hien") {
        try {
            blog_status_update($blog_id, 1);
            $MESSAGE = "Cập nhật thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
        }
    } elseif ($act == "btn_an") {
        try {
            blog_status_update($blog_id, 0);
            $MESSAGE = "Cập nhật thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
        }
    }
    $items = blog_select_all();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_delete")) {
    try {
        blog_delete($blog_id);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại";
    }
    $items = blog_select_all();
    $VIEW_NAME = "list.php";
} else {
    $items = blog_select_all();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
