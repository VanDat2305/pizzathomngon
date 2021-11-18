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
function category_update($category_id,$category_name){
    $sql = "UPDATE tbl_categories SET category_name = ? WHERE category_id = ?";
    pdo_execute($sql,$category_name,$category_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function category_delete($category_id){
    $sql = "DELETE FROM tbl_categories WHERE category_id = ?";
    if(is_array($category_id)){
        foreach($category_id as $id ){
            pdo_execute($sql, $id);
        }
    }else{
        pdo_execute($sql, $category_id);
    }
}
/**
 * truy van tat ca 
 */
function category_select_all(){
     $sql = "SELECT * FROM tbl_categories order by category_id";
     return pdo_query($sql);
}
/**
 * truy van 1 ma
 */
function category_select_by_id($category_id){
    $sql = "SELECT * FROM tbl_categories WHERE category_id = ?";
    return pdo_query_one($sql,$category_id);
}

/**
 * Kiem tra su ton tai theo id
 */
function category_exist($category_id){
    $sql = "SELECT count(*) FROM tbl_categories WHERE category_id = ?";
    return pdo_query_value($sql,$category_id) > 0;
}
/**
 * kiem tra su ton tai theo ten 
 */
function category_exist_name($category_name){
    $sql = "SELECT count(*) FROM tbl_categories WHERE category_name = ?";
    return pdo_query_value($sql,$category_name) > 0;
}
/** 
 * kiem tra su ton tai cua ten co id 
 */
function category_exist_name_id($category_id, $category_name){
    $sql = "SELECT count(*) FROM tbl_categories WHERE category_id != ? AND category_name = ?";
    return pdo_query_value($sql,$category_id,$category_name) > 0;
}
