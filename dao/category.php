<?php
require_once "pdo.php";
/**
 * Them moi
 */
function category_insert($cate_name){
    $sql = "INSERT INTO tbl_categories(cate_name) VALUES (?)";
    pdo_execute($sql,$cate_name);
}

/**
 * Cap nhat 
 */
function category_update($cate_id,$cate_name){
    $sql = "UPDATE tbl_categories SET cate_name = ? WHERE cate_id = ?";
    pdo_execute($sql,$cate_name,$cate_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function category_delete($cate_id){
    $sql = "DELETE FROM tbl_categories WHERE cate_id = ?";
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
     $sql = "SELECT * FROM tbl_categories order by cate_id";
     return pdo_query($sql);
}
/**
 * truy van 1 ma
 */
function category_select_by_id($cate_id){
    $sql = "SELECT * FROM tbl_categories WHERE cate_id = ?";
    return pdo_query_one($sql,$cate_id);
}
/**
 * Kiem tra su ton tai theo id
 */
function category_exist($cate_id){
    $sql = "SELECT count(*) FROM tbl_categories WHERE cate_id = ?";
    return pdo_query_value($sql,$cate_id) > 0;
}
/**
 * kiem tra su ton tai theo ten 
 */
function category_exist_name($cate_name){
    $sql = "SELECT count(*) FROM tbl_categories WHERE cate_name = ?";
    return pdo_query_value($sql,$cate_name) > 0;
}
/** 
 * kiem tra su ton tai cua ten co id 
 */
function category_exist_name_id($cate_id, $cate_name){
    $sql = "SELECT count(*) FROM tbl_categories WHERE cate_id != ? AND cate_name = ?";
    return pdo_query_value($sql,$cate_id,$cate_name) > 0;
}
function category_exist_cate_name($cate_id,$cate_name){
    $sql = "SELECT count(*) FROM tbl_categorys WHERE  cate_id!=? and cate_name=?";
    return pdo_query_value($sql, $cate_id, $cate_name) > 0;
}
function category_select_page()
{
    if (!isset($_SESSION['page'])) {
        $_SESSION['page'] = 1;
    }
    $query = "SELECT * FROM tbl_categorys order by cate_id desc";
    $select_all = pdo_query($query);
    $_SESSION['cate'] = count($select_all);

    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }

    $limit = 4;
    $start = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_cate'] = ceil($_SESSION['cate'] / $limit);

    $sql = "SELECT * FROM tbl_categorys ORDER BY cate_id DESC LIMIT $start,$limit";

    return pdo_query($sql);
}