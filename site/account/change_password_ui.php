<div class="uk-width-expand">
    <div class="user-content">
        <h4 class="user-content__header uk-text-center">Đổi mật khẩu</h4>
        <form class="uk-form-stacked" method="POST" id="form_change_password" action="index.php" enctype="multipart/form-data">

            <div class="uk-margin">
                <label for="">Nhập mật khẩu cũ</label>
                <input class="uk-input" type="password" name="old_password">
            </div>
            <div class="uk-margin">
                <label for="">Nhập mật khẩu mới</label>
                <input class="uk-input" type="password" name="new_password">
            </div>
            <div class="uk-margin">
                <label for="">Xác nhận mật khẩu mới</label>
                <input class="uk-input" type="password" name="re_password">
            </div>
            <h4 class="uk-text-center"><?= $MESSAGE ?></h4>
            <div class="uk-margin uk-text-center">
                <button type="submit" class="uk-button" name="btn_change_password">Đổi mật khẩu</button>
            </div>

        </form>
    </div>
</div>