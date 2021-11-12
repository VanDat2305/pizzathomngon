<?php
require_once "pdo.php";
/**
 * Them moi mon an
 */
function product_insert($cate_id,$product_name,$desciption,$image,$created_at,$count_view){
    $sql = "INSERT INTO tbl_products(`category_id`,`product_name`,`description`,`product_image`,`created_at`,`count_view`) VALUES (?,?,?,?,?,?)";
    return pdo_execute_return_id($sql,$cate_id,$product_name,$desciption,$image,$created_at,$count_view);
}

/**
 * Cap nhat mon an
 */
function product_update($product_id,$cate_id,$product_name,$desciption,$image,$created_at,$count_view){
    $sql = "UPDATE tbl_products SET category_id = ?, product_name = ?, `description` = ?, product_image = ?, created_at = ?, count_view = ? WHERE product_id = ?";
    pdo_execute($sql,$cate_id,$product_name,$desciption,$image,$created_at,$count_view,$product_id);
}
/** 
 * Tang luot xem
 */
function product_update_view($product_id){
    $sql = "UPDATE tbl_products SET count_view = count_view + 1 WHERE product_id = ?";
    pdo_execute($sql,$product_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function product_delete($product_id){
    $sql = "DELETE FROM tbl_products WHERE product_id = ?";
    if(is_array($product_id)){
        foreach($product_id as $id ){
            pdo_execute($sql, $id);
        }
    }else{
        pdo_execute($sql, $product_id);
    }
}
/**
 * truy van tat ca 
 */
function product_select_all(){
     $sql = "SELECT * FROM tbl_products order by product_id";
     return pdo_query($sql);
}
/**
 * truy van 1 ma
 */
function product_select_by_id($product_id){
    $sql = "SELECT * FROM tbl_products WHERE product_id = ?";
    return pdo_query_one($sql,$product_id);
}
/**
 * Kiem tra su ton tai theo id
 */
function product_exist($product_id){
    $sql = "SELECT count(*) FROM tbl_products WHERE product_id = ?";
    return pdo_query_value($sql,$product_id) > 0;
}
/**
 * kiem tra su ton tai theo ten 
 */
function product_exist_name($product_name){
    $sql = "SELECT count(*) FROM tbl_products WHERE product_name = ?";
    return pdo_query_value($sql,$product_name) > 0;
}
/** 
 * kiem tra su ton tai cua ten co id 
 */
function product_exist_name_id($product_id, $product_name){
    $sql = "SELECT count(*) FROM tbl_products WHERE product_id != ? AND product_name = ?";
    return pdo_query_value($sql,$product_id,$product_name) > 0;
}