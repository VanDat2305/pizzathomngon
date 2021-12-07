<?php

require '../../global.php';
require '../../dao/coupon.php';

extract($_REQUEST);



if (isset($coupon_value) && isset($checkout_total)) {

    $exist_code = coupon_exist_code($coupon_value);

    if ($exist_code == 1) {
        $coupon = coupon_select_by_code($coupon_value);

        if ($coupon['coupon_type'] == 0) {
            $coupon_price = $coupon['coupon_price'];
        } else {
            $coupon_price = $checkout_total * $coupon['coupon_price'] / 100;
        }
        echo number_format($coupon_price, 0, '', '');
        // echo "<pre>";
        // var_dump($coupon);
        // die;
    }
}
