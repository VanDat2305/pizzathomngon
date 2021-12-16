<div class="uk-margin-large-top uk-container">

    <div class="" uk-grid>
        <div class="uk-width-1-3@l">
            <div class="user-sidebar">
                <div class="uk-card">
                    <div class="uk-card-header uk-text-center">
                        <div class="uk-width-auto user-card--header uk-text-center">
                            <img class="user-card--img" src="https://1.bp.blogspot.com/-yUZBfgk7aAg/XoNf3CJkMTI/AAAAAAAAPCY/wXckEXHpmn8rOji8EeaSwOBsR83SI295gCLcBGAsYHQ/s1600/Image-Galley-Asia-beautiful-girl-colection-TruePic.net-3%2B%252833%2529.jpg">
                        </div>
                        <h3 class="user-card-header__title">Nguyễn Minh Hiếu</h3>
                        <div>username</div>
                    </div>
                    <div class="">
                        <ul class="uk-list uk-list-collapse sidebar-user--list">
                            <li class="sidebar-user--item">
                                <a class="sidebar-user--item__link" href="<?= SITE_URL ?>account/?profile">Thông tin của tôi</a>
                            </li>
                            <li class="sidebar-user--item">
                                <a class="sidebar-user--item__link" href="<?= SITE_URL ?>account/?order">Đơn hàng của tôi</a>
                            </li>
                            <li class="sidebar-user--item">
                                <a class="sidebar-user--item__link" href="">Lịch sử tích điểm</a>
                            </li>
                            <li class="sidebar-user--item">
                                <a class="sidebar-user--item__link" href="">Sản phẩm yêu thích</a>
                            </li>
                            <li class="sidebar-user--item">
                                <a class="sidebar-user--item__link" href="">Cài đặt</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
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
                                        <h3><?= $item['product_name'] ?> - <?= $item['option_name'] ?></h3>
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
    </div>

</div>