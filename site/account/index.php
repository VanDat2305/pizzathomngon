<?php


require_once "../../global.php";
require_once "../../dao/user.php";
require_once "../../dao/order.php";

extract($_REQUEST);

if (isset($_SESSION['user'])) {

    if (exist_param("btn_logout")) {
        unset($_SESSION['user']);
        $VIEW_NAME = "form.php";
    } elseif (exist_param("profile")) {


        $user_id = $_SESSION['user']['user_id'];
        $user = user_select_by_id($user_id);


        $VIEW_NAME = "account_ui.php";
    } elseif (exist_param("order")) {

        $user_id = $_SESSION['user']['user_id'];
        $list_order = order_select_by_user_id($user_id);

        $VIEW_NAME = "order_ui.php";
    } elseif (exist_param("order_detail")) {

        $order_detail = order_select_by_id($order_id);

        $list_order_detail = option_detail_client_order($order_id);
        $topping = select_list_topping();
        // echo "<pre>";
        // var_dump($order_detail);
        // die;
        $VIEW_NAME = "order_detail_ui.php";
    }
} else {
    $VIEW_NAME = "form.php";

    // Đăng nhập
    if (exist_param("btn_login")) {
        $user = user_select_by_username($username);
        if ($user) {
            if ($user['password'] == $password) {

                if (exist_param('remember')) {
                    add_cookie("username", $username, 30);
                    add_cookie("password", $password, 30);
                } else {
                    delete_cookie("username");
                    delete_cookie("password");
                }
                $_SESSION["user"] = $user;

                $role =  $user['role_id'] == 1 ? "Quản trị viên" : ($user['role_id'] == 2 ? "Nhân viên" : "Thành viên");
                echo "<script>
                         alert('Đăng nhập tài khoản " . $role . " thành công!'); 
                         location.href='http://localhost:" . BASE_URL . "';
                    </script>";
            } else {
                $MESSAGE = '<div class="uk-alert-success" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <h>Sai mật khẩu</h>
                            </div>';
            }
        } else {
            $MESSAGE = '<div class="uk-alert-danger" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <h>Sai tài khoản</h>
                        </div>';
        }
    }
    //Đăng ký
    elseif (exist_param("btn_signup")) {
        if ($fullname != "" || $email != "" || $username != "" || $password != "" || $password2 != "") {

            if ($password != $password2) {
                $MESSAGE = '<div class="uk-alert-danger" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <h>Mật khẩu phải trùng nhau!</h>
                            </div>';
            } elseif (user_exist_name($username)) {
                $MESSAGE = '<div class="uk-alert-danger" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <h>Tên đăng nhập đã tồn tại</h>
                            </div>';
            } else {


                try {
                    $created_at =  date_format(date_create(), 'Y-m-d H:i:s');
                    user_insert_view($username, $password, $fullname, $email, $created_at, $role_id = 3);

                    $_SESSION['user']['username'] = $username;
                    $_SESSION['user']['password'] = $password;

                    $MESSAGE = '<div class="uk-alert-success" uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                    <h>Đăng ký thành viên thành công!</h>
                                </div>';
                    $VIEW_NAME = "form.php";
                } catch (Exception $exc) {
                    $MESSAGE = '<div class="uk-alert-danger" uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                    <h>Đăng ký thành viên thất bại!</h>
                                </div>';
                    // }
                }
            }
        } else {
            $MESSAGE = '<div class="uk-alert-danger" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <h>Không được để trống!</h>
                        </div>';
        }
    }
}

require_once "../layout.php";
