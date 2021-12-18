<?php


require_once "../../global.php";
require_once "../../dao/user.php";
require_once "../../dao/order.php";

extract($_REQUEST);

if (isset($_SESSION['user']) &&  isset($_SESSION['user']['user_id'])) {
    $user_id = $_SESSION['user']['user_id'];
    $user = user_select_by_id($user_id);


    if (exist_param("btn_logout")) {
        unset($_SESSION['user']);
        $VIEW_NAME = "form.php";
    } else {


        if (exist_param("profile")) {


            $user_id = $_SESSION['user']['user_id'];
            $user = user_select_by_id($user_id);

            $FORM_NAME = "account_ui.php";
        } elseif (exist_param("btn_update_profile")) {

            $up_image = save_file("image_new", "$IMAGE_DIR/users/");
            $image = strlen($up_image) > 0 ? $up_image : $image_old;
            $user_id = $_SESSION['user']['user_id'];


            if ($fullname == '' || $username == '' || $phoneNumber == '' || $birthdate == '' || $email == '' || $email == '' || $address == '') {
                $MESSAGE = '<div class="uk-alert-danger" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <p>Không được để trống các trường!</p>
                        </div>';
                $user = user_select_by_id($user_id);

                $FORM_NAME = "account_ui.php";
            } else {

                user_update_client($user_id, $username, $image, $fullname, $phoneNumber, $email, $address, $birthdate);
                $user = user_select_by_id($user_id);
            }
            $FORM_NAME = "account_ui.php";
        } elseif (exist_param("order")) {


            $list_order = order_select_by_user_id($user_id);

            $FORM_NAME = "order_ui.php";
        } elseif (exist_param("order_detail")) {
            $user_id = $_SESSION['user']['user_id'];
            $user = user_select_by_id($user_id);
            $order_detail = order_select_by_id($order_id);

            $list_order_detail = option_detail_client_order($order_id);
            // echo "<pre>";
            // var_dump($list_order_detail);
            // die;
            $topping = select_list_topping();

            $FORM_NAME = "order_detail_ui.php";
        } elseif (exist_param("change_password")) {
            $user_id = $_SESSION['user']['user_id'];
            $user = user_select_by_id($user_id);

            $FORM_NAME = "change_password_ui.php";
        } elseif (exist_param("btn_change_password")) {
            $user_id = $_SESSION['user']['user_id'];
            $user = user_select_by_id($user_id);

            // echo "<pre>";
            // var_dump($_REQUEST);
            // die;
            if ($old_password == '' || $new_password == '' || $re_password == '') {
                $MESSAGE = '<div class="uk-alert-danger" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <h>Không được để trống các trường!</h>
                        </div>';
            } else {
                if ($new_password != $re_password) {
                    $MESSAGE = '<div class="uk-alert-danger" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <h>Mật khẩu mới phải trùng nhau!</h>
                            </div>';
                } else {
                    if (password_verify($old_password, $user['password'])) {
                        // Check hết đúng thì vào đây update password
                        $hashed_password = password_hash($re_password, PASSWORD_DEFAULT);
                        user_update_password($user_id, $hashed_password);

                        $MESSAGE = '<div class="uk-alert-success" uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                    <h>Cập nhật mật khẩu thành công!</h>
                                </div>';
                    } else {
                        $MESSAGE = '<div class="uk-alert-danger" uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                    <h>Mật khẩu cũ không đúng!</h>
                                </div>';
                    }
                }
            }
            $FORM_NAME = "change_password_ui.php";
        } else {
            $FORM_NAME = "account_ui.php";
        }
        $VIEW_NAME = "layout_account.php";
    }
} else {
    $VIEW_NAME = "form.php";

    // Đăng nhập
    if (exist_param("btn_login")) {
        $user = user_select_by_username($username);
        if ($user) {

            if (password_verify($password, $user['password'])) {

                if (exist_param('remember')) {
                    add_cookie("username", $username, 30);
                    add_cookie("password", $password, 30);
                } else {
                    delete_cookie("username");
                    delete_cookie("password");
                }
                $_SESSION["user"] = $user;

                // echo "<pre>";
                // var_dump($_SESSION['user']);
                // die;
                $role =  $user['role_id'] == 1 ? "Quản trị viên" : ($user['role_id'] == 2 ? "Nhân viên" : "Thành viên");
                echo "<script>
                         alert('Đăng nhập tài khoản " . $role . " thành công!'); 
                         location.href='http://localhost:" . BASE_URL . "';
                    </script>";
            } else {
                $MESSAGE = '<div class="uk-alert-danger" uk-alert>
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
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                try {
                    $created_at =  date_format(date_create(), 'Y-m-d H:i:s');
                    user_insert_view($username, $hashed_password, $fullname, $email, $created_at, $role_id = 3);

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
