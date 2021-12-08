<?php
require '../../global.php';
require '../../dao/comment.php';

extract($_REQUEST);

if (isset($rating_value) && isset($rating_content)) {

    try {
        comment_insert($comment, $rate, $cmt_parent, $cmt_date, $user_id, $product_id);


        $MESSAGE = "Thanh toán thành công. Cảm ơn bạn đã đặt hàng";
    } catch (Exception $exc) {
        $MESSAGE = "Thanh toán thất bại!";

        // }
    }
}
