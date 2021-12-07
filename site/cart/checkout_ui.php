<div class="checkout-container uk-container" id="load_cart">
    <form action="checkout.php" method="post" uk-grid>
        <div class="uk-width-1-2@m">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-1-2@s">
                    <label for="">SDT người nhận</label>
                    <input class="uk-input" type="text" name="phoneNumber" value="<?= $phoneNumber ?>">
                </div>
                <div class="uk-width-1-2@s">
                    <label for="">Tên người nhận</label>
                    <input class="uk-input" type="text" name="fullname" value="<?= $fullname ?>">
                </div>

                <div class="uk-width-1-1">
                    <label for="">Địa chỉ</label>
                    <input class="uk-input" type="text" name="address" value="<?= $address ?>">
                </div>

                <div class="uk-width-1-1">
                    <label for="">Ghi chú</label>
                    <textarea class="uk-textarea" rows="5" name="note" placeholder="Ghi chú..."></textarea>
                </div>
            </div>
        </div>
        <div class="uk-card uk-width-1-2@m">
            <div class="mini_cart">
                <div class="uk-card-header card-header">
                    <h3 class="uk-text-center">Giỏ hàng</h3>
                    <a class="btn-edit-cart" href="">Sửa đổi <span uk-icon="file-edit"></span></a>
                </div>
                <div class="card-body-wrapper">
                    <?php $total = 0 ?>
                    <?php foreach ($_SESSION['cart'] as $key => $c) { ?>

                        <div class="uk-card-body mini_cart_unit">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="100" height="100" src="<?= CONTENT_URL . 'img/products/' . $_SESSION['cart'][$key]['product_image'] ?>">
                                </div>
                                <div class="uk-width-expand">
                                    <h4 class="uk-margin-remove-bottom"><?= $_SESSION['cart'][$key]['product_name'] ?></h4>
                                    <ul class="mini_cart_extra">
                                        <li>Số lượng: <sub>x</sub>
                                            <b class="uk-text-danger"><?= $_SESSION['cart'][$key]['quantity'] ?></b>
                                        </li>
                                        <!-- Giá topping -->
                                        <?php $total_extra = 0 ?>
                                        <?php if (isset($_SESSION['cart'][$key]['extra_topping'])) { ?>
                                            <?php $extra = $_SESSION['cart'][$key]['extra_topping'] ?>

                                            <?php for ($i = 0; $i < count($extra); $i++) {  ?>
                                                <?php
                                                $extra_price = $extra[$i]['extra_price'];
                                                $total_extra += $extra_price;
                                                ?>
                                                <li><?= $extra[$i]['extra_name'] ?> ( <?= number_format($extra_price, 0, ',') ?> đ),</li>
                                            <?php } ?>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <!-- Giá option -->
                                <div class="uk-width-expand">
                                    <?php
                                    $price = ($_SESSION['cart'][$key]['option_price'] * (100 - $_SESSION['cart'][$key]['discount']) / 100);
                                    $total = $total +  ($price + $total_extra) * $_SESSION['cart'][$key]['quantity'];
                                    ?>
                                    <span><sub>x</sub> <?= number_format($price, 0, ',') ?> đ</span>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>

                <div class="card-middle" id="ajax_coupon_applied">
                    <div uk-grid>
                        <div class="uk-width-1-2">Thành tiền:</div>
                        <div class="uk-width-1-2"><?= number_format($total, 0, ',') ?>đ</div>
                    </div>
                    <div class="card-tax" uk-grid>
                        <div class="uk-width-1-2">Thuế:</div>
                        <div class="uk-width-1-2"><?= number_format($total * 0.02, 0, ',') ?>đ</div>
                    </div>
                    <div class="card_coupon_applied" uk-grid>
                        <div class="uk-width-1-2">Mã giảm giá: <span id="card_coupon_applied_code"></span></div>
                        <div class="uk-width-1-2">- <span id="card_coupon_applied_money"></span></div>
                    </div>
                    <hr class="uk-divider-icon">
                    <div uk-grid>
                        <div class="uk-width-1-2">TỔNG CỘNG:</div>
                        <div class="uk-width-1-2 uk-text-danger uk-text-lead uk-text-bolder"><?= number_format($total + $total * 0.02, 0, ',') ?>đ</div>
                    </div>
                </div>
                <div class="btn-checkout-group">
                    <div>
                        <a class="uk-button-primary apply-coupon" href="#modal-coupon" uk-toggle>Dùng mã giảm giá</a>
                    </div>
                    <div class="uk-card-footer uk-text-center">
                        <button class="uk-button uk-button-text" name="btn_checkout" type="submit">Xác nhận thanh toán</button>
                    </div>

                </div>
            </div>

        </div>
    </form>
</div>
<div id="modal-coupon" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>
        <!-- Xử lý ajax trong file ajax-checkout.js -->
        <h3 class="uk-text-center">Nhập mã giảm giá (Voucher)</h3>
        <div class="uk-text-center">
            <input type="text" id="coupon_discount" name="coupon_discount" class="uk-input uk-input-small" value="">
            <button class="uk-button" id="btn_coupon_discount">Áp dụng</button>
            <input type="hidden" id="checkout_total" value="<?= $total ?>">
        </div>
        <div class="modal_body_wrapper">
            <ul class="uk-text-center coupon_list">
                <?php date_default_timezone_set('Asia/Ho_Chi_Minh');
                $now = date_format(date_create(), 'Y-m-d H:i:s'); ?>
                <?php foreach ($coupons as $c) { ?>
                    <?php
                    if (strtotime($now) > strtotime($c['end_date']) || $c['coupon_status'] == 0 || $c['coupon_used'] >= $c['coupon_count']) {
                    ?>
                        <li class="coupon_item_box coupon_item_expired">
                            <div class="coupon_item">
                                <div>
                                    <div class="coupon_item_code"><?= $c['coupon_code'] ?> </div>

                                    <div class="coupon_item_type">Giảm
                                        <?php if ($c['coupon_type'] == 1) {
                                            echo number_format($c['coupon_price'], 0, '') . '%';
                                        } else {
                                            echo number_format($c['coupon_price'], 0, ',') . ' đ';
                                        } ?>
                                    </div>
                                </div>
                                <div class="coupon_item_name"><?= $c['coupon_name'] ?></div>
                                <button class="uk-button btn_get_coupon" value="<?= $c['coupon_code'] ?>">Lấy mã</button>
                            </div>
                            <span class="coupon_message">Mã giảm giá đã hết hiệu lực</span>
                        </li>
                    <?php } elseif (strtotime($now) < strtotime($c['start_date'])) { ?>
                        <li class="coupon_item_box coupon_item_not_start">
                            <div class="coupon_item">
                                <div>
                                    <div class="coupon_item_code"><?= $c['coupon_code'] ?> </div>

                                    <div class="coupon_item_type">Giảm
                                        <?php if ($c['coupon_type'] == 1) {
                                            echo number_format($c['coupon_price'], 0, '') . '%';
                                        } else {
                                            echo number_format($c['coupon_price'], 0, ',') . ' đ';
                                        } ?>
                                    </div>
                                </div>
                                <div>
                                    <div class="coupon_item_name"><?= $c['coupon_name'] ?></div>
                                    <div class="coupon_item_date"></div>
                                </div>
                                <button class="uk-button btn_get_coupon" value="<?= $c['coupon_code'] ?>">Lấy mã</button>
                            </div>
                            <span class="coupon_message">Chương trình chưa bắt đầu</span>
                        </li>
                    <?php } else { ?>
                        <!-- Mã giảm giá khả dụng -->
                        <li class="coupon_item_box">
                            <div class="coupon_item">
                                <div>
                                    <div class="coupon_item_code"><?= $c['coupon_code'] ?> </div>

                                    <div class="coupon_item_type">Giảm
                                        <?php if ($c['coupon_type'] == 1) {
                                            echo number_format($c['coupon_price'], 0, '') . '%';
                                        } else {
                                            echo number_format($c['coupon_price'], 0, ',') . ' đ';
                                        } ?>
                                    </div>
                                </div>
                                <div>
                                    <div class="coupon_item_name"><?= $c['coupon_name'] ?></div>
                                    <div class="coupon_item_date">
                                        <?php $diff = strtotime($c['end_date']) - strtotime($now);
                                        $years = floor($diff / (365 * 60 * 60 * 24));
                                        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                                        $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));
                                        ?>
                                        <?php if ($days >= 1) { ?>
                                            <span class="coupon_message">Còn: <?= $days ?> ngày <?= $hours ?> giờ</span>
                                        <?php } else { ?>
                                            <span class="coupon_message coupon_message_red">Còn: <?= $hours ?> giờ</span>
                                        <?php } ?>
                                        <div class="coupon_message">Đã dùng: <?= $c['coupon_used'] ?>/<?= $c['coupon_count'] ?></div>
                                    </div>
                                </div>
                                <button class="uk-button btn_get_coupon btn_coupon_value" value="<?= $c['coupon_code'] ?>">Lấy mã</button>
                            </div>


                        </li>
                    <?php } ?>
                <?php   } ?>
            </ul>
        </div>

    </div>
</div>