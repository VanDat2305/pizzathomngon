<h3 class="alert alert-secondary">Danh sách món ăn</h3>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
            <table class="table table-hover text-center " id="dataTables-example" width="100%">
                <thead>
                    <?php if (strlen($MESSAGE)) {
                        echo "<tr>" . $MESSAGE . "</tr>";
                    } ?>
                    <tr>
                        <th>ID</th>
                        <th>Tên món</th>
                        <th>Ảnh</th>
                        <th>Tên loại</th>
                        <th>Lượt xem</th>
                        <th>Chi tiết</th>
                        <th><a href="?form_insert" class="btn btn-dark">Thêm mới</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) : ?>
                        <?php extract($item); ?>
                        <tr>
                            <td><?= $product_id ?></td>
                            <td><?= $product_name ?></td>
                            <td><img src="<?= CONTENT_URL . 'img/products/' . $product_image ?>" alt="" width="100px" height="80px"></td>
                            <td><?= $category_name ?></td>
                            <td><?= $count_view ?></td>
                            <td><a href="?btn_info&id=<?= $product_id ?>">link</a></td>
                            <td><a href="?form_edit&id=<?= $product_id ?>" class="btn">Sửa</a>
                                <a href="?btn_delete&id=<?= $product_id ?>" class="btn" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ???')">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>`
            </table>
        </div>
    </div>
</div>