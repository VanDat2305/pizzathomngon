<?php
require_once "pdo.php";
/**
 * Them moi
 */
function order_insert($order_name)
{
    $sql = "INSERT INTO tbl_orders(order_name) VALUES (?)";
    pdo_execute($sql, $order_name);
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
 * truy van 1 ma
 */


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
 * truy van hoa đơn
 */
function order_select_list()
{
    $sql = "SELECT
    ord.order_id, ord.user_id,ord.fullname, ord.phoneNumber ,ord.note,ord.address,sta.status_name,ord.created_at,
    (tbl_money_extra.total_extra + tbl_money_option.total_option) as total_money
    FROM tbl_orders ord
    JOIN(
        SELECT
        ord.order_id,
        SUM(distinct sum_total_extra) total_extra
        FROM tbl_orders ord
        JOIN(
            SELECT 
            ex_de.order_detail_id,or_de.order_id,
            SUM(distinct total_extra) as sum_total_extra
            FROM tbl_order_details or_de
            JOIN(
                SELECT 
                ex_de.order_detail_id,
                (ex.extra_price*ex_de.quantity) as total_extra
                FROM tbl_extra ex 
                JOIN tbl_extra_details ex_de 
                ON ex.extra_id = ex_de.extra_id
                GROUP BY ex_de.extra_detail_id
                )as ex_de
            ON ex_de.order_detail_id = or_de.order_detail_id
            GROUP BY or_de.order_detail_id
            ) as or_de_ex 
        ON ord.order_id = or_de_ex.order_id
        GROUP BY ord.order_id
    ) as tbl_money_extra
    ON ord.order_id = tbl_money_extra.order_id
    JOIN(
        SELECT or_de.order_id,
        SUM(distinct sum_total_option) as total_option
        FROM 
        tbl_order_details or_de
        JOIN
            (
            SELECT 
            or_de.order_detail_id,or_de.order_id,
            SUM(distinct op_de.total_option) as sum_total_option
            FROM tbl_order_details or_de 
            JOIN(
                SELECT
                op.option_id, op_de.order_detail_id,
                (op.option_price * op_de.quantity)-((op.option_price * op_de.quantity)*(pro.discount/100)) as total_option
                FROM tbl_options op JOIN tbl_option_details op_de ON op.option_id = op_de.option_id
                JOIN tbl_products pro ON pro.product_id = op.product_id
                GROUP BY op.option_id, total_option
                ) as op_de
            ON or_de.order_detail_id = op_de.order_detail_id
            GROUP BY or_de.order_detail_id
            ) as or_de_op
        ON or_de.order_id = or_de_op.order_id
        GROUP BY or_de_op.order_id
    ) as tbl_money_option
    ON ord.order_id = tbl_money_option.order_id
    JOIN tbl_status_order sta ON sta.status_id = ord.status_id
    GROUP BY ord.order_id";

    return pdo_query($sql);
}
function order_select_by_id($order_id)
{
    $sql = "SELECT
    ord.order_id, ord.user_id,ord.fullname, ord.phoneNumber ,ord.note,ord.address,sta.status_name,ord.created_at,
    (tbl_money_extra.total_extra + tbl_money_option.total_option) as total_money
    FROM tbl_orders ord
    JOIN(
        SELECT
        ord.order_id,
        SUM(distinct sum_total_extra) total_extra
        FROM tbl_orders ord
        JOIN(
            SELECT 
            ex_de.order_detail_id,or_de.order_id,
            SUM(distinct total_extra) as sum_total_extra
            FROM tbl_order_details or_de
            JOIN(
                SELECT 
                ex_de.order_detail_id,
                (ex.extra_price*ex_de.quantity) as total_extra
                FROM tbl_extra ex 
                JOIN tbl_extra_details ex_de 
                ON ex.extra_id = ex_de.extra_id
                GROUP BY ex_de.extra_detail_id
                )as ex_de
            ON ex_de.order_detail_id = or_de.order_detail_id
            GROUP BY or_de.order_detail_id
            ) as or_de_ex 
        ON ord.order_id = or_de_ex.order_id
        GROUP BY ord.order_id
    ) as tbl_money_extra
    ON ord.order_id = tbl_money_extra.order_id
    JOIN(
        SELECT or_de.order_id,
        SUM(distinct sum_total_option) as total_option
        FROM 
        tbl_order_details or_de
        JOIN
            (
            SELECT 
            or_de.order_detail_id,or_de.order_id,
            SUM(distinct op_de.total_option) as sum_total_option
            FROM tbl_order_details or_de 
            JOIN(
                SELECT
                op.option_id, op_de.order_detail_id,
                (op.option_price * op_de.quantity)-((op.option_price * op_de.quantity)*(pro.discount/100)) as total_option
                FROM tbl_options op JOIN tbl_option_details op_de ON op.option_id = op_de.option_id
                JOIN tbl_products pro ON pro.product_id = op.product_id
                GROUP BY op.option_id, total_option
                ) as op_de
            ON or_de.order_detail_id = op_de.order_detail_id
            GROUP BY or_de.order_detail_id
            ) as or_de_op
        ON or_de.order_id = or_de_op.order_id
        GROUP BY or_de_op.order_id
    ) as tbl_money_option
    ON ord.order_id = tbl_money_option.order_id
    JOIN tbl_status_order sta ON sta.status_id = ord.status_id
    WHERE ord.order_id = ?
    GROUP BY ord.order_id ";

    return pdo_query_one($sql, $order_id);
}
/**
 * TRUY VAN OPTION DETAIL 
 * 
 */
function option_detail_select_order($order_id)
{
    $sql = "SELECT
            *
            FROM 
                (SELECT 
                pro.product_id,pro.product_name,
                op.option_price,op.option_id,op.option_name,
                op_de.order_detail_id, op_de.quantity,
                (op.option_price * op_de.quantity)-((op.option_price * op_de.quantity)*(pro.discount/100)) as total_option
                FROM tbl_options op JOIN tbl_option_details op_de ON op.option_id = op_de.option_id
                JOIN tbl_products pro ON pro.product_id = op.product_id
                GROUP BY op.option_id, total_option
                ) as order_de
            JOIN tbl_order_details or_de ON or_de.order_detail_id = order_de.order_detail_id

            WHERE or_de.order_id = ?
    ";
    return pdo_query($sql,$order_id);
}
