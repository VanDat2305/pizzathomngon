<?php
require_once "pdo.php";
/**
 * Them moi
 */
function blog_insert($blog_title, $blog_content, $blog_image, $create_at, $status)
{
    $status = 0;
    $sql = "INSERT INTO tbl_blog( `blog_title`, `blog_content`, `blog_image`, `create_at`, `status`) VALUES (?,?,?,?,b?)";
    pdo_execute($sql, $blog_title, $blog_content, $blog_image, $create_at, $status);
}

/**
 * Cap nhat 
 */
function blog_update($blog_id, $blog_title, $blog_content, $blog_image)
{
    $sql = "UPDATE tbl_blog SET blog_title = ?, blog_content = ?, blog_image = ? WHERE blog_id = ?";
    pdo_execute($sql, $blog_title, $blog_content, $blog_image, $blog_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function blog_delete($blog_id)
{
    $sql = "DELETE FROM tbl_blog WHERE blog_id = ?";
    if (is_array($blog_id)) {
        foreach ($blog_id as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $blog_id);
    }
}
/**
 * truy van tat ca 
 */
function blog_select_all()
{
    $sql = "SELECT * FROM tbl_blog order by blog_id";
    return pdo_query($sql);
}
/**
 * Kiem tra su ton tai theo id
 */
function blog_exist($blog_id)
{
    $sql = "SELECT count(*) FROM tbl_blog WHERE blog_id = ?";
    return pdo_query_value($sql, $blog_id) > 0;
}

function blog_select_by_id($blog_id)
{
    $sql = "SELECT * FROM tbl_blog WHERE blog_id=?";
    return pdo_query_one($sql, $blog_id);
}
/*
*an va hien
*/
function blog_status_update($blog_id, $status)
{
    $sql = "UPDATE tbl_blog SET status=b? WHERE blog_id=?";
    pdo_execute($sql, $status, $blog_id);
}
