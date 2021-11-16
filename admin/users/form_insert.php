<h3 class="alert alert-secondary">Thêm thành viên</h3>
<div class="row m-2 p-4 bg-white">
    <div class="col-12 alert"><?= $MESSAGE ?></div>
    <form action="?btn_insert" method="post" enctype="multipart/form-data" class="col" id="form_insert_user">
        <div class="form-group">
            <label class="label" for="username">Tên đăng nhập <span style="color: red;">(*)</span></label>
            <input type="text" name="username" id="username" class="form-control" value="" placeholder="">
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu <span style="color: red;">(*)</span></label>
            <input type="password" name="password" id="password" class="form-control" value="" placeholder="">
        </div>
        <div class="form-group">
            <label for="repassword">Nhập lại mật khẩu <span style="color: red;">(*)</span></label>
            <input type="password" name="repassword" id="repassword" class="form-control" value="" placeholder="">
        </div>
        <div class="form-group">
            <label for="fullname">Họ tên <span style="color: red;">(*)</span></label>
            <input type="text" name="fullname" id="fullname" class="form-control" value="" placeholder="">
        </div>
        <div class="form-group">
            <label for="phoneNumber">Số điện thoại <span style="color: red;">(*)</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">+84</span>
                </div>
                <input type="number" name="phoneNumber" id="phoneNumber" class="form-control" >
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email </label>
            <input type="email" name="email" id="email" class="form-control" value="" placeholder="">
        </div>
        <div class="form-group">
            <label for="birthdate">Ngày sinh</label>
            <input type="date" name="birthdate" id="birthdate" class="form-control" value="" placeholder="">
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input type="text" name="address" id="address" class="form-control" value="" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Phân quyền </label>
            <select class="custom-select" name="role_id">
                <?php foreach ($list_role as $role) : ?>
                    <?php extract($role); ?>
                    <option value="<?= $role_id ?>"><?= $role_name ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Ảnh</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="image">
                <label class="custom-file-label" for="image">Chọn ảnh</label>
            </div>
        </div>
        <button class="btn btn-success" name="btn_insert" type="submit">Thêm</button>
        <button class="btn btn-success" type="reset">Nhập lại</button>
        <a href="?" class="btn">Quay lại</a>
    </form>
</div>