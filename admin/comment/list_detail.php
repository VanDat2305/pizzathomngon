<h3 class="alert alert-secondary">Danh sách bình luận</h3>
<div class="row">
    <h5 class="col-12 ml-3"> Món ăn: <?= $items[0]['product_name']?></h5>
    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
            <table class="table table-hover text-center " id="dataTables-example" width="100%">
                <thead>
                    <?php $index = 1; if (strlen($MESSAGE)) {
                        echo "<tr>" . $MESSAGE . "</tr>";
                    } ?>
                    <tr>
                        <th>STT</th>
                        <th>Nội dung</th>
                        <th>Đánh giá</th>
                        <th>Ngày gửi </th>
                        <th>Người gửi</th>
                        <th>Hành động </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) : ?>
                        <?php extract($item); ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $comment ?></td>
                            <td><?= number_format($rate,0,"","") ?> <strong>&#10032</strong> </td>
                            <td><?= $cmt_date ?></td>
                            <td><?= $username ?></td>
                            <td><a href="?btn_delete&id=<?= $cmt_id ?>" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ???')"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>`
            </table>
        </div>
    </div>
</div>