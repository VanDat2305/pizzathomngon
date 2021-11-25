<?php
require_once "../../global.php";
require "../../dao/order.php";

extract($_REQUEST);

if (exist_param("btn_info")) {
    $item = order_select_by_id($id);
    $option = option_detail_select_order($id);
    $topping = select_list_topping();
    $VIEW_NAME = "list_detail.php";
}elseif(exist_param("btn_update_status")){
    try {
        status_order_update($id, $status_id);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $items = order_select_list();
    $list_status = status_select_all();
    $VIEW_NAME = "list.php";

}else{
    $items = order_select_list();
    $list_status = status_select_all();
    $VIEW_NAME = "list.php";
}

require "../layout.php";