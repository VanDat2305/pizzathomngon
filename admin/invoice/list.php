<h3 class="alert alert-secondary">Danh sách đơn hàng </h3>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
            <table class="table table-hover text-center " id="dataTables-example" width="100%">
                <thead>
                    <?php $index = 1; if (strlen($MESSAGE)) {
                        echo "<tr>" . $MESSAGE . "</tr>";
                    } ?>
                    <tr>
                        <th>ID</th>
                        <th>Người nhận</th>
                        <th>Tổng tiền</th>
                        <th>Thời gian đặt</th>
                        <th>Trạng thái </th>
                        <th>Chi tiết</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) : ?>
                        <?php extract($item); ?>
                        <tr>
                            <td><?= $order_id ?></td>
                            <td><?= $fullname ?></td>
                            <td><?= number_format($total_money,0,",",".") ?> đ</td>
                            <td><?= $created_at ?></td>
                            <td><?= $status_name ?></td>
                            <td><a href="?btn_info&id=<?= $order_id ?>">link</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>