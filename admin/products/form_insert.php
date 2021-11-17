<h3 class="alert alert-secondary">Thêm món ăn</h3>
<div class="row m-1 p-2 bg-white">
<?php if (strlen($MESSAGE)) {
                        echo "<div class='col-12 alert'>" . $MESSAGE . "</div>";
                    } ?>
    <form action="?" method="post" enctype="multipart/form-data" class="col" id="form_insert_product">
        <div class="form-group">
            <label for="">Loại món <span style="color: red;">(*)</span></label>
            <select class="custom-select" name="category_id">
                <?php foreach ($items as $item) : ?>
                    <?php extract($item); ?>
                    <option value="<?= $category_id ?>"><?= $category_name ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label class="label" for="product_name">Tên món <span style="color: red;">(*)</span></label>
            <input type="text" name="product_name" id="product_name" class="form-control" value="" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Ảnh chính</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="image">
                <label class="custom-file-label" for="image">Chọn ảnh</label>
            </div>
        </div>
        <div class="form-group">
            <label for="">Lưới ảnh phụ</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="gallery_image[]" id="gallery_image" multiple>
                <label class="custom-file-label" for="gallery_image">Chọn ảnh</label>
            </div>
        </div>
        <div class="form-group">
            <label class="label" for="product_name">Mô tả </label>
            <textarea name="description" id="description" rows="4" class="form-control"></textarea>
        </div>
        <table class="table table-hover text-center input_option_mulit">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên option</th>
                    <th>Giá</th>
                    <th><button class="btn btn-dark border-0 rounded-2 add_input">Thêm</button></th>
                </tr>
            </thead>
            <tbody>
                <tr class="tr_option_input">
                    <td>1</td>
                    <td> <input type="text" name="option_name[]" id="option_name" class="form-control"></td>
                    <td><input type="number" name="option_price[]" id="option_price" class="form-control"></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-success" name="btn_insert" type="submit">Thêm</button>
        <button class="btn btn-success" type="reset">Nhập lại</button>
        <a href="?" class="btn">Quay lại</a>
    </form>
</div>