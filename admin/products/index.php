<?php
require_once "../../global.php";
require_once "../../dao/category.php";
require_once "../../dao/product.php";

extract($_REQUEST);



if (exist_param("form_insert")) {
    $items = category_select_all();
    $VIEW_NAME = "form_insert.php";
} elseif (exist_param("btn_insert")) {
    $up_image = save_file("image", "$IMAGE_DIR/products/");
    $image = strlen($up_image) > 0 ? $up_image : 'product.png';

    $up_gallery = multiple_save_image("gallery_image", "$IMAGE_DIR/products/");
    $image_arr = [];
    $index = 1;
    foreach ($up_gallery as $item) {
        $image_arr[] = strlen($item) > 0 ? $item : 'product' . $index++ . '.png';
    }
    $created_at =  date_format(date_create(), 'Y-m-d H:i:s');
    $count_view = 0;
    if ($product_name == "" || $option_name[0] == "" || $option_price[0] == "") {
        $items = category_select_all();
        $VIEW_NAME = "form_insert.php";
        $MESSAGE = "Vui lòng điền đầy đủ thông tin ";
    } else {
        try {
            // insert lấy id product
            $product_id = product_insert($category_id, $product_name, $description, $image, $created_at, $count_view);
            $count = count($option_price);
            // insert option
            for ($i = 0; $i < $count; $i++) {
                option_insert($product_id, $option_name[$i], $option_price[$i]);
            }
            //insert image
            foreach ($image_arr as $item) {
                gallery_insert($product_id, $item);
            }
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!";
        }
        $items = product_select_all();
        $VIEW_NAME = "list.php";
    }
} elseif (exist_param("form_edit")) {
    $item_pro = product_select_by_id($id);
    $item_option = option_select_by_pro_id($id);
    $item_gallery = gallery_select_by_pro_id($id);
    $category = category_select_all();
    $VIEW_NAME = "form_edit.php";
} elseif (exist_param("btn_edit_product")) {
    $up_image = save_file("image", "$IMAGE_DIR/products/");
    $image = strlen($up_image) > 0 ? $up_image : $image_old;

    if ($product_name == "") {
        $item_pro = product_select_by_id($id);
        $item_option = option_select_by_pro_id($id);
        $item_gallery = gallery_select_by_pro_id($id);
        $category = category_select_all();
        $MESSAGE = "Vui lòng không để trống!";
        $VIEW_NAME = "form_edit.php";
    } else {
        try {
            product_update($id, $category_id, $product_name, $description, $image, $created_at);
            $MESSAGE = "Cập nhật thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
        }
        $items = product_select_all();
        $VIEW_NAME = "list.php";
    }
} elseif (exist_param("btn_insert_gallery")) {
    //luu file vào thu muc upload
    $up_gallery = multiple_save_image("gallery_image", "$IMAGE_DIR/products/");
    $image_arr = [];
    $index = 1;
    foreach ($up_gallery as $item) {
        $image_arr[] = strlen($item) > 0 ? $item : 'product' . $index++ . '.png';
    }
    try {
        foreach ($image_arr as $item) {
            gallery_insert($id, $item);
        }
        $MESSAGE = "Thêm mới thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $item_pro = product_select_by_id($id);
    $item_option = option_select_by_pro_id($id);
    $item_gallery = gallery_select_by_pro_id($id);
    $category = category_select_all();
    $VIEW_NAME = "form_edit.php";
} elseif (exist_param("btn_delete_gallery")) {
    try {
        gallery_delete($id_image_gallery);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $item_pro = product_select_by_id($id);
    $item_option = option_select_by_pro_id($id);
    $item_gallery = gallery_select_by_pro_id($id);
    $category = category_select_all();
    $VIEW_NAME = "form_edit.php";
} elseif (exist_param("btn_update_option")) {
    try {
        if (isset($option_id)) {
            for ($i = 0; $i < count($option_id); $i++) {
                option_update($option_id[$i], $id, $option_name_update[$i], $option_price_update[$i]);
            }
        }
        if (isset($option_price)) {
            for ($i = 0; $i < count($option_price); $i++) {
                if ($option_price[$i] != "") {
                    option_insert($id, $option_name[$i], $option_price[$i]);
                }
            }
        }
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $item_pro = product_select_by_id($id);
    $item_option = option_select_by_pro_id($id);
    $item_gallery = gallery_select_by_pro_id($id);
    $category = category_select_all();
    $VIEW_NAME = "form_edit.php";
} elseif (exist_param("btn_delete")) {
    try {
        product_delete($id);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = product_select_all();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_delete_option")) {
    try {
        option_delete($id_option);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $item_pro = product_select_by_id($id);
    $item_option = option_select_by_pro_id($id);
    $item_gallery = gallery_select_by_pro_id($id);
    $category = category_select_all();
    $VIEW_NAME = "form_edit.php";
} elseif (exist_param("btn_info")) {
    $items = product_select_by_id($id);
    $item_option = option_select_by_pro_id($id);
    $gallery_item = gallery_select_by_pro_id($id);
    $VIEW_NAME = "list_detail.php";
} else {
    $items = product_select_all();
    $VIEW_NAME = "list.php";
}

require_once "../layout.php";
