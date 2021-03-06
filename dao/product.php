<?php
require_once "pdo.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
/**
 * Them moi mon an
 */
function product_insert($cate_id, $product_name, $description, $image, $discount, $created_at, $count_view = 0)
{
    $sql = "INSERT INTO tbl_products(`category_id`,`product_name`,`description`,`product_image`,`discount`,`created_at`,`count_view`) VALUES (?,?,?,?,?,?,?)";
    return pdo_execute_return_id($sql, $cate_id, $product_name, $description, $image, $discount, $created_at, $count_view);
}
/**
 * them moi option
 */
function option_insert($product_id, $option_name, $option_price)
{
    $sql = "INSERT INTO tbl_options(product_id,option_name,option_price) VALUES (?,?,?)";
    pdo_execute($sql, $product_id, $option_name, $option_price);
}
/**
 * them moi image
 */
function gallery_insert($product_id, $gallery_name)
{
    $sql = "INSERT INTO tbl_gallery_image(gallery_image_name,product_id) VALUES (?,?)";
    pdo_execute($sql, $gallery_name, $product_id);
}
/**
 * Cap nhat mon an
 */
function product_update($product_id, $cate_id, $product_name, $desciption, $image, $discount, $created_at)
{
    $sql = "UPDATE tbl_products SET category_id = ?, product_name = ?, `description` = ?, product_image = ?, discount = ? , created_at = ? WHERE product_id = ?";
    pdo_execute($sql, $cate_id, $product_name, $desciption, $image, $discount, $created_at, $product_id);
}
/**
 * Cập nhat option
 */
function option_update($option_id, $product_id, $option_name, $option_price)
{
    $sql = "UPDATE tbl_options SET option_name = ?, option_price =? WHERE option_id = ? AND product_id = ?";
    pdo_execute($sql, $option_name, $option_price, $option_id, $product_id);
}

/** 
 * Tang luot xem
 */
function product_update_view($product_id)
{
    $sql = "UPDATE tbl_products SET count_view = count_view + 1 WHERE product_id = ?";
    pdo_execute($sql, $product_id);
}
/**
 * Xoa 1 hoac nhieu mon an 
 */
function product_delete($product_id)
{
    $sql = "DELETE FROM tbl_products WHERE product_id = ?";
    if (is_array($product_id)) {
        foreach ($product_id as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $product_id);
    }
}
/**
 * Xoa 1 hoac nhieu option 
 */
function option_delete($option_id)
{
    $sql = "DELETE FROM tbl_options WHERE option_id = ?";
    if (is_array($option_id)) {
        foreach ($option_id as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $option_id);
    }
}
/**
 * Xoa 1 hoac nhieu  image
 */
function gallery_delete($gallery_image_id)
{
    $sql = "DELETE FROM tbl_gallery_image WHERE gallery_image_id = ?";
    if (is_array($gallery_image_id)) {
        foreach ($gallery_image_id as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $gallery_image_id);
    }
}
/**
 * truy van tat ca mon an
 */
function product_select_all()
{
    $sql = "SELECT * FROM tbl_products pro JOIN tbl_categories cate ON pro.category_id = cate.category_id order by pro.product_id";
    return pdo_query($sql);
}

/**
 * truy van 10 mon an nhieu luot xem
 */
function product_select_top10()
{
    $sql = "SELECT * FROM tbl_products pro JOIN tbl_categories cate ON pro.category_id = cate.category_id order by pro.count_view DESC LIMIT 10";
    return pdo_query($sql);
}


/**
 * truy van tat ca mon an theo tung danh muc ra vỉew
 */
function product_category_select_all()
{
    $sql = "SELECT * FROM tbl_products pro JOIN tbl_categories cate ON pro.category_id = cate.category_id order by cate.category_id";
    return pdo_query($sql);
}
/**
 * truy van tat ca mon an giam gia theo tung danh muc ra vỉew
 */
function product_category_select_by_discount()
{
    $sql = "SELECT * FROM tbl_products pro JOIN tbl_categories cate ON pro.category_id = cate.category_id WHERE pro.discount>0 order by cate.category_id";
    return pdo_query($sql);
}
/**
 * truy van tat ca mon an theo  danh muc ra ct mon an
 */
