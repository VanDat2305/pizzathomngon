<?php

$items = category_select_all();
if (isset($_GET['category_id'])) {
    $row_get_id = category_select_by_id($_GET['category_id']);
}

?>
<div class="content-main-cate">
    <div class="content-cate">
        <h4>SỬA LOẠI HÀNG</h4>
        <form action="index.php" id="edit_category" method="post" class="form">
            <input type="hidden" name="category_id" value="<?= isset($row_get_id['category_id']) ? $row_get_id['category_id'] : "" ?>">
            <div class="form-group">
                <label for="">Tên loại hàng</label>
                <input type="text" name="category_name" id="" value="<?= isset($row_get_id['category_name']) ? $row_get_id['category_name'] : "" ?>" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <button type="submit" name="btn_update" class="btn btn-dark">Sửa</button>
            <button type="reset" class="btn btn-dark">Nhập lại</button>
            <a href="index.php" class="btn btn-dark">Thêm mới</a>
        </form>
    </div>
    <div class="content-cate">
        <h4>DANH SÁCH LOẠI HÀNG</h4>
        <form action="index.php" method="post">
            <table class="table">
                <?php
                if (strlen($MESSAGE)) {
                    echo "<p><i>$MESSAGE</i></p>";
                }
                ?>
                <thead class="thead">
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th> Tên Loại</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $category) : ?>
                        <tr>
                            <td><input type="checkbox" class="check-one" name="check_id[]" id="" value="<?= $category['category_id'] ?>"></td>
                            <td><?= $category['category_id'] ?></td>
                            <td><?= $category['category_name'] ?></td>
                            <td>
                                <a href="index.php?btn_edit&category_id=<?= $category['category_id'] ?>" class="btn btn-defaule">Sửa</a>
                                <a href="index.php?btn_delete&category_id=<?= $category['category_id'] ?>" class="btn btn-defaule">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td><button type="button" class="btn btn-dark" onclick="checkAll()">Chọn tất cả</button></td>
                        <td><button type="button" class="btn btn-dark" onclick="clearAll()">Bỏ chọn tất cả</button></td>
                        <td><button type="submit" name="btn_delete_all" class="btn btn-dark" id="deleteAll">Xóa các mục đã chọn</button></td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</div>