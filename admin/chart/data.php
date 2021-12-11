<?php
header('content-type application/json') ;
require_once "../../global.php";
require_once "../../dao/chart.php";

$item_top10_product = chart_top_10_pro();
$item_status_order =  chart_status_order();



$total_sum = 0;

foreach($item_status_order as $item){
    $total_sum += $item['count_status'];
}
$data2 = array();
foreach($item_status_order as $item){
    $data2[] = array(
        'status_name' => $item['status_name'],
        'count_status' =>( $item['count_status']/ $total_sum) * 100
    );

}


echo json_encode($data2);