<h3 class="alert alert-secondary">Sửa món ăn</h3>
<div class="row m-2  bg-white">

    <div class="col-8">
        <?php if (strlen($MESSAGE)) {
            echo "<div class='alert'>" . $MESSAGE . "</div>";
        } ?>
        <form action="?" method="post" enctype="multipart/form-data" id="form_update_product">
            <div class="form-group">
                <label for="">Loại món <span style="color: red;">(*)</span></label>
                <select class="custom-select" name="category_id">
                    <?php foreach ($category as $item) : ?>
                        <?php extract($item); ?>
                        <option value="<?= $category_id ?>" <?= $category_id == $item_pro['category_id'] ? 'selected' : "" ?>><?= $category_name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label class="label" for="product_name">Tên món <span style="color: red;">(*)</span></label>
                <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $item_pro['product_name'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="hidden" name="image_old" value="<?= $item_pro['product_image'] ?>">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Chọn ảnh</label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Lưới ảnh</label>
                <button type="button" class="btn btn-outline-dark form-control" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Xem lưới
                </button>
            </div>
            <div class="form-group">
                <label class="label" for="product_name">Mô tả </label>
                <textarea name="description" id="description" rows="4" class="form-control"><?= $item_pro['description'] ?></textarea>
            </div>
            <div class="col-12">
                <input type="hidden" name="id" value="<?= $item_pro['product_id'] ?>">
                <input type="hidden" name="created_at" value="<?= $item_pro['created_at'] ?>">
                <button class="btn btn-success" name="btn_edit_product" type="submit">Sửa</button>
                <button class="btn btn-success" type="reset">Nhập lại</button>
                <a href="?" class="btn">Quay lại</a>
            </div>
        </form>
    </div>
    <div class="col-4"><img src="<?= CONTENT_URL . 'img/products/' . $item_pro['product_image'] ?>" width="100px" alt=""></div>

</div>
<div class="row bg-white m-2 p-4">
    <form action="?" method="post" class="col">
        <input type="hidden" name="id" value="<?= $item_pro['product_id'] ?>">
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
                <?php $index = 1 ?>
                <?php foreach ($item_option as $item) : ?>
                    <?php extract($item); ?>
                    <tr class="tr_option_input">
                        <td><?= $index++ ?> <input type="hidden" name="option_id[]" value="<?= $option_id ?>"></td>
                        <td><input type="text" name="option_name_update[]" id="option_name" value="<?= $option_name ?>" class="form-control"></td>
                        <td><input type="number" name="option_price_update[]" id="option_price" value="<?= number_format($option_price, 0, "", "") ?>" class="form-control"></td>
                        <td>
                            <?php if (count($item_option) >= 2) { ?>
                                <a href="?btn_delete_option&id=<?= $item_pro['product_id'] ?>&id_option=<?= $option_id ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không ???')"><i class="far fa-trash-alt btn "></i></a>
                            <?php } else {
                            } ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4"><button type="submit" name="btn_update_option" class="btn btn-primary">Cập nhật option</button></td>
                </tr>
            </tfoot>
        </table>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lưới ảnh</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="?" method="post" enctype="multipart/form-data" id="form_insert_gallery">
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gallery_image[]" id="gallery_image" multiple>
                            <label class="custom-file-label" for="gallery_image">Chọn ảnh</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $item_pro['product_id'] ?>">
                        <button type="submit"  class="btn btn-primary">Thêm ảnh</button>
                    </div>
                </form>
                <form action="?" method="post" enctype="multipart/form-data">
                    <table class="d-flex flex-row">
                        <tbody>
                            <?php foreach ($item_gallery as $item) : ?>
                                <?php extract($item); ?>
                                <tr>
                                    <td><input type="checkbox" class="form-control" name="id_image_gallery[]" value="<?= $gallery_image_id ?>" id=""></td>
                                    <td><img src="<?= CONTENT_URL . 'img/products/' . $gallery_image_name ?>" alt="" width="100px" height="50%"></td>
                                    <td><a href="?btn_delete_gallery&id=<?= $item_pro['product_id'] ?>&id_image_gallery=<?= $gallery_image_id ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không ???')"><i class="far fa-trash-alt btn "></i></a></td>
                                </tr>
                            <?php endforeach ?>
                            <?php if ($item_gallery == null) {
                            } else { ?>
                                <tr>
                                    <td>
                                        <input type="hidden" name="id" value="<?= $item_pro['product_id'] ?>">
                                        <button type="submit" name="btn_delete_gallery" class="btn btn-danger">Xóa đã chọn</button>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>