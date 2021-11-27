<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/* 
 định nghĩa các url
*/
define('BASE_URL', '/pizzathomngon/');
define('ADMIN_URL', BASE_URL . 'admin/');
define('SITE_URL', BASE_URL . 'site/');
define('CONTENT_URL', BASE_URL . 'content/');
define('IMG_PRODUCT_URL', CONTENT_URL . 'images/products/');
define('IMG_USER_URL', CONTENT_URL . 'images/users/');
/* 
    dinh nghia duong dan chua anh trong upload
*/

$IMAGE_DIR = $_SERVER['DOCUMENT_ROOT'] . BASE_URL . "content/img";
// var_dump($IMAGE_DIR);die;
// define('DEFAULT_IMAGE',CONTENT_URL."images/default_image.jpg");

/* 
2 bien toan cuc de chia se giua  controller va view
*/
$VIEW_NAME = "index.php";
$MESSAGE = "";
$title_site = "";

/* 
kiem tra su ton tai cua mot tham so trong request
*/
function exist_param($file_name) //field_name ko phai file_name
{
    return array_key_exists($file_name, $_REQUEST); //ham kiem tra $file_name co trong mang request k
}
//Luu file uploads vao thu muc

function save_file($fieldname, $target_dir)
{
    $file_upload = $_FILES[$fieldname];
    $file_name = basename($file_upload['name']);
    $targer_path = $target_dir . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $targer_path);
    return $file_name;
}
// Lưu nhiều file upload
function multiple_save_image($fieldname, $target_dir)
{
    $file_upload = $_FILES[$fieldname];
    $count = count($file_upload['name']);
    for ($i = 0; $i < $count; $i++) {
        $file_name = basename($file_upload['name'][$i]);
        $targer_path = $target_dir . $file_name;
        move_uploaded_file($file_upload['tmp_name'][$i], $targer_path);
    }
    //Chưa basename
    return $file_upload['name'];
}

// Tao cookie

function add_cookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 * $day), "/");
}
//Xoa cookie
function delete_cookie($name)
{
    add_cookie($name, "", -1);
}
//lay gia tri add_cookie

function get_cookie($name)
{
    $get_cookie =  isset($_COOKIE[$name]) ? $_COOKIE[$name] : "";
    return $get_cookie;
}
// kiem tra dang nhap va vai tro su dung
// function check_login()
// {
//     if (isset($_SESSION['user'])) {
//         if ($_SESSION['user']['vai_tro'] == 1) {
//             return;
//         }
//         if (strpos($_SERVER["REQUEST_URI"], '/admin/') == FALSE) {
//             return;
//         }
//     }
//     $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
//     header("location:" . SITE_URL . "/tai_khoan/dang_nhap.php");
// }
function  getInput($string)
{
    return isset($_GET[$string]) ? $_GET[$string] : '';
}
function  postInput($string)
{
    return isset($_POST[$string]) ? $_POST[$string] : '';
}
function check_role()
{
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['role'] == 1) {
            return;
        }
    }
    $_SESSION['name_page'] = 'trang_chu';
    header("location: " . SITE_URL . "account/login.php");
    die;
}
