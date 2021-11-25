<?php

require_once "../../global.php";


if (exist_param("gioi-thieu")) {
    $_SESSION['name_page'] = 'gioi_thieu';
    $VIEW_NAME = "trang-chu/gioi-thieu.php";
    //
} else if (exist_param("san-pham")) {

    $_SESSION['name_page'] = 'san_pham';
    header("location: $SITE_URL/hang-hoa/liet-ke.php");
} else if (exist_param("bai-viet")) {

    $_SESSION['name_page'] = 'bai_viet';

    $VIEW_NAME = "trang-chu/bai-viet.php";
    //
} else if (exist_param("hoi-dap")) {
    $_SESSION['name_page'] = 'hoi_dap';
    $VIEW_NAME = "trang-chu/hoi-dap.php";
    //
} else {
    $_SESSION['name_page'] = 'trang_chu';
    $VIEW_NAME = "trang-chu/trang-chu.php";
}


require "../layout.php";
