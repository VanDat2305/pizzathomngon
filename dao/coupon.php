<?php
require_once "pdo.php";
/**
 * Them moi
 */
function coupon_insert($coupon_code,$coupon_name,$coupon_count,$coupon_used,$coupon_price,$coupon_type,$coupon_status,$start_date,$end_date){
    $sql = "INSERT INTO tbl_coupons(`coupon_code`,`coupon_name`,`coupon_count`,`coupon_used`,`coupon_price`,`coupon_type`,`coupon_status`,`start_date`,`end_date`) VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$coupon_code,$coupon_name,$coupon_count,$coupon_used,$coupon_price,$coupon_type,$coupon_status,$start_date,$end_date);
}

/**
 * Cap nhat 
 */
function coupon_update($coupon_id,$coupon_code,$coupon_name,$coupon_count,$coupon_price,$coupon_type,$coupon_status,$start_date,$end_date){
    $sql = "UPDATE tbl_coupons SET `coupon_code` = ?,`coupon_name` = ?,`coupon_count` = ?,`coupon_price`  = ?,`coupon_type` = ?,`coupon_status`= ?,`start_date` = ?,`end_date`= ? WHERE coupon_id = ?";
    pdo_execute($sql,$coupon_code,$coupon_name,$coupon_count,$coupon_price,$coupon_type,$coupon_status,$start_date,$end_date,$coupon_id);
}
/**
 * update status
 */
function coupon_update_status($coupon_id,$coupon_status){
    $sql = "UPDATE tbl_coupons SET `coupon_status` = ? WHERE `coupon_id` = ?";
    pdo_execute($sql,$coupon_status,$coupon_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function coupon_delete($coupon_id){
    $sql = "DELETE FROM tbl_coupons WHERE coupon_id = ?";
    if(is_array($coupon_id)){
        foreach($coupon_id as $id ){
            pdo_execute($sql, $id);
        }
    }else{
        pdo_execute($sql, $coupon_id);
    }
}
/**
 * truy van tat ca 
 */
function coupon_select_all(){
     $sql = "SELECT * FROM tbl_coupons order by coupon_id";
     return pdo_query($sql);
}
function coupon_select_extra(){
    $sql = "SELECT coupon.coupon_name, coupon.coupon_id ,count(*) as count_extra FROM tbl_coupons coupon JOIN tbl_extra ex ON coupon.coupon_id = ex.coupon_id group by coupon.coupon_id having count_extra";
    return pdo_query($sql);
}
/**
 * truy van 1 ma
 */
function coupon_select_by_id($coupon_id){
    $sql = "SELECT * FROM tbl_coupons WHERE coupon_id = ?";
    return pdo_query_one($sql,$coupon_id);
}
