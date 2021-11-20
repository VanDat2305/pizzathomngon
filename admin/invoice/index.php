<?php
require_once "../../global.php";
require "../../dao/order.php";

extract($_REQUEST);

if (exist_param("btn_info")) {
    $item = order_select_by_id($id);
    $option = option_detail_select_order($id);
    $topping = select_list_topping();
    $VIEW_NAME = "list_detail.php";
}else{
    $items = order_select_list();
    $VIEW_NAME = "list.php";
}

require "../layout.php";