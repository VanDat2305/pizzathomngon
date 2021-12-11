<?php
require '../../global.php';
require '../../dao/blog.php';
// require '../../dao/user.php';
//-------------------------------//
extract($_REQUEST);
if (exist_param("btn_info")) {
    $item = blog_select_by_id($blog_id);
    $VIEW_NAME = "../blog/blog_detail.php";
} else {
    $viewbl = blog_select_view();
    $blog = blog_select_satus();
    $VIEW_NAME = "../blog/blog.php";
}


require '../layout.php';
