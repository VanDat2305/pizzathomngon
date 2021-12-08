<div class="uk-margin-large-top uk-container" id="load_cart">
    <?php if (isset($_SESSION['cart'])) { ?>
        <div uk-grid>
            <div class="uk-overflow-auto uk-width-expand cart_table">
                <table class="uk-table uk-table-small uk-table-divider">
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($_SESSION['cart'] as $c) { ?>
                            <tr>
                                <td class="cart-product-info">
                                    <div class="box-img-cart">
                                        <img src="<?= CONTENT_URL ?>img/products/<?= $c['product_image'] ?>" class="img-cart" alt="">
                                    </div>
                                    <div style="width: 200px;">
                                        <h3 class="cart-product-title"><?= $c['product_name'] ?> - SIZE <?= $c['option_name'] ?></h3>
                                        <!-- Topping -->
                                        <ul class="cart-extra">
                                            <?php $total_extra = 0 ?>
                                            <?php if (isset($c['extra_topping'])) { ?>
                                                <?php foreach ($_SESSION['cart'][$c['option_id']]['extra_topping'] as $e) { ?>
                                                    <li><?= $e['extra_name'] ?> ( <?= number_format($e['extra_price'], 0, ',') ?> đ),</li>
                                                    <?php $total_extra += $e['extra_price'] ?>
                                                <?php } ?>
                                            <?php } ?>
                                        </ul>
                                    </div>

                                </td>
                                <td>
                                    <del> <?= number_format($c['option_price'], 0, ',') ?> đ</del>
                                    <div> <?= number_format(($c['option_price'] * (100 - $c['discount']) / 100), 0, ',') ?> đ</div>

                                    <?php $option_price = ($c['option_price'] * (100 - $c['discount']) / 100) ?>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <span class="counter">
                                                <span class="minus">-</span>
                                                <input class="quantity" type="text" value="<?= $c['quantity'] ?>" />
                                                <span class="plus">+</span>
                                            </span>
                                            <?php $total_unit = $option_price + $total_extra ?>
                                            <input type="hidden" class="cart_option_price" name="cart_option_price" value="<?= $total_unit ?>">
                                            <input type="hidden" class="cart_option_id" value="<?= $c['option_id'] ?>">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?php $total = $total_unit * $c['quantity'] ?>
                                    <div class="total_unit"><?= number_format($total, 0, ',') ?> đ</div>
                                </td>
                                <td>
                                    <button class="remove_cart_unit" uk-icon="trash" value="<?= $c['option_id'] ?>"></button>
                                </td>
                            </tr>
                        <?php } ?>



                    </tbody>
                </table>
                <div class="uk-text-center uk-margin-medium-top">
                    <button class="uk-button" id="clear_cart">Xóa hết giỏ hàng <span uk-icon="trash"></span></button>
                </div>
            </div>
            <div class="uk-width-1-4@l cart_checkout uk-text-center">
                <div class="uk-card uk-padding-small uk-cart">
                    <h3 class="uk-card-title">Giỏ hàng</h3>
                    <div uk-grid>
                        <div class="uk-width-1-2">Thành tiền:</div>
                        <div class="uk-width-1-2" id="total_money_cart"></div>
                    </div>
                    <div class="card-thue" uk-grid>
                        <div class="uk-width-1-2">Thuế:</div>
                        <div class="uk-width-1-2" id="cart_tax"></div>
                    </div>
                    <hr class="uk-divider-icon">
                    <div uk-grid>
                        <div class="uk-width-1-2">TỔNG CỘNG:</div>
                        <div class="uk-width-1-2 uk-text-danger uk-text-lead uk-text-bolder" id="finished_total"></div>
                    </div>
                    <div class="cart-button-group" uk-margin>
                        <a class="uk-button uk-button-danger" href="<?= SITE_URL ?>cart/checkout.php?form_checkout">Thanh toán</a>

                        <a class="uk-button uk-button-default" href="<?= BASE_URL ?>">Tiếp tục đặt món</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>

        <div>
            <img class="page-cart__img" src="../content/img/pages/cart/img-cart.png" alt="">
            <div class="page-cart__box">
                <div class="page-cart__title">Giỏ hàng trống.</div><a class="uk-button" href="<?= BASE_URL ?>">Đi mua
                    hàng</a>
            </div>
        </div>
    <?php } ?>
    <div id="cart_empty" style="display: none">
        <img class="page-cart__img" src="../content/img/pages/cart/img-cart.png" alt="">
        <div class="page-cart__box">
            <div class="page-cart__title">Giỏ hàng trống.</div><a class="uk-button" href="<?= BASE_URL ?>">Đi mua
                hàng</a>
        </div>
    </div>
</div>