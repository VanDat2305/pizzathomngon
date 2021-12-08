<?php


require_once "../../global.php";
require_once "../../dao/user.php";

extract($_REQUEST);

if (isset($_SESSION['user'])) {
    $VIEW_NAME = "account.php";
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

                $role =  $user['role_id'] != 3 ? "" : "nhân viên ";
                echo "<script>
                         alert('Đăng nhập tài khoản " . $role . "thành công!'); 
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

            // $file_name = save_file("up_hinh", "$UPLOAD_URL/users/");
            // $hinh = $file_name ? $file_name : "";
            try {
                $created_at =  date_format(date_create(), 'Y-m-d H:i:s');
                user_insert_view($username, $password, $fullname, $email, $created_at, $role_id = 3);

                $_SESSION['account']['username'] = $username;
                $_SESSION['account']['password'] = $password;

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
    }
    // Đăng xuất
    else {

        if (exist_param("btn_logout")) {
            unset($_SESSION['user']);
        }
        $ma_kh = get_cookie("ma_kh");
        $mat_khau = get_cookie("mat_khau");
    }
}

require_once "../layout.php";
