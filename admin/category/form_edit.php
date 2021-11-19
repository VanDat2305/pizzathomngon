
        <h4>SỬA LOẠI HÀNG</h4>
        <form action="index.php" id="form_edit_category" method="post" class="form">
            <input type="hidden" name="category_id" value="<?= isset($items['category_id']) ? $items['category_id'] : "" ?>">
            <div class="form-group">
                <label for="">Tên loại hàng</label>
                <input type="text" name="category_name" id="category_name" id="" value="<?= isset($items['category_name']) ? $items['category_name'] : "" ?>" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <button type="submit" name="btn_update" class="btn btn-dark">Cập nhật</button>
            <button type="reset" class="btn btn-dark">Nhập lại</button>
            <a href="index.php" class="btn btn-dark">Thêm mới</a>
        </form>