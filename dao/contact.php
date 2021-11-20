<?php
require_once "pdo.php";
/**
 * Them moi
 */
function contact_insert($contact_name, $contact_email, $contact_phone, $contact_address)
{  
    $contact_status = 0;
    $sql = "INSERT INTO tbl_contact( `contact_name`, `contact_email`, `contact_phone`, `contact_address`, `contact_status`) VALUES (?,?,?,?,b?)";
    pdo_execute($sql, $contact_name, $contact_email, $contact_phone, $contact_address, $contact_status);
}

/**
 * Cap nhat 
 */
function contact_update($contact_id, $contact_name, $contact_email, $contact_phone, $contact_address){
    $sql = "UPDATE tbl_contact SET contact_name = ?, contact_email = ?, contact_phone = ?, contact_address = ? WHERE contact_id = ?";
    pdo_execute($sql,$contact_name, $contact_email, $contact_phone, $contact_address, $contact_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function contact_delete($contact_id){
    $sql = "DELETE FROM tbl_contact WHERE contact_id = ?";
    if(is_array($contact_id)){
        foreach($contact_id as $id ){
            pdo_execute($sql, $id);
        }
    }else{
        pdo_execute($sql, $contact_id);
    }
}
/**
 * truy van tat ca 
 */
function contact_select_all(){
    $sql = "SELECT * FROM tbl_contact order by contact_id";
    return pdo_query($sql);
}
/**
 * Kiem tra su ton tai theo id
 */
function contact_exist($contact_id){
    $sql = "SELECT count(*) FROM tbl_contact WHERE contact_id = ?";
    return pdo_query_value($sql,$contact_id) > 0;
}

function contact_select_by_id($contact_id)
{
    $sql = "SELECT * FROM tbl_contact WHERE contact_id=?";
    return pdo_query_one($sql, $contact_id);
}
/*
*an va hien
*/
function contact_status_update($contact_id, $contact_status)
{
    $sql = "UPDATE tbl_contact SET contact_status=b? WHERE contact_id=?";
    pdo_execute($sql, $contact_status, $contact_id);
}