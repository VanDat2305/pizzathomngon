<?php
require_once "pdo.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
/**
 * Them moi mon an
 */
function product_insert($cate_id,$product_name,$desciption,$image,$created_at,$count_view){
    $sql = "INSERT INTO tbl_products(`category_id`,`product_name`,`description`,`product_image`,`created_at`,`count_view`) VALUES (?,?,?,?,?,?)";
    return pdo_execute_return_id($sql,$cate_id,$product_name,$desciption,$image,$created_at,$count_view);
}
/**
 * them moi option
 */
function option_insert($product_id,$option_name,$option_price){
    $sql = "INSERT INTO tbl_options(product_id,option_name,option_price) VALUES (?,?,?)";
    pdo_execute($sql,$product_id,$option_name,$option_price);
}
/**
 * Cap nhat mon an
 */
function product_update($product_id,$cate_id,$product_name,$desciption,$image,$created_at,$count_view){
    $sql = "UPDATE tbl_products SET category_id = ?, product_name = ?, `description` = ?, product_image = ?, created_at = ?, count_view = ? WHERE product_id = ?";
    pdo_execute($sql,$cate_id,$product_name,$desciption,$image,$created_at,$count_view,$product_id);
}
function option_update($option_id,$product_id,$option_name,$option_price){
    $sql = "UPDATE tbl_options SET option_name = ?, option_price =? WHERE option_id = ? AND product_id = ?";
    pdo_execute($sql,$option_name,$option_price,$option_id,$product_id);
}
/** 
 * Tang luot xem
 */
function product_update_view($product_id){
    $sql = "UPDATE tbl_products SET count_view = count_view + 1 WHERE product_id = ?";
    pdo_execute($sql,$product_id);
}
/**
 * Xoa 1 hoac nhieu mon an 
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
 * Xoa 1 hoac nhieu option 
 */
function option_delete($option_id){
    $sql = "DELETE FROM tbl_options WHERE option_id = ?";
    if(is_array($option_id)){
        foreach($option_id as $id ){
            pdo_execute($sql, $id);
        }
    }else{
        pdo_execute($sql, $option_id);
    }
}
/**
 * truy van tat ca mon an
 */
function product_select_all(){
     $sql = "SELECT * FROM tbl_products order by product_id";
     return pdo_query($sql);
}
/**
 * truy van 1 mon an bao gom cac option $row[0]
 *  de hien thi ten mon va foreach de hien thi option
 */
function product_select_by_id($product_id){
    $sql = "SELECT * FROM tbl_options opt JOIN tbl_products pro ON pro.product_id = opt.product_id WHERE pro.product_id = ?  ";
    return pdo_query($sql,$product_id);
}
/**
 * truy van tat ca option
 */
function option_select_by_pro_id($product_id){
    $sql = "SELECT * FROM tbl_options WHERE product_id = ?";
    return pdo_query($sql,$product_id);
}
/**
 * Kiem tra su ton tai mon an theo id
 */
function product_exist($product_id){
    $sql = "SELECT count(*) FROM tbl_products WHERE product_id = ?";
    return pdo_query_value($sql,$product_id) > 0;
}
/**
 * kiem tra su ton tai mon theo ten mon an
 */
function product_exist_name($product_name){
    $sql = "SELECT count(*) FROM tbl_products WHERE product_name = ?";
    return pdo_query_value($sql,$product_name) > 0;
}
/** 
 * kiem tra su ton tai cua ten mon an co id dung cho update
 */
function product_exist_name_id($product_id, $product_name){
    $sql = "SELECT count(*) FROM tbl_products WHERE product_id != ? AND product_name = ?";
    return pdo_query_value($sql,$product_id,$product_name) > 0;
}
/**
 * kiem tra su ton tai theo ten option
 */
function option_exist_name($option_name){
    $sql = "SELECT count(*) FROM tbl_options WHERE option_name = ?";
    return pdo_query_value($sql,$option_name) > 0;
}
/** 
 * kiem tra su ton tai cua ten option co id dung cho update
 */
function option_exist_name_id($option_id, $option_name){
    $sql = "SELECT count(*) FROM tbl_options WHERE option_id != ? AND option_name = ?";
    return pdo_query_value($sql,$option_id,$option_name) > 0;
}