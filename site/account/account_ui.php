<div class="uk-width-expand">
    <div class="user-content">
        <h4 class="user-content__header uk-text-center">Thông tin cá nhân</h4>
        <form class="uk-form-stacked" id="form-user-info" method="POST" action="index.php" enctype="multipart/form-data">

            <div class="uk-margin" uk-grid>
                <div class="uk-width-1-2@s">
                    <label for="">Họ và tên đệm</label>
                    <input class="uk-input" type="text" name="fullname" value="<?= $user['fullname'] ?>">
                </div>
                <div class="uk-width-1-2@s">
                    <label for="">Tên</label>
                    <input class="uk-input" type="text" name="username" value="<?= $user['username'] ?>">
                </div>
            </div>
            <div class="uk-margin" uk-grid>
                <div class="uk-width-1-2@s">
                    <label for="">Điện thoại</label>
                    <input class="uk-input" type="text" name="phoneNumber" value="<?= $user['phoneNumber'] ?>">
                </div>
                <div class="uk-width-1-2@s">
                    <label for="">Ngày sinh</label>
                    <input class="uk-input" type="date" name="birthdate" value="<?= $user['birthdate'] ?>">
                </div>
            </div>
            <div class="uk-margin">
                <label for="">Email</label>
                <input class="uk-input" type="text" name="email" value="<?= $user['email'] ?>">
            </div>

            <div class="uk-margin">
                <label for="">Địa chỉ</label>
                <input class="uk-input" type="text" name="address" value="<?= $user['address'] ?>">
            </div>
            <div class="uk-margin uk-text-center" uk-margin>
                <div uk-form-custom="target: true">
                    <input type="file" name="image_new">
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Thay ảnh đại diện" disabled>
                </div>
                <input type="hidden" name="image_old" value="<?= $user['user_image'] ?>">
            </div>
            <h4 class="uk-text-center"><?= $MESSAGE ?></h4>
            <div class="uk-margin uk-text-center">
                <button type="submit" class="uk-button" name="btn_update_profile">Lưu</button>
            </div>

        </form>
    </div>
</div>