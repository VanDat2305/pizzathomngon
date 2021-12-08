<?php

require '../../global.php';
require '../../dao/coupon.php';

extract($_REQUEST);



if (isset($coupon_value)) {

    $exist_code = coupon_exist_code($coupon_value);

    $RESPONSE['status'] = 1;
    if ($exist_code == 1) {
        $coupon = coupon_select_by_code($coupon_value);
        $now = date_format(date_create(), 'Y-m-d h:i:s');

        if ($now > $coupon['end_date']) {
            $RESPONSE['message'] = "Mã giảm giá đã quá hạn";
        } elseif ($coupon['coupon_status'] == 0) {
            $RESPONSE['message'] = "Mã giảm giá đã dừng chạy";
        } elseif ($coupon['coupon_used'] == $coupon['coupon_count']) {
            $RESPONSE['message'] = "Mã giảm giá đã quá lượt áp dụng";
        } else {
            $RESPONSE['message'] = "Áp dụng thành công";
            $RESPONSE['status'] = 0;
        }
    } else {
        $RESPONSE['message'] = "Mã giảm giá không tồn tại";
    }

    foreach ($RESPONSE as $value) {
        echo $value;
    }

    // echo "<pre>";
    // var_dump($coupon);
    // die;



}
