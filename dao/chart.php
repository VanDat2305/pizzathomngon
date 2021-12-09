<?php
require_once "pdo.php";


function chart_top_10_pro(){
    $sql = "SELECT pro.product_name, SUM(or_de.quantity) as sum_quantity 
    FROM `tbl_order_details` or_de 
    JOIN tbl_options op ON op.option_id = or_de.option_id 
    JOIN tbl_products pro ON pro.product_id = op.product_id
    GROUP BY pro.product_id 
    ORDER BY sum_quantity DESC
    LIMIT 0,10

    
    ";
    return pdo_query($sql);
}