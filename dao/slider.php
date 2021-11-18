<?php
require_once "pdo.php";
/**
 * Them moi
 */
function slide_insert($slider_name)
{
    
    $slider_status = 0;
    $sql = "INSERT INTO `tbl_slider`( `slider_status`, `slider_name`) VALUES (b?,?)";
    pdo_execute($sql,$slider_status, $slider_name);
    
}

/**
 * Cap nhat 
 */
function slide_update($slide_id,$slide_name){
    $sql = "UPDATE tbl_slider SET slide_name = b? WHERE slide_id = ?";
    pdo_execute($sql,$slide_name,$slide_id);
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

function slide_select_by_id($slider_id)
{
    $sql = "SELECT * FROM tbl_slider WHERE slider_id=?";
    return pdo_query_one($sql, $slider_id);
}
function slide_exist_name($slider_name)
{
    $sql = "SELECT count(*) FROM tbl_slider WHERE slider_id=?";
    return pdo_query_value($sql, $slider_name) > 0;
}
function slide_exist_slider_name($slider_id,$slider_name){
    $sql = "SELECT count(*) FROM tbl_slider WHERE  slider_id!=? and slider_name=?";
    return pdo_query_value($sql, $slider_id, $slider_name) > 0;
}


function slide_select_page()
{
    $sql = "SELECT * FROM tbl_slider where slider_status = 1";
  return pdo_query($sql);
}
function slider_status_update($slider_id, $slider_status)
{
    $sql = "UPDATE tbl_slider SET slider_status=b? WHERE slider_id=?";
    pdo_execute($sql, $slider_status, $slider_id);
}
