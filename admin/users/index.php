<?php
require_once "../../global.php";
require_once "../../dao/user.php";

extract($_REQUEST);
if (exist_param("form_insert")) {
    $list_role = role_select_all();
    $VIEW_NAME = "form_insert.php";
} elseif (exist_param("btn_insert")) {
    $up_image = save_file("image", "$IMAGE_DIR/users/");
    $image = strlen($up_image) > 0 ? $up_image : 'user.png';
    $created_at =  date_format(date_create(), 'Y-m-d H:i:s');
    $birthday = $birthdate == "" ? null : $birthdate;
    if ($username == "" || $password == "" || $repassword == "" || $fullname == "" || $phoneNumber == "") {
        $list_role = role_select_all();
        $VIEW_NAME = "form_insert.php";
        $MESSAGE = "Vui lòng điền đầy đủ thông tin *";
    } else {
        try {
            user_insert($username, $image, $password, $fullname, $phoneNumber, $email, $address, $birthday, $created_at, $created_at, $role_id);
            unset($username, $image, $password, $fullname, $phoneNumber, $email, $address, $birthdate, $created_at, $update_at, $role_id);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!";
        }
        $items = user_select_all();
        $VIEW_NAME = "list.php";
    }
} elseif (exist_param("btn_edit")) {
    $up_image = save_file("image", "$IMAGE_DIR/users/");
    $image = strlen($up_image) > 0 ? $up_image : $image_old;
    $update_at =  date_format(date_create(), 'Y-m-d H:i:s');
    $item = user_select_by_id($user_id);
    $birthday = $birthdate == "" ? null : $birthdate;
    if ($username == "" || $password == "" || $repassword == "" || $fullname == "" || $phoneNumber == "") {
        $list_role = role_select_all();
        $VIEW_NAME = "form_edit.php";
        $MESSAGE = "Vui lòng điền đầy đủ thông tin *";
    } else {
        if ($item['password'] == $password && $password == $repassword) {
            try {
                user_update($user_id, $username, $image, $password, $fullname, $phoneNumber, $email, $address, $birthday, $update_at, $role_id);
                unset($user_id, $username, $image, $password, $fullname, $phoneNumber, $email, $address, $birthday, $update_at, $role_id);
                $MESSAGE = "Sửa thông tin thành công!";
            } catch (Exception $exc) {
                $MESSAGE = "Sửa thông tin thất bại!";
            }
            $items = user_select_all();
            $VIEW_NAME = "list.php";
        } else {
            $list_role = role_select_all();
            $VIEW_NAME = "form_edit.php";
            $MESSAGE = "Sai mật khẩu ";
        }
    }
} elseif (exist_param("form_edit")) {
    $list_role = role_select_all();
    $item = user_select_by_id($id);
    $VIEW_NAME = "form_edit.php";
} elseif (exist_param("btn_info")) {
    $item = user_select_by_id($id);
    $VIEW_NAME = "list_detail.php";
} elseif (exist_param("btn_delete")) {
    try {
        user_delete($id);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = user_select_all();
    $VIEW_NAME = "list.php";
} else {
    $items = user_select_all();
    $VIEW_NAME = "list.php";
}
require_once "../layout.php";
