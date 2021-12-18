<div class="uk-margin-large-top uk-container">

    <div class="" uk-grid>
        <div class="uk-width-1-3@l">
            <div class="user-sidebar">
                <div class="uk-card">
                    <div class="uk-card-header uk-text-center">
                        <div class="user-card--header uk-text-center">
                            <?php
                            if (isset($user['user_image']) && $user['user_image'] != '') { ?>
                                <img class="user-card--img" src="<?= CONTENT_URL ?>img/users/<?= $user['user_image'] ?>">
                            <?php } else { ?>
                                <img class="user-card--img" src="<?= CONTENT_URL ?>img/users/user.jpg ?>">
                            <?php } ?>
                        </div>
                        <h3 class="user-card-header__title"><?= $user['fullname'] ?></h3>
                        <div><?= $user['username'] ?></div>
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
                                <a class="sidebar-user--item__link" href="<?= SITE_URL ?>account/?change_password">Đổi mật khẩu</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>


        <?php include_once $FORM_NAME ?>

    </div>

</div>