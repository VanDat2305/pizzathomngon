<?php
require_once "../../global.php";
require "../../dao/contact.php";
extract($_REQUEST);

if (exist_param("btn_insert")) {
    try {
        contact_insert($contact_name, $contact_email, $contact_phone, $contact_address);
        unset($contact_name, $contact_email, $contact_phone, $contact_address, $contact_id, $contact_status);
        $MESSAGE = "Thêm mới thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $items = contact_select_all();
    $VIEW_NAME = "contact/list.php";
} else if (exist_param("btn_edit")) {
    $items = contact_select_by_id($contact_id);
    // extract($item);
    $VIEW_NAME = "form_edit.php";
} else if (exist_param("btn_update")) {
    try {
        contact_update($contact_id, $contact_name, $contact_email, $contact_phone, $contact_address);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $items = contact_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete")) {
    try {
        contact_delete($contact_id);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = contact_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $checkbox = $_POST['check_id'];
        for ($i = 0; $i < count($checkbox); $i++) {
            $del_id = $checkbox[$i];
            contact_delete($del_id);
        }
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = contact_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("list.php")) {
    $items = contact_select_all();
    $VIEW_NAME = "list.php";
} else if (isset($act)) {
    if ($act == "btn_none") {
        $contact_status = 0;
        contact_status_update($contact_id, $contact_status);
    } elseif ($act == "btn_show") {
        $contact_status = 1;
        contact_status_update($contact_id, $contact_status);
    }
    $items = contact_select_all();
    $VIEW_NAME = "list.php";
} else {
    $items = contact_select_all();
    $VIEW_NAME = "list.php";
}


require "../layout.php";
