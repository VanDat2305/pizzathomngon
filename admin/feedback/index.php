<?php
require_once "../../global.php";
require "../../dao/feedback.php";
check_role_admin();
extract($_REQUEST);

if (exist_param("btn_delete_all")) {
    try {
        $checkbox = $_POST['feedback_id'];
        for ($i = 0; $i < count($checkbox); $i++) {
            $del_id = $checkbox[$i];
            feedback_delete($del_id);
        }
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = feedback_select_all();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_delete")) {
    try {
        feedback_delete($feedback_id);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = feedback_select_all();
    $VIEW_NAME = "list.php";
}else{
    $items = feedback_select_all();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
