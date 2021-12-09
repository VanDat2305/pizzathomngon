<?php
require_once "../../global.php";
require_once "../../dao/chart.php";

$item_top10_product = chart_top_10_pro();
// echo "<pre>";
// var_dump($item_top10_product);
// die;
$VIEW_NAME = "chart.php";

require_once "../layout.php";