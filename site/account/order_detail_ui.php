<div class="uk-width-expand">
    <div class="user-content">
        <h4 class="user-content__header uk-text-center">Đơn hàng của tôi</h4>
        <div class="user-order-box">
            <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                <thead>
                    <tr>
                        <th class="uk-width-small">Sản phẩm</th>
                        <th></th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng cộng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_order_detail as $item) { ?>
                        <tr>
                            <td>
                                <img src="<?= CONTENT_URL ?>img/products/<?= $item['product_image'] ?>" alt="" width="150">
                            </td>
                            <td>
                                <h3>
                                    <a href="<?= SITE_URL ?>product/product_detail.php?product_id=<?= $item['product_id'] ?>">
                                        <?= $item['product_name'] ?> - <?= $item['option_name'] ?>
                                    </a>
                                </h3>
                                <ul class="user-order_detail-list">

                                    <?php foreach ($topping as $t) {  ?>
                                        <?php if ($t['order_detail_id'] == $item['order_detail_id']) { ?>

                                            <li><?= $t['extra_name'] ?> ( <span><?= number_format($t['extra_price'], 0, ',', ',') ?> đ )</span></li>
                                        <?php } ?>
                                    <?php } ?>
                                </ul>
                            </td>

                            <?php $price = ($item['option_price'] * (100 - $item['discount'])) / 100; ?>

                            <td><?= number_format($price, 0, ',', ',') ?> đ</td>
                            <td><?= $item['quantity'] ?></td>
                            <td><?= number_format($item['total_option'], 0, ',', ',') ?> đ</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="user-order-box-total">
            <div class="user-order-box-item">
                <div>Thành tiền:</div>
                <div><?= number_format($order_detail['money_pro'], 0, ',', ',') ?> đ</div>
            </div>
            <div class="user-order-box-item">
                <div>Thuế:</div>
                <div><?= number_format($order_detail['tax'], 0, ',', ',') ?> đ</div>
            </div>
            <div class="user-order-box-item">
                <div>Dùng mã giảm:</div>
                <div><del><?= number_format($order_detail['coupon_discount'], 0, ',', ',') ?> đ</del></div>
            </div>
            <div class="user-order-box-item user-order-box-item-total uk-text-danger uk-text-lead uk-text-bolder">
                <div>Tổng cộng:</div>
                <div><?= number_format($order_detail['total_money'], 0, ',', ',') ?> đ</div>
            </div>
        </div>

    </div>
</div>