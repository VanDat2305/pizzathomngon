<?php
require_once "pdo.php";
/**
 * Them moi
 */
function user_insert($username, $user_image, $password, $fullname, $phoneNumber, $email, $address, $birthdate, $created_at, $update_at, $role_id)
{
    $sql = "INSERT INTO `tbl_users`(`username`,`user_image`,`password`,`fullname`,`phoneNumber`,`email`,`address`,`birthdate`,`created_at`,`update_at`,`role_id`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $username, $user_image, $password, $fullname, $phoneNumber, $email, $address, $birthdate, $created_at, $update_at, $role_id);
}
/**
 * Them moi
 */
function user_insert_view($username, $password, $fullname, $email, $created_at, $role_id = 3)
{
    $sql = "INSERT INTO `tbl_users`(`username`,`password`,`fullname`,`email`,`created_at`,`role_id`) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $username, $password, $fullname, $email, $created_at, $role_id);
}

/**
 * Cap nhat 
 */
function user_update($user_id, $username, $user_image, $password, $fullname, $phoneNumber, $email, $address, $birthdate,  $role_id)
{
    $sql = "UPDATE tbl_users SET `username` = ?,`user_image` = ?,`password` = ?,`fullname` = ?,`phoneNumber` = ?,`email` = ?,`address` = ?,`birthdate` = ?,`role_id` = ? WHERE `user_id` = ?";
    pdo_execute($sql, $username, $user_image, $password, $fullname, $phoneNumber, $email, $address, $birthdate,  $role_id, $user_id);
}
/**
 * Cap nhat ben client
 */
function user_update_client($user_id, $username, $user_image, $fullname, $phoneNumber, $email, $address, $birthdate)
{
    $sql = "UPDATE tbl_users SET `username` = ?,`user_image` = ?,`fullname` = ?,`phoneNumber` = ?,`email` = ?,`address` = ?,`birthdate` = ? WHERE `user_id` = ?";

    pdo_execute($sql, $username, $user_image, $fullname, $phoneNumber, $email, $address, $birthdate, $user_id);
}
function user_update_password($user_id, $password)
{
    $sql = "UPDATE tbl_users SET `password` = ? WHERE `user_id` = ?";

    pdo_execute($sql, $password, $user_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function user_delete($user_id)
{
    $sql = "DELETE FROM tbl_users WHERE `user_id` = ?";
    if (is_array($user_id)) {
        foreach ($user_id as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $user_id);
    }
}
/**
 * truy van tat ca 
 */
function user_select_all()
{
    $sql = "SELECT * FROM tbl_users us JOIN tbl_role ro ON us.role_id = ro.role_id order by `user_id` ";
    return pdo_query($sql);
}
/**
 * truy van 1 ma
 */
function user_select_by_id($user_id)
{
    $sql = "SELECT * FROM tbl_users us JOIN tbl_role ro ON us.role_id = ro.role_id WHERE `user_id` = ?";
    return pdo_query_one($sql, $user_id);
}

/**
 * truy van khach hàng theo username
 */
function user_select_by_username($username)
{
    $sql = "SELECT * FROM tbl_users us JOIN tbl_role ro ON us.role_id = ro.role_id WHERE `username` = ?";
    return pdo_query_one($sql, $username);
}


/**
 * Kiem tra su ton tai theo id
 */
function user_exist($user_id)
{
    $sql = "SELECT count(*) FROM tbl_users WHERE `user_id` = ?";
    return pdo_query_value($sql, $user_id) > 0;
}
/**
 * kiem tra su ton tai theo ten 
 */
function user_exist_name($username)
{
    $sql = "SELECT count(*) FROM tbl_users WHERE `username` = ?";
    return pdo_query_value($sql, $username) > 0;
}
/**
 * kiem tra su ton tai theo email
 */
function user_exist_email($email)
{
    $sql = "SELECT count(*) FROM tbl_users WHERE `email` = ?";
    return pdo_query_value($sql, $email) > 0;
}
/** 
 * kiem tra su ton tai email co id dung cho update
 */
function user_exist_email_id($user_id, $email)
{
    $sql = "SELECT count(*) FROM tbl_users WHERE `user_id` != ? AND `email` = ?";
    return pdo_query_value($sql, $user_id, $email) > 0;
}
/**
 * truy van quyen 
 */
function role_select_all()
{
    $sql = "SELECT * FROM tbl_role order by role_id desc";
    return pdo_query($sql);
}
