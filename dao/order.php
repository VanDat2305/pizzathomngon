<?php
require_once "pdo.php";
define("TAX", 0.07);
/**
 * Them moi tbl order
 */
function order_insert($user_id, $fullname, $phoneNumber, $note, $address, $coupon_discount, $status_id, $created_at)
{
    $sql = "INSERT INTO tbl_orders(`user_id`,`fullname`,`phoneNumber`,`note`,`address`,`coupon_discount`,`status_id`,`created_at`) VALUES (?,?,?,?,?,?,?,?)";
    return pdo_execute_return_id($sql, $user_id, $fullname, $phoneNumber, $note, $address, $coupon_discount, $status_id, $created_at);
}
/**
 * Them moi tbl order_detail
 */
function order_detail_insert($option_id, $quantity, $order_id)
{
    $sql = "INSERT INTO tbl_order_details(`option_id`,`quantity`,`order_id`) VALUES (?,?,?)";
    return pdo_execute_return_id($sql, $option_id, $quantity, $order_id);
}
/**
 * Them moi tbl extral_detail
 */
function extra_detail_insert($extra_id, $order_detail_id)
{
    $sql = "INSERT INTO tbl_extra_details(`extra_id`,`order_detail_id`) VALUES (?,?)";
    pdo_execute($sql, $extra_id, $order_detail_id);
}
/**
 * Cap nhat 
 */
function order_update($order_id, $order_name)
{
    $sql = "UPDATE tbl_orders SET order_name = ? WHERE order_id = ?";
    pdo_execute($sql, $order_name, $order_id);
}
/**
 * Cap nhat status
 */
function status_order_update($order_id, $status_id)
{
    $sql = "UPDATE tbl_orders SET status_id = ? WHERE order_id = ?";
    pdo_execute($sql, $status_id, $order_id);
}
/**
 * Xoa 1 hoac nhieu ma 
 */
function order_delete($order_id)
{
    $sql = "DELETE FROM tbl_orders WHERE order_id = ?";
    if (is_array($order_id)) {
        foreach ($order_id as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $order_id);
    }
}
/**
 * truy van tat ca 
 */
function order_select_all()
{
    $sql = "SELECT * FROM tbl_orders order by order_id";
    return pdo_query($sql);
}
/**
 * truy van list trạng thái
 */
function status_select_all()
{
    $sql = "SELECT * FROM tbl_status_order ";
    return pdo_query($sql);
}

/**
 * Kiem tra su ton tai theo id
 */
function order_exist($order_id)
{
    $sql = "SELECT count(*) FROM tbl_orders WHERE order_id = ?";
    return pdo_query_value($sql, $order_id) > 0;
}
/**
 * kiem tra su ton tai theo ten 
 */
function order_exist_name($order_name)
{
    $sql = "SELECT count(*) FROM tbl_orders WHERE order_name = ?";
    return pdo_query_value($sql, $order_name) > 0;
}
/** 
 * kiem tra su ton tai cua ten co id 
 */
function order_exist_name_id($order_id, $order_name)
{
    $sql = "SELECT count(*) FROM tbl_orders WHERE order_id != ? AND order_name = ?";
    return pdo_query_value($sql, $order_id, $order_name) > 0;
}

/**
 * truy van hoa đơn   GROUP BY op.option_id, total_option
 */
function order_select_by_id_status($status_id)
{
    $sql = "SELECT
                ord.order_id, ord.user_id,ord.fullname, ord.phoneNumber ,ord.note,ord.address, ord.coupon_discount,
                sta.status_id,sta.status_name,ord.created_at,
                SUM(distinct tbl_total.total)* " . TAX . " as tax,
                SUM(distinct tbl_total.total) as money_pro,
                SUM(distinct tbl_total.total)-ord.coupon_discount + SUM(distinct tbl_total.total)* " . TAX . " as total_money
            FROM(
                SELECT
                total_option.order_id,
                IFNULL((total_option.total_option + tbl_total_extra.total_extra),total_option.total_option) as total
                FROM(
                    SELECT 
                    op.option_id, or_de.order_detail_id, or_de.order_id,
                    (op.option_price * or_de.quantity)-((op.option_price * or_de.quantity)*(pro.discount/100)) as total_option 
                    FROM tbl_options op 
                    JOIN tbl_order_details or_de ON op.option_id = or_de.option_id 
                    JOIN tbl_products pro ON pro.product_id = op.product_id 
                   
                ) as total_option
                JOIN (
                    SELECT 
                    or_de.order_detail_id,
                    total_extra.total_extra
                    FROM tbl_order_details or_de 
                    LEFT JOIN (
                        SELECT 
                        ex_de.order_detail_id,
                        SUM(distinct ex.extra_price) as total_extra
                        FROM tbl_extra ex 
                        JOIN tbl_extra_details ex_de 
                        ON ex.extra_id = ex_de.extra_id
                        GROUP BY ex_de.order_detail_id
                    ) as total_extra
                    ON total_extra.order_detail_id = or_de.order_detail_id
                    ) as tbl_total_extra
                ON tbl_total_extra.order_detail_id = total_option.order_detail_id
                ) as tbl_total
            JOIN tbl_orders ord ON ord.order_id = tbl_total.order_id
            JOIN tbl_status_order sta ON sta.status_id = ord.status_id
            WHERE sta.status_id = ?
            GROUP BY ord.order_id
            ORDER BY ord.order_id DESC
    ";

    return pdo_query($sql, $status_id);
}
/** 
 * Truy van theo ngay
 */
