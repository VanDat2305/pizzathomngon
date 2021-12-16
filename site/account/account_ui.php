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
                <h4 class="user-content__header uk-text-center">Thông tin cá nhân</h4>
                <form class="uk-form-stacked" id="form-user-info">

                    <div class="uk-margin" uk-grid>
                        <div class="uk-width-1-2@s">
                            <label for="">Họ và tên đệm</label>
                            <input class="uk-input" type="text" value="<?= $user['fullname'] ?>">
                        </div>
                        <div class="uk-width-1-2@s">
                            <label for="">Tên</label>
                            <input class="uk-input" type="text" value="<?= $user['username'] ?>">
                        </div>
                    </div>
                    <div class="uk-margin" uk-grid>
                        <div class="uk-width-1-2@s">
                            <label for="">Điện thoại</label>
                            <input class="uk-input" type="text" value="<?= $user['phoneNumber'] ?>">
                        </div>
                        <div class="uk-width-1-2@s">
                            <label for="">Ngày sinh</label>
                            <input class="uk-input" type="date" value="<?= $user['birthdate'] ?>">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label for="">Email</label>
                        <input class="uk-input" type="text" value="<?= $user['email'] ?>">
                    </div>

                    <div class="uk-margin">
                        <label for="">Địa chỉ</label>
                        <input class="uk-input" type="text" value="<?= $user['address'] ?>">
                    </div>
                    <div class="uk-margin uk-text-center">
                        <button type="button" class="uk-button">Lưu</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>