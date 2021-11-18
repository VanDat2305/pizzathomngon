<h3 class="alert alert-secondary">Thêm banner</h3>
<form action="index.php" method="post" enctype="multipart/form-data" class="form">
    <div class="form-group">
        <label for="">Slide</label>
        <input type="file" name="slide_image" class="form-control" aria-describedby="helpId">
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
                            <a href="?act=btn_hien&slide_id=<?= $slide['slide_id'] ?>">Ẩn</a>
                        <?php } else { ?>
                            <a href="?act=btn_an&slide_id=<?= $slide['slide_id'] ?>">Hiện</a>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="index.php?btn_delete&slide_id=<?= $slide['slide_id'] ?>" class="btn btn-defaule">Xóa</a>
                    </td>
                </tr>
            <?php } ?>
                </tbody>`

            </table>
        </div>
    </div>
</div>