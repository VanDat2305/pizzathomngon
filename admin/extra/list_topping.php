
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
            <h5 class="alert alert-secondary m-3">Loại món: <?= $items[0]['category_name']?></h5>
            <table class="table table-hover text-center " id="dataTables-example" width="100%">
                <thead>
                    <?php if (strlen($MESSAGE)) {
                        echo "<tr>" . $MESSAGE . "</tr>";
                    } ?>
                    <tr>
                        <th>Mã Topping</th>
                        <th>Tên Topping</th>
                        <th>Giá</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) : ?>
                        <?php extract($item); ?>
                        <tr>
                            <td><?= $extra_id ?></td>
                            <td><?= $extra_name ?></td>
                            <td><?= $extra_price ?></td>
                            <td>
                                <a href="index.php?btn_edit&extra_id=<?= $extra_id ?>" class="btn btn-defaule">Sửa</a>
                                <a href="index.php?btn_delete&extra_id=<?= $extra_id ?>&category_id=<?=$category_id?>" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ???')" class="btn btn-defaule">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">
                            <a href="?" class="btn btn-outline-dark">Quay lại</a>
                            <a href="<?=ADMIN_URL ?>extra/?form_insert&category_id=<?= $category_id ?>" class="btn btn-dark">Thêm mới</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>