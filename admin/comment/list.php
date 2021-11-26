<h3 class="alert alert-secondary">Bình luận theo món ăn </h3>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
            <table class="table table-hover text-center " id="dataTables-example" width="100%">
                <thead>
                    <?php $index = 1; if (strlen($MESSAGE)) {
                        echo "<tr>" . $MESSAGE . "</tr>";
                    } ?>
                    <tr>
                        <th>STT</th>
                        <th>Tên món</th>
                        <th>Số lượng</th>
                        <th>Đánh giá</th>
                        <th>Ngày cũ </th>
                        <th>Ngày mới</th>
                        <th>Chi tiết</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) : ?>
                        <?php extract($item); ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $product_name ?></td>
                            <td><?= $amount?> </td>
                            <td><?= number_format($rate,1,",",".") ?> <strong>&#10032</strong></td>
                            <td><?= $date_old ?></td>
                            <td><?= $date_new ?></td>
                            <td><a href="?btn_info&id=<?= $product_id ?>"><i class="fas fa-external-link-alt"></i></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>`
            </table>
        </div>
    </div>
</div>