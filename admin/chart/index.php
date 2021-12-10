<?php
require_once "../../global.php";
require_once "../../dao/chart.php";

$item_top10_product = chart_top_10_pro();
// $item_statistic = chart_money_statistic();
// echo "<pre>";
// var_dump($item_statistic);
// die;
$VIEW_NAME = "chart.php";

require_once "../layout.php";