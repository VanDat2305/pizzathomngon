
        <h4>Sửa topping</h4>
        <form action="index.php" id="form_edit_extra" method="post" class="form">
            <input type="hidden" name="extra_id"  value="<?= isset($items['extra_id']) ? $items['extra_id'] : "" ?>">
            <div class="form-group">
                <label for="">Tên Topping</label>
                <input type="text" name="extra_name" id="extra_name" value="<?= isset($items['extra_name']) ? $items['extra_name'] : "" ?>" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="number" name="extra_price" id="extra_price" value="<?= isset($items['extra_price']) ? $items['extra_price'] : "" ?>" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <button type="submit" name="btn_update" class="btn btn-dark">Cập nhật</button>
            <button type="reset" class="btn btn-dark">Nhập lại</button>
            <a href="index.php" class="btn btn-dark">Thêm mới</a>
        </form>