function product__select_all_by_category($category_id, $product_id = 0)
{
    $sql = "SELECT * FROM tbl_products WHERE category_id = ?";
    if (isset($product_id) && $product_id > 0) {
        $sql .= " AND product_id != ?";
    }
    return pdo_query($sql, $category_id, $product_id);
}
/**
 * truy van 1 mon an bao gom cac option $row[0]
 *  de hien thi ten mon va foreach de hien thi option
 */
function product_select_by_id($product_id)
{
    $sql = "SELECT * FROM  tbl_products pro  JOIN tbl_categories cate ON pro.category_id = cate.category_id WHERE pro.product_id = ?  ";
    return pdo_query_one($sql, $product_id);
}
/**
 * truy van tat ca option
 */
function option_select_by_pro_id($product_id)
{
    $sql = "SELECT * FROM tbl_options WHERE product_id = ?";
    return pdo_query($sql, $product_id);
}
/**
 * truy van san pham theo option
 */
function product_select_by_option_id($option_id)
{
    $sql = "SELECT * FROM tbl_options op JOIN tbl_products p ON op.product_id = p.product_id WHERE option_id = ?";
    return pdo_query_one($sql, $option_id);
}

/**
 * truy van tat ca option
 */
function option_select_all()
{
    $sql = "SELECT * FROM tbl_options";
    return pdo_query($sql);
}
/**
 *================================================================ loc san pham =====================================================================
 */
function product_select_by_filter_price($from_price, $to_price)
{
    $sql = "SELECT * FROM tbl_options op JOIN tbl_products p ON op.product_id = p.product_id  WHERE op.option_price >= ? and op.option_price <= ? GROUP BY p.product_id";

    return pdo_query($sql, $from_price, $to_price);
}
function product_select_by_filter_date()
{
    $sql = "SELECT * FROM tbl_options op JOIN tbl_products p ON op.product_id = p.product_id GROUP BY p.product_id ORDER BY p.created_at DESC";

    return pdo_query($sql);
}
function product_select_by_order_price($orderby)
{
    $sql = "SELECT * FROM tbl_options op JOIN tbl_products p ON op.product_id = p.product_id GROUP BY p.product_id ORDER BY op.option_price $orderby";

    return pdo_query($sql);
}
function product_select_max_price()
{
    $sql = "SELECT MAX(option_price) FROM tbl_options";
    return pdo_query_value($sql);
}
function product_select_min_price()
{
    $sql = "SELECT MIN(option_price) FROM tbl_options";
    return pdo_query_value($sql);
}
/**
 * truy van gallery
 */
function gallery_select_by_pro_id($product_id)
{
    $sql = "SELECT * FROM tbl_gallery_image WHERE product_id = ?";
    return pdo_query($sql, $product_id);
}
/**
 * Kiem tra su ton tai mon an theo id
 */
function product_exist($product_id)
{
    $sql = "SELECT count(*) FROM tbl_products WHERE product_id = ?";
    return pdo_query_value($sql, $product_id) > 0;
}
/**
 * kiem tra su ton tai mon theo ten mon an
 */
function product_exist_name($product_name)
{
    $sql = "SELECT count(*) FROM tbl_products WHERE product_name = ?";
    return pdo_query_value($sql, $product_name) > 0;
}
/** 
 * kiem tra su ton tai cua ten mon an co id dung cho update
 */
function product_exist_name_id($product_id, $product_name)
{
    $sql = "SELECT count(*) FROM tbl_products WHERE product_id != ? AND product_name = ?";
    return pdo_query_value($sql, $product_id, $product_name) > 0;
}
/**
 * kiem tra su ton tai theo ten option
 */
function option_exist_name($option_name)
{
    $sql = "SELECT count(*) FROM tbl_options WHERE option_name = ?";
    return pdo_query_value($sql, $option_name) > 0;
}
/** 
 * kiem tra su ton tai cua ten option co id dung cho update
 */
function option_exist_name_id($option_id, $option_name)
{
    $sql = "SELECT count(*) FROM tbl_options WHERE option_id != ? AND option_name = ?";
    return pdo_query_value($sql, $option_id, $option_name) > 0;
}
