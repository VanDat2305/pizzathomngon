<?php
require_once "../../global.php";
require "../../dao/comment.php";

extract($_REQUEST);

if (exist_param("btn_info")) {
    $items = comment_select_by_id_product($id);
    $VIEW_NAME = "list_detail.php";
}elseif(exist_param("btn_delete")){
    try {
       comment_delete($id);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = comment_select_product();
    $VIEW_NAME = "list.php";
}else{
    $items = comment_select_product();
    $VIEW_NAME = "list.php";
}


require "../layout.php";