function order_select_by_date($start_date, $end_date)
{
    $sql = "SELECT
                ord.order_id, ord.user_id,ord.fullname, ord.phoneNumber ,ord.note,ord.address, ord.coupon_discount,
                sta.status_id,sta.status_name,ord.created_at,
                SUM(distinct tbl_total.total)* " . TAX . " as tax,
                SUM(distinct tbl_total.total) as money_pro,
                SUM(distinct tbl_total.total)-ord.coupon_discount + SUM(distinct tbl_total.total)* " . TAX . " as total_money
            FROM(
                SELECT
                total_option.order_id,
                IFNULL((total_option.total_option + tbl_total_extra.total_extra),total_option.total_option) as total
                FROM(
                    SELECT 
                    op.option_id, or_de.order_detail_id, or_de.order_id,
                    (op.option_price * or_de.quantity)-((op.option_price * or_de.quantity)*(pro.discount/100)) as total_option 
                    FROM tbl_options op 
                    JOIN tbl_order_details or_de ON op.option_id = or_de.option_id 
                    JOIN tbl_products pro ON pro.product_id = op.product_id 

                ) as total_option
                JOIN (
                    SELECT 
                    or_de.order_detail_id,
                    total_extra.total_extra
                    FROM tbl_order_details or_de 
                    LEFT JOIN (
                        SELECT 
                        ex_de.order_detail_id,
                        SUM(distinct ex.extra_price) as total_extra
                        FROM tbl_extra ex 
                        JOIN tbl_extra_details ex_de 
                        ON ex.extra_id = ex_de.extra_id
                        GROUP BY ex_de.order_detail_id
                    ) as total_extra
                    ON total_extra.order_detail_id = or_de.order_detail_id
                    ) as tbl_total_extra
                ON tbl_total_extra.order_detail_id = total_option.order_detail_id
                ) as tbl_total
            JOIN tbl_orders ord ON ord.order_id = tbl_total.order_id
            JOIN tbl_status_order sta ON sta.status_id = ord.status_id
            WHERE ord.created_at >= ? AND ord.created_at <= ?
            GROUP BY ord.order_id,ord.fullname
            ORDER BY ord.order_id DESC
    ";

    return pdo_query($sql, $start_date, $end_date);
}
/**
 *  truy van tat ca
 */
