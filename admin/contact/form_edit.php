
        <h4>SỬA LOẠI HÀNG</h4>
        <form action="index.php" id="form_edit_contact" method="post" class="form">
            <input type="hidden" name="contact_id" value="<?= isset($items['contact_id']) ? $items['contact_id'] : "" ?>">
            <div class="form-group">
                <label for="">Tên nhà hàng:</label>
                <input type="text" name="contact_name" id="contact_name" id="" value="<?= isset($items['contact_name']) ? $items['contact_name'] : "" ?>" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="contact_email" id="contact_email" id="" value="<?= isset($items['contact_email']) ? $items['contact_email'] : "" ?>" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" name="contact_phone" id="contact_phone" id="" value="<?= isset($items['contact_phone']) ? $items['contact_phone'] : "" ?>" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" name="contact_address" id="contact_address" id="" value="<?= isset($items['contact_address']) ? $items['contact_address'] : "" ?>" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <button type="submit" name="btn_update" class="btn btn-dark">Cập nhật</button>
            <button type="reset" class="btn btn-dark">Nhập lại</button>
            <a href="index.php" class="btn btn-dark">Thêm mới</a>
        </form>