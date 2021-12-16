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
    </div>

</div>