function order_select_list()
{
    $sql = "SELECT
                ord.order_id, ord.user_id,ord.fullname, ord.phoneNumber ,ord.note,ord.address, ord.coupon_discount,
                sta.status_id,sta.status_name,ord.created_at,
                SUM(distinct tbl_total.total)* " . TAX . " as tax,
                SUM(distinct tbl_total.total) as money_pro,
                SUM(distinct tbl_total.total) - ord.coupon_discount + SUM(distinct tbl_total.total)* " . TAX . " as total_money
            FROM(
                SELECT
                total_option.order_id,
                IFNULL((total_option.total_option + tbl_total_extra.total_extra),total_option.total_option) as total
                FROM(
                    SELECT 
                    op.option_id, or_de.order_detail_id, or_de.order_id,
                    (op.option_price * or_de.quantity)-((op.option_price * or_de.quantity)*(pro.discount/100)) as total_option 
                    FROM tbl_options op 
                    JOIN tbl_order_details or_de ON op.option_id = or_de.option_id 
                    JOIN tbl_products pro ON pro.product_id = op.product_id 
                    
                ) as total_option
                JOIN (
                    SELECT 
                    or_de.order_detail_id,
                    total_extra.total_extra
                    FROM tbl_order_details or_de 
                    LEFT JOIN (
                        SELECT 
                        ex_de.order_detail_id,
                        SUM(distinct ex.extra_price) as total_extra
                        FROM tbl_extra ex 
                        JOIN tbl_extra_details ex_de 
                        ON ex.extra_id = ex_de.extra_id
                        GROUP BY ex_de.order_detail_id
                    ) as total_extra
                    ON total_extra.order_detail_id = or_de.order_detail_id
                    ) as tbl_total_extra
                ON tbl_total_extra.order_detail_id = total_option.order_detail_id
                ) as tbl_total
            JOIN tbl_orders ord ON ord.order_id = tbl_total.order_id
            JOIN tbl_status_order sta ON sta.status_id = ord.status_id
            GROUP BY ord.order_id
            ORDER BY ord.order_id DESC
    ";

    return pdo_query($sql);
}
function order_select_by_id($order_id)
{
    $sql = "SELECT
                ord.order_id, ord.user_id,ord.fullname, ord.phoneNumber ,ord.note,ord.address, ord.coupon_discount,
                sta.status_id,sta.status_name,ord.created_at,
                SUM(distinct tbl_total.total)* " . TAX . " as tax,
                SUM(distinct tbl_total.total) as money_pro,
                SUM(distinct tbl_total.total)-ord.coupon_discount + SUM(distinct tbl_total.total)* " . TAX . " as total_money
            FROM(
                SELECT
                total_option.order_id,
                IFNULL((total_option.total_option + tbl_total_extra.total_extra),total_option.total_option) as total
                FROM(
                    SELECT 
                    op.option_id, or_de.order_detail_id, or_de.order_id,
                    (op.option_price * or_de.quantity)-((op.option_price * or_de.quantity)*(pro.discount/100)) as total_option 
                    FROM tbl_options op 
                    JOIN tbl_order_details or_de ON op.option_id = or_de.option_id 
                    JOIN tbl_products pro ON pro.product_id = op.product_id 
                    
                    ) as total_option
                JOIN (
                    SELECT 
                    or_de.order_detail_id,
                    total_extra.total_extra
                    FROM tbl_order_details or_de 
                    LEFT JOIN (
                        SELECT 
                        ex_de.order_detail_id,
                        SUM(distinct ex.extra_price) as total_extra
                        FROM tbl_extra ex 
                        JOIN tbl_extra_details ex_de 
                        ON ex.extra_id = ex_de.extra_id
                        GROUP BY ex_de.order_detail_id
                    ) as total_extra
                    ON total_extra.order_detail_id = or_de.order_detail_id
                    ) as tbl_total_extra
                ON tbl_total_extra.order_detail_id = total_option.order_detail_id
                ) as tbl_total
            JOIN tbl_orders ord ON ord.order_id = tbl_total.order_id
            JOIN tbl_status_order sta ON sta.status_id = ord.status_id
             WHERE ord.order_id = ?
            GROUP BY ord.order_id,ord.fullname
   ";

    return pdo_query_one($sql, $order_id);
}
/**
 * TRUY VAN OPTION DETAIL 
 */
function option_detail_select_order($order_id)
{
    $sql = "SELECT
        total_option.product_name,total_option.option_name,total_option.option_price,
        total_option.order_id,total_option.quantity, total_option.order_detail_id,
        total_option.discount,IFNULL(tbl_total_extra.total_extra,0) as total_extra,
        IFNULL((total_option.total_option + tbl_total_extra.total_extra),total_option.total_option) as total_option
        FROM(
            SELECT 
            pro.product_name, op.option_name, op.option_price,
            op.option_id, or_de.order_detail_id, or_de.order_id, or_de.quantity,pro.discount,
            (op.option_price * or_de.quantity)-((op.option_price * or_de.quantity)*(pro.discount/100)) as total_option 
            FROM tbl_options op 
            JOIN tbl_order_details or_de ON op.option_id = or_de.option_id 
            JOIN tbl_products pro ON pro.product_id = op.product_id 
            GROUP BY op.option_id,pro.product_name, total_option
        ) as total_option
        JOIN (
            SELECT 
            or_de.order_detail_id,
            total_extra.total_extra
            FROM tbl_order_details or_de 
            LEFT JOIN (
                SELECT 
                ex_de.order_detail_id,
                SUM(distinct ex.extra_price) as total_extra
                FROM tbl_extra ex 
                JOIN tbl_extra_details ex_de 
                ON ex.extra_id = ex_de.extra_id
                GROUP BY ex_de.order_detail_id
                ) as total_extra
            ON total_extra.order_detail_id = or_de.order_detail_id
            ) as tbl_total_extra
        ON tbl_total_extra.order_detail_id = total_option.order_detail_id
        WHERE total_option.order_id = ?
    ";
    return pdo_query($sql, $order_id);
}
/**
 *  list topping by id
 */
function select_list_topping()
{
    $sql = "SELECT 
            ex.extra_name,ex_de.order_detail_id,ex.extra_price
            FROM tbl_extra_details ex_de 
            JOIN tbl_extra ex
            ON ex.extra_id = ex_de.extra_id
    
    ";
    return pdo_query($sql);
}
