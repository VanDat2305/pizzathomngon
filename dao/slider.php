<?php
require_once "pdo.php";
/**
 * Them moi
 */
function slide_insert($slide_name,$slide_status){
    $sql = "INSERT INTO tbl_slider(slide_name,slide_status) VALUES (?,b?)";
    pdo_execute($sql,$slide_name,$slide_status);
}

/**
 * Cap nhat 
 */
function slide_update($slide_id,$slide_status){
    $sql = "UPDATE tbl_slider SET slide_status = b? WHERE slide_id = ?";
    pdo_execute($sql,$slide_status,$slide_id);
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
