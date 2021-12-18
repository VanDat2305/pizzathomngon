<div class="uk-width-expand">
    <div class="user-content">
        <h4 class="user-content__header uk-text-center">Đơn hàng của tôi</h4>
        <div class="user-order-box">
            <ul class="user-order-list">
                <?php foreach ($list_order as $o) { ?>
                    <li class="user-order-item">
                        <a href="<?= SITE_URL ?>account/?order_detail&order_id=<?= $o['order_id'] ?>" class="user-order--link">
                            <div class="user-order--link-header">
                                <div class="user-order_id">#<?= $o['order_id'] ?></div>
                                <div><?= $o['status_name'] ?></div>
                                <div><?= $o['created_at'] ?></div>
                            </div>
                            <div>Địa chỉ nhận hàng:
                                <span class="user-order__address"><?= $o['address'] ?></span>
                            </div>
                            <div>Thời gian nhận hàng:
                                <span class="user-order__time"><?= $o['created_at'] ?></span>
                            </div>
                            <div>Tổng cộng: <span class="user-order__total"><?= number_format($o['total_money'], 0, ',', ',') ?> đ</span></div>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>