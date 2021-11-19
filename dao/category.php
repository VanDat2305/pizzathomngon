<?php
require_once "pdo.php";
/**
 * Them moi
 */
function category_insert($category_name){
    $sql = "INSERT INTO tbl_categories(category_name) VALUES (?)";
    pdo_execute($sql,$category_name);
}

/**
 * Cap nhat 
 */
function category_update($cate_id,$cate_name){
    $sql = "UPDATE tbl_categories SET category_name = ? WHERE category_id = ?";
    pdo_execute($sql,$cate_name,$cate_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function category_delete($cate_id){
    $sql = "DELETE FROM tbl_categories WHERE category_id = ?";
    if(is_array($cate_id)){
        foreach($cate_id as $id ){
            pdo_execute($sql, $id);
        }
    }else{
        pdo_execute($sql, $cate_id);
    }
}
/**
 * truy van tat ca 
 */
function category_select_all(){
     $sql = "SELECT * FROM tbl_categories order by category_id";
     return pdo_query($sql);
}
function category_select_extra(){
    $sql = "SELECT cate.category_name, cate.category_id ,count(*) as count_extra FROM tbl_categories cate JOIN tbl_extra ex ON cate.category_id = ex.category_id group by cate.category_id having count_extra";
    return pdo_query($sql);
}
/**
 * truy van 1 ma
 */
function category_select_by_id($cate_id){
    $sql = "SELECT * FROM tbl_categories WHERE category_id = ?";
    return pdo_query_one($sql,$cate_id);
}
/**
 * Kiem tra su ton tai theo id
 */
function category_exist($cate_id){
    $sql = "SELECT count(*) FROM tbl_categories WHERE category_id = ?";
    return pdo_query_value($sql,$cate_id) > 0;
}
/**
 * kiem tra su ton tai theo ten 
 */
function category_exist_name($cate_name){
    $sql = "SELECT count(*) FROM tbl_categories WHERE category_name = ?";
    return pdo_query_value($sql,$cate_name) > 0;
}
/** 
 * kiem tra su ton tai cua ten co id 
 */
function category_exist_name_id($cate_id, $cate_name){
    $sql = "SELECT count(*) FROM tbl_categories WHERE category_id != ? AND category_name = ?";
    return pdo_query_value($sql,$cate_id,$cate_name) > 0;
}