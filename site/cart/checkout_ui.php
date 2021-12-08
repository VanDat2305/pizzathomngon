<div class="uk-margin-large-top uk-container" id="load_cart">
    <form action="checkout.php" method="post" uk-grid>
        <div class="uk-width-2-3">
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
                    <textarea class="uk-textarea" rows="5" name="note" placeholder="Textarea"></textarea>
                </div>
            </div>
        </div>
        <div class="uk-card uk-width-1-3@m">
            <div class="mini_cart">
                <div class="uk-card-header">
                    <h3>Giỏ hàng</h3>
                </div>
                <?php $total = 0 ?>
                <?php foreach ($_SESSION['cart'] as $key => $c) { ?>

                    <div class="uk-card-body uk-padding-small mini_cart">
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
                <div class="p-20">
                    <div uk-grid>
                        <div class="uk-width-1-2">Thành tiền:</div>
                        <div class="uk-width-1-2"><?= number_format($total, 0, ',') ?>đ</div>
                    </div>
                    <div class="card-tax" uk-grid>
                        <div class="uk-width-1-2">Thuế:</div>
                        <div class="uk-width-1-2"><?= number_format($total * 0.02, 0, ',') ?>đ</div>
                    </div>
                    <hr class="uk-divider-icon">
                    <div uk-grid>
                        <div class="uk-width-1-2">TỔNG CỘNG:</div>
                        <div class="uk-width-1-2 uk-text-danger uk-text-lead uk-text-bolder"><?= number_format($total + $total * 0.02, 0, ',') ?>đ</div>
                    </div>
                </div>
                <div>
                    <a class="uk-button-primary apply-coupon" href="#modal-center" uk-toggle>Dùng mã giảm giá</a>

                </div>
                <div id="modal-center" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <!-- Xử lý ajax trong file ajax-checkout.js -->
                        <h3 class="uk-text-center">Nhập mã giảm giá (Voucher)</h3>
                        <div class="uk-text-center">
                            <input type="text" id="coupon_discount" name="coupon_discount" class="uk-input uk-input-small" value="">
                            <button class="uk-button" id="btn_coupon_discount">Áp dụng</button>
                        </div>
                        <div class="uk-text-center uk-margin-top">
                            <span id="coupon-message"></span>
                        </div>
                        <div>
                            <ul>
                                <li>KM2021<button>Lấy mã</button></li>
                                <li>Free20k<button>Lấy mã</button></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="uk-card-footer uk-text-center">
                    <button class="uk-button uk-button-text" name="btn_checkout" type="submit">Xác nhận thanh toán</button>
                </div>

            </div>

        </div>
    </form>
</div>