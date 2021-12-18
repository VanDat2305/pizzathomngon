<?php 
require_once "../dao/order.php";

if ($_POST['view'] == "update") {
    update_noti();
}
$number_noti = count_order_new();

echo $number_noti;
?>