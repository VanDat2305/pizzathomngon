<?php
require_once "pdo.php";
/**
 * Them moi
 */
function blog_insert($blog, $rate, $cmt_parent, $cmt_date, $user_id, $product_id)
{
    $sql = "INSERT INTO tbl_blogs(`blog`,`rate`,`cmt_parent`,`cmt_date`,`user_id`,`product_id`) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $blog, $rate, $cmt_parent, $cmt_date, $user_id, $product_id);
}

/**
 * Cap nhat 
 */
function blog_update($blog_id, $blog, $rate, $cmt_parent, $cmt_date, $user_id, $product_id)
{
    $sql = "UPDATE tbl_blogs SET `blog` = ?,`rate` = ?,`cmt_parent` = ?,`cmt_date` = ?,`user_id` = ?,`product_id`= ? WHERE blog_id = ?";
    pdo_execute($sql, $blog, $rate, $cmt_parent, $cmt_date, $user_id, $product_id, $blog_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function blog_delete($blog_id)
{
    $sql = "DELETE FROM tbl_blogs WHERE blog_id = ?";
    if (is_array($blog_id)) {
        foreach ($blog_id as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $blog_id);
    }
}
/**
 * truy van tat ca mon an có binh luân
 */
function blog_select_product()
{
    $sql = "SELECT pro.product_id, pro.product_name,AVG( cmt.rate) rate , COUNT(*) amount, MIN(cmt.cmt_date) date_old, MAX(cmt.cmt_date) date_new
     FROM tbl_blogs cmt 
     JOIN tbl_products pro ON pro.product_id = cmt.product_id
     GROUP BY pro.product_id, pro.product_name
     HAVING amount > 0";

    return pdo_query($sql);
}
/**
 * truy van tat ca 
 */
function blog_select_all()
{
    $sql = "SELECT * FROM tbl_blogs order by blog_id";
    return pdo_query($sql);
}

/**
 * truy van theo blog cha
 */
function blog_select_by_id_parent($product_id)
{
    $sql = "SELECT * FROM tbl_blogs WHERE product_id = ?";
    return pdo_query($sql, $product_id);
}
/**
 * truy van theo hang hoa
 */
function blog_select_by_id_product($product_id)
{
    $sql = "SELECT * FROM tbl_blogs cmt JOIN tbl_products pro ON cmt.product_id = pro.product_id JOIN tbl_users us ON us.user_id = cmt.user_id WHERE cmt.product_id = ?";
    return pdo_query($sql, $product_id);
}

/**
 * Kiem tra su ton tai theo id
 */
function blog_exist($blog_id)
{
    $sql = "SELECT count(*) FROM tbl_blogs WHERE blog_id = ?";
    return pdo_query_value($sql, $blog_id) > 0;
}
/**
 * Kiem tra su ton tai theo parent id
 */
function blog_exist_parent($parent_id)
{
    $sql = "SELECT count(*) FROM tbl_blogs WHERE parent_id = ?";
    return pdo_query_value($sql, $parent_id) > 0;
}
