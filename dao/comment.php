<?php
require_once "pdo.php";
/**
 * Them moi
 */
function comment_insert($comment, $rate, $cmt_parent, $cmt_date, $user_id, $product_id)
{
    $sql = "INSERT INTO tbl_comments(`comment`,`rate`,`cmt_parent`,`cmt_date`,`user_id`,`product_id`) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $comment, $rate, $cmt_parent, $cmt_date, $user_id, $product_id);
}

/**
 * Cap nhat 
 */
function comment_update($comment_id, $comment, $rate, $cmt_parent, $cmt_date, $user_id, $product_id)
{
    $sql = "UPDATE tbl_comments SET `comment` = ?,`rate` = ?,`cmt_parent` = ?,`cmt_date` = ?,`user_id` = ?,`product_id`= ? WHERE comment_id = ?";
    pdo_execute($sql, $comment, $rate, $cmt_parent, $cmt_date, $user_id, $product_id, $comment_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function comment_delete($comment_id)
{
    $sql = "DELETE FROM tbl_comments WHERE comment_id = ?";
    if (is_array($comment_id)) {
        foreach ($comment_id as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $comment_id);
    }
}
/**
 * truy van tat ca mon an có binh luân
 */
function comment_select_product()
{
    $sql = "SELECT pro.product_id, pro.product_name,AVG( cmt.rate) rate , COUNT(*) amount, MIN(cmt.cmt_date) date_old, MAX(cmt.cmt_date) date_new
     FROM tbl_comments cmt 
     JOIN tbl_products pro ON pro.product_id = cmt.product_id
     GROUP BY pro.product_id, pro.product_name
     HAVING amount > 0";

    return pdo_query($sql);
}
/**
 * truy van tat ca 
 */
function comment_select_all()
{
    $sql = "SELECT * FROM tbl_comments order by comment_id";
    return pdo_query($sql);
}

/**
 * truy van theo comment cha
 */
function comment_select_by_id_parent($product_id)
{
    $sql = "SELECT * FROM tbl_comments WHERE product_id = ?";
    return pdo_query($sql, $product_id);
}
/**
 * truy van theo hang hoa
 */
function comment_select_by_id_product($product_id)
{
    $sql = "SELECT * FROM tbl_comments cmt JOIN tbl_products pro ON cmt.product_id = pro.product_id JOIN tbl_users us ON us.user_id = cmt.user_id WHERE cmt.product_id = ?";
    return pdo_query($sql, $product_id);
}

/**
 * Kiem tra su ton tai theo id
 */
function comment_exist($comment_id)
{
    $sql = "SELECT count(*) FROM tbl_comments WHERE comment_id = ?";
    return pdo_query_value($sql, $comment_id) > 0;
}
/**
 * Kiem tra su ton tai theo parent id
 */
function comment_exist_parent($parent_id)
{
    $sql = "SELECT count(*) FROM tbl_comments WHERE parent_id = ?";
    return pdo_query_value($sql, $parent_id) > 0;
}
