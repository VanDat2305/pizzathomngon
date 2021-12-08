<?php
require_once "pdo.php";


function chart_top_10_pro(){
    $sql = "SELECT TOP 10 * 
            FROM tbl_products 

    
    ";
    return pdo_query_value($sql);
}