<?php
require_once "pdo.php";
/**
 * Them moi
 */
function slide_insert($slide_image)
{
    
    $slide_status = 0;
    $sql = "INSERT INTO `tbl_slider`( `slide_status`, `slide_image`) VALUES (b?,?)";
    pdo_execute($sql,$slide_status, $slide_image);
    
}

/**
 * Cap nhat 
 */
function slide_update($slide_id,$slide_image){
    $sql = "UPDATE tbl_slider SET slide_image = b? WHERE slide_id = ?";
    pdo_execute($sql,$slide_image,$slide_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function slide_delete($slide_id){
    $sql = "DELETE FROM tbl_slider WHERE slide_id = ?";
    if(is_array($slide_id)){
        foreach($slide_id as $id ){
            pdo_execute($sql, $id);
        }
    }else{
        pdo_execute($sql, $slide_id);
    }
}
/**
 * truy van tat ca 
 */
function slide_select_all(){
    $sql = "SELECT * FROM tbl_slider order by slide_id";
    return pdo_query($sql);
}
/**
 * Kiem tra su ton tai theo id
 */
function slide_exist($slide_id){
    $sql = "SELECT count(*) FROM tbl_slider WHERE slide_id = ?";
    return pdo_query_value($sql,$slide_id) > 0;
}

function slide_select_by_id($slide_id)
{
    $sql = "SELECT * FROM tbl_slider WHERE slide_id=?";
    return pdo_query_one($sql, $slide_id);
}