<?php
require_once "pdo.php";
/**
 * Them moi
 */
function user_insert($username,$user_image,$password,$fullname,$phoneNumber,$email,$address,$birthdate,$created_at,$update_at,$role_id){
    $sql = "INSERT INTO `tbl_users`(`username`,`user_image`,`password`,`fullname`,`phoneNumber`,`email`,`address`,`birthdate`,`created_at`,`update_at`,`role_id`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$username,$user_image,$password,$fullname,$phoneNumber,$email,$address,$birthdate,$created_at,$update_at,$role_id);
}

/**
 * Cap nhat 
 */
function user_update($user_id,$username,$user_image,$password,$fullname,$phoneNumber,$email,$address,$birthdate,$created_at,$update_at,$role_id){
    $sql = "UPDATE tbl_users SET `username` = ?,`user_image` = ?,`password` = ?,`fullname` = ?,`phoneNumber` = ?,`email` = ?,`address` = ?,`birthdate` = ?,`created_at` = ?,`update_at` = ?,`role_id = ?` WHERE `user_id` = ?";
    pdo_execute($sql,$username,$user_image,$password,$fullname,$phoneNumber,$email,$address,$birthdate,$created_at,$update_at,$role_id,$user_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function user_delete($user_id){
    $sql = "DELETE FROM tbl_users WHERE `user_id` = ?";
    if(is_array($user_id)){
        foreach($user_id as $id ){
            pdo_execute($sql, $id);
        }
    }else{
        pdo_execute($sql, $user_id);
    }
}
/**
 * truy van tat ca 
 */
function user_select_all(){
     $sql = "SELECT * FROM tbl_users us JOIN tbl_role ro ON us.role_id = ro.role_id order by `user_id` ";
     return pdo_query($sql);
}
/**
 * truy van 1 ma
 */
function user_select_by_id($user_id){
    $sql = "SELECT * FROM tbl_users us JOIN tbl_role ro ON us.role_id = ro.role_id WHERE `user_id` = ?";
    return pdo_query_one($sql,$user_id);
}

/**
 * Kiem tra su ton tai theo id
 */
function user_exist($user_id){
    $sql = "SELECT count(*) FROM tbl_users WHERE `user_id` = ?";
    return pdo_query_value($sql,$user_id) > 0;
}
/**
 * kiem tra su ton tai theo ten 
 */
function user_exist_name($username){
    $sql = "SELECT count(*) FROM tbl_users WHERE `username` = ?";
    return pdo_query_value($sql,$username) > 0;
}
/** 
 * kiem tra su ton tai cua ten co id dung cho update
 */
function user_exist_name_id($user_id, $username){
    $sql = "SELECT count(*) FROM tbl_users WHERE `user_id` != ? AND `username` = ?";
    return pdo_query_value($sql,$user_id,$username) > 0;
}