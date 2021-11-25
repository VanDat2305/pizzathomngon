<h3 class="alert alert-secondary">Thêm logo</h3>
<form action="index.php" id="form_insert_logor" method="post" enctype="multipart/form-data" class="form">
    <div class="form-group">
        <label for="">logo</label>
        <input type="file" name="logo_image" id="logo_image" class="form-control" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <button type="submit" name="btn_insert" class="btn btn-dark">Thêm </button>
    </div>
</form>
<h3 class="alert alert-secondary">Danh sách logo</h3>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
            <table class="table table-hover text-center " id="dataTables-example" width="100%">
                <thead>
                    <?php if (strlen($MESSAGE)) {
                        echo "<tr>" . $MESSAGE . "</tr>";
                    } ?>
                    <tr>
                        <th>Mã logo</th>
                        <th>Hình</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($items as $logo) { ?>
                <tr>
                    <td><?= $logo['logo_id'] ?></td>
                    <td><img src="<?= CONTENT_URL . 'img/logos/' . $logo['logo_image'] ?>" width="200rem" height="100rem" alt=""></td>
                    <td>
                        <?php if ($logo['logo_status'] == 0) { ?>
                            <a href="?act=btn_hien&logo_id=<?= $logo['logo_id'] ?>">Ẩn</a>
                        <?php } else { ?>
                            <a href="?act=btn_an&logo_id=<?= $logo['logo_id'] ?>">Hiện</a>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="index.php?btn_delete&logo_id=<?= $logo['logo_id'] ?>" class="btn btn-defaule" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ???')">Xóa</a>
                    </td>
                </tr>
            <?php } ?>
                </tbody>`
            </table>
        </div>
    </div>
</div>