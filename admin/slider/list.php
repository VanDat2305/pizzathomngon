<h3 class="alert alert-secondary">Thêm banner</h3>
<form action="index.php" id="form_insert_slider" method="post" enctype="multipart/form-data" class="form col-4 m-3">
    <div class="form-group">
        <label for="">Slide</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="slide_image" id="slide_image">
            <label class="custom-file-label" for="image">Chọn ảnh</label>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" name="btn_insert" class="btn btn-dark">Thêm </button>
    </div>
</form>

<h3 class="alert alert-secondary">Danh sách banner</h3>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
            <table class="table table-hover text-center " id="dataTables-example" width="100%">
                <thead>
                    <?php if (strlen($MESSAGE)) {
                        echo "<tr>" . $MESSAGE . "</tr>";
                    } ?>
                    <tr>
                        <th>Mã slide</th>
                        <th>Hình</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($items as $slide) { ?>
                <tr>
                    <td><?= $slide['slide_id'] ?></td>
                    <td><img src="<?= CONTENT_URL . 'img/banners/' . $slide['slide_image'] ?>" width="200rem" height="100rem" alt=""></td>
                    <td>
                        <?php if ($slide['slide_status'] == 0) { ?>
                            <a href="?act=btn_hien&slide_id=<?= $slide['slide_id'] ?>" class="btn btn-danger">Ẩn</a>
                        <?php } else { ?>
                            <a href="?act=btn_an&slide_id=<?= $slide['slide_id'] ?>" class="btn btn-success">Hiện</a>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="index.php?btn_delete&slide_id=<?= $slide['slide_id'] ?>" class="btn btn-defaule" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ???')"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php } ?>
                </tbody>`
            </table>
        </div>
    </div>
</div>