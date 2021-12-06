<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/extra_topping.php';
require '../../dao/user.php';
require '../../dao/invoice.php';
// $tong_tien = 0;
// foreach ($_SESSION['cart'] as $key => $value) {
//     $tong_tien +=  ($value['don_gia'] * $value['sl']) - ($value['don_gia'] * $value['sl'] * ($value['giam_gia'] / 100));
// }

extract($_REQUEST);
if (exist_param("btn_checkout")) {
    // $ngay_dat = date_format(date_create(), 'Y-m-d h:i:s');
    // try {
    //     $id_hoa_don =  hoa_don_insert($ho_ten, $dia_chi, $sdt, $email, $tong_tien, $phuong_thuc_tt, $ma_kh, $trang_thai, $ghi_chu, $ngay_dat);
    //     if (isset($id_hoa_don)) {
    //         foreach ($_SESSION['cart'] as $key => $value) {
    //             $thanh_tien = ($value['don_gia'] * $value['sl']) - ($value['don_gia'] * $value['sl'] * ($value['giam_gia'] / 100));
    //             ct_hoa_don_insert($key, $value['don_gia'], $value['sl'], $thanh_tien, $id_hoa_don);
    //         }
    //         unset($_SESSION['cart']);
    //         unset($_SESSION['total_cart']);
    //     }
    //     $MESSAGE = "Thanh toán thành công. Cảm ơn bạn đã đặt hàng";
    // } catch (Exception $exc) {
    //     $MESSAGE = "Thanh toán thất bại!";

    //     // }
    // }
    extract($_SESSION['user']);
    $VIEW_NAME = 'checkout_ui.php';

    echo "<pre>";
    var_dump($_SESSION['cart']);
    die;
}

require '../layout.php';


// echo "<script>alert('" . $MESSAGE . "'); location.href='" . SITE_URL . "cart/list_cart.php'</script>";
// header("location:" . SITE_URL . "cart/list_cart.php");
