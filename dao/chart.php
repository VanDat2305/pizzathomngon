<?php
require_once "pdo.php";

/**
 * thông kê top 10 mon bán chạy nhất
 */
function chart_top_10_pro()
{
    $sql = "SELECT pro.product_name, SUM(or_de.quantity) as sum_quantity 
    FROM `tbl_order_details` or_de 
    JOIN tbl_options op ON op.option_id = or_de.option_id 
    JOIN tbl_products pro ON pro.product_id = op.product_id
    GROUP BY pro.product_id 
    ORDER BY sum_quantity DESC
    LIMIT 0,10

    
    ";
    return pdo_query($sql);
}

/**
 * thong kê doanh thu
 */
function chart_money_statistic($getAll = true , $day )
{

    $sql = "SELECT
    AAA.date_field,
    IFNULL(BBB.total_money_chart,0) total_money
FROM
(
    SELECT date_field
    FROM
    (
        SELECT MAKEDATE(YEAR(NOW()),1) +
        INTERVAL (MONTH(NOW())-1 - $day) MONTH +
        INTERVAL daynum DAY date_field
        FROM
        (
            SELECT t*10+u daynum FROM
            (SELECT 0 t UNION SELECT 1 UNION SELECT 2 UNION SELECT 3) A,
            (SELECT 0 u UNION SELECT 1 UNION SELECT 2 UNION SELECT 3
            UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7
            UNION SELECT 8 UNION SELECT 9) B ORDER BY daynum
        ) AA
    ) AA WHERE MONTH(date_field) = MONTH(NOW())-$day
) AAA LEFT JOIN (
    SELECT
    chart_money.date_field ,
    SUM(
        DISTINCT chart_money.total_money
    ) AS total_money_chart
    FROM
    (
    SELECT
         CAST(ORD.created_at AS DATE)  AS date_field,
        SUM(DISTINCT tbl_total.total) - ORD.coupon_discount + SUM(DISTINCT tbl_total.total) * ". TAX ." AS total_money
    FROM
        (
        SELECT
            total_option.order_id,
            IFNULL(
                (
                    total_option.total_option + tbl_total_extra.total_extra
                ),
                total_option.total_option
            ) AS total
        FROM
            (
            SELECT
                op.option_id,
                or_de.order_detail_id,
                or_de.order_id,
                (
                    op.option_price * or_de.quantity
                ) -(
                    (
                        op.option_price * or_de.quantity
                    ) *(pro.discount / 100)
                ) AS total_option
            FROM
                tbl_options op
            JOIN tbl_order_details or_de ON
                op.option_id = or_de.option_id
            JOIN tbl_products pro ON
                pro.product_id = op.product_id
        ) AS total_option
    JOIN(
        SELECT
            or_de.order_detail_id,
            total_extra.total_extra
        FROM
            tbl_order_details or_de
        LEFT JOIN(
            SELECT
                ex_de.order_detail_id,
                SUM(DISTINCT ex.extra_price) AS total_extra
            FROM
                tbl_extra ex
            JOIN tbl_extra_details ex_de ON
                ex.extra_id = ex_de.extra_id
            GROUP BY
                ex_de.order_detail_id
        ) AS total_extra
    ON
        total_extra.order_detail_id = or_de.order_detail_id
    ) AS tbl_total_extra
    ON
    tbl_total_extra.order_detail_id = total_option.order_detail_id
    ) AS tbl_total
    JOIN tbl_orders ORD ON
    ORD.order_id = tbl_total.order_id
    JOIN tbl_status_order sta ON
    sta.status_id = ORD.status_id
    GROUP BY  ORD.order_id
    ORDER BY   ORD.order_id ASC
    ) AS chart_money
    GROUP BY
    CAST(chart_money.date_field AS DATE) 
) BBB
USING (date_field)

WHERE  CAST(AAA.date_field AS DATE) <= CAST(CURRENT_TIMESTAMP AS DATE)
ORDER BY AAA.date_field ASC" ;
if ($getAll == true) {
    $sql .= " LIMIT 0,7";
}
    return pdo_query($sql);
}
/**
 * Thông ke trang thai don hang
 */
function chart_status_order()
{
    $sql = "SELECT st_or.status_name, IFNULL(COUNT(ord.status_id),0) as count_status 
    FROM `tbl_status_order` st_or 
    LEFT JOIN tbl_orders ord ON ord.status_id = st_or.status_id 
    GROUP BY st_or.status_id";
    return pdo_query($sql);
}
