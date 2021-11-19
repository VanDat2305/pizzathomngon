<h3 class="alert alert-secondary">Danh sách Topping theo loại</h3>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
            <table class="table table-hover text-center " id="dataTables-example" width="100%">
                <thead>
                    <?php if (strlen($MESSAGE)) {
                        echo "<tr>" . $MESSAGE . "</tr>";
                    } ?>
                    <tr>
                        <th>Tên Loại</th>
                        <th><a href="?form_insert" class="btn btn-dark">Thêm mới</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) : ?>
                        <?php extract($item); ?>
                        <tr>
                            <td><?= $category_name ?></td>
                            <td><a href="?btn_info&id=<?= $category_id ?>">Chi tiết</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>`
            </table>
        </div>
    </div>
</div>