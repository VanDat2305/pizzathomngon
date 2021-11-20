<h3 class="alert alert-secondary">Chi tiết hóa đơn </h3>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
            <table class="table table-hover text-center " width="100%">
                <thead>
                    <?php $index = 1;
                    if (strlen($MESSAGE)) {
                        echo "<tr>" . $MESSAGE . "</tr>";
                    } ?>
                </thead>
                <tbody class="text-left">
                    <?php extract($item); ?>

                    <tr>
                        <th>Mã hóa đơn:</th>
                        <td><?= $order_id ?></td>
                    </tr>
                    <tr>
                        <th>Người nhận:</th>
                        <td><?= $fullname ?></td>
                    </tr>
                    <tr>
                        <th>Số điện thoại:</th>
                        <td><?= $phoneNumber ?></td>
                    </tr>
                    <tr>
                        <th>Tổng tiền:</th>
                        <td><?= number_format($total_money, 0, ",", ".") ?> đ</td>
                    </tr>
                    <tr>
                        <th>Thời gian đặt:</th>
                        <td><?= $created_at ?></td>
                    </tr>
                    <tr>
                        <th>Trạng thái:</th>
                        <td><?= $status_name ?></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ nhận:</th>
                        <td><?= $address ?></td>
                    </tr>
                    <tr>
                        <th>Ghi chú:</th>
                        <td><?= $note ?></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
            <table class="table table-hover text-center " width="100%">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên món</th>
                        <th>Tên option</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody >
                    <?php foreach($option as $item):?>
                        <?php extract($item);  ?>
                        <tr>
                            <td><?= $index++?></td>
                            <td><?= $product_name?></td>
                            <td><?= $option_name ?></td>
                            <td><?= number_format($option_price,0,'','')?> đ</td>
                            <td><?= $quantity?></td>
                            <td><?= number_format($total_option,0,',','.')?> đ</td>
                        </tr>
                    <?php endforeach?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>