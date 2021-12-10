<?php
header('content-type application/json') ;
require_once "../../global.php";
require_once "../../dao/chart.php";

extract($_REQUEST);
if (isset($date_time)) {
    if ($date_time == 100) {
        $day = 0;
        $getAll = true;
    }else{
        $day = $date_time;
        $getAll = false;
    }
}else{
    $day = 0;
    $getAll = true;
}
$item_statistic = chart_money_statistic($getAll,$day);
$data = array();
foreach($item_statistic as $item){
    $data[] = array(
        'date_field' => $item['date_field'],
        'total_money' => number_format($item['total_money'],0,"","")
        
    );
}


echo json_encode($data);