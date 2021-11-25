<?php
require_once "pdo.php";
/**
 * Them moi
 */
function logo_insert($logo_image)
{
    
    $logo_status = 0;
    $sql = "INSERT INTO `tbl_logo`( `logo_status`, `logo_image`) VALUES (b?,?)";
    pdo_execute($sql,$logo_status, $logo_image);
    
}

/**
 * Cap nhat 
 */
function logo_update($logo_id,$status){
    $sql = "UPDATE tbl_logo SET logo_status = b? WHERE logo_id = ?";
    pdo_execute($sql,$status,$logo_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function logo_delete($logo_id){
    $sql = "DELETE FROM tbl_logo WHERE logo_id = ?";
    if(is_array($logo_id)){
        foreach($logo_id as $id ){
            pdo_execute($sql, $id);
        }
    }else{
        pdo_execute($sql, $logo_id);
    }
}
/**
 * truy van tat ca 
 */
function logo_select_all(){
    $sql = "SELECT * FROM tbl_logo order by logo_id";
    return pdo_query($sql);
}
/**
 * Kiem tra su ton tai theo id
 */
function logo_exist($logo_id){
    $sql = "SELECT count(*) FROM tbl_logo WHERE logo_id = ?";
    return pdo_query_value($sql,$logo_id) > 0;
}

function logo_select_by_id($logo_id)
{
    $sql = "SELECT * FROM tbl_logo WHERE logo_id=?";
    return pdo_query_one($sql, $logo_id);
}