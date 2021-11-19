<?php
require_once "pdo.php";
/**
 * Them moi topping
 */
function extra_insert($extra_name,$extra_price,$cate_id){
    $sql = "INSERT INTO tbl_extra(extra_name,extra_price,category_id) VALUES (?,?,?)";
    pdo_execute($sql,$extra_name,$extra_price,$cate_id);
}

/**
 * Cap nhat 
 */
function extra_update($extra_id,$extra_name,$extra_price){
    $sql = "UPDATE tbl_extra SET extra_name = ?, extra_price = ? WHERE extra_id = ?";
    pdo_execute($sql,$extra_name,$extra_price,$extra_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function extra_delete($extra_id){
    $sql = "DELETE FROM tbl_extra WHERE extra_id = ?";
    if(is_array($extra_id)){
        foreach($extra_id as $id ){
            pdo_execute($sql, $id);
        }
    }else{
        pdo_execute($sql, $extra_id);
    }
}
/**
 * truy van tat ca 
 */
function extra_select_all($cate_id){
     $sql = "SELECT * FROM tbl_extra ex JOIN tbl_categories cate ON ex.category_id = cate.category_id WHERE ex.category_id = ?";
     return pdo_query($sql,$cate_id);
}
/**
 * truy van 1 ma
 */
function extra_select_by_id($extra_id){
    $sql = "SELECT * FROM tbl_extra WHERE extra_id = ?";
    return pdo_query_one($sql,$extra_id);
}
/**
 * Kiem tra su ton tai theo id
 */
function extra_exist_cate_id($category_id){
    $sql = "SELECT count(*) FROM tbl_extra WHERE category_id = ?";
    return pdo_query_value($sql,$category_id) > 0;
}
/**
 * Kiem tra su ton tai theo id
 */
function extra_exist($extra_id){
    $sql = "SELECT count(*) FROM tbl_extra WHERE extra_id = ?";
    return pdo_query_value($sql,$extra_id) > 0;
}
/**
 * kiem tra su ton tai theo ten 
 */
function extra_exist_name($extra_name, $cate_id){
    $sql = "SELECT count(*) FROM tbl_extra WHERE extra_name = ? AND category_id = ?";
    return pdo_query_value($sql,$extra_name,$cate_id) > 0;
}
/** 
 * kiem tra su ton tai cua ten co id 
 */
function extra_exist_name_id($extra_id, $extra_name, $cate_id){
    $sql = "SELECT count(*) FROM tbl_extra WHERE extra_id != ? AND extra_name = ? AND category_id != ?";
    return pdo_query_value($sql,$extra_id,$extra_name, $cate_id) > 0;
}