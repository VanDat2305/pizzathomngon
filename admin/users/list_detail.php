<h3 class="alert alert-secondary">Chi tiết thành viên</h3>
<div class="row">
    <?php extract($item) ?>
    <div class="col-lg-4 col-md p-4">
        <img src="<?= CONTENT_URL.'img/users/'. $user_image?>" width="100%" alt="">
    </div>
    <div class="col-lg-8 col-md p-8">
        <div class="table-responsive">
            <table class="table table-hover text-left " width="100%">
                <tbody>
                    <tr>
                        <th class="col-4">ID:</th>
                        <td><?= $user_id ?></td>
                    </tr>
                    <tr>
                        <th>Tên đăng nhập:</th>
                        <td><?= $username ?></td>
                    </tr>
                    <tr>
                        <th>Họ tên:</th>
                        <td><?= $fullname ?></td>
                    </tr>
                    <tr>
                        <th>Số điện thoại:</th>
                        <td><?= $phoneNumber ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?= $email ?></td>
                    </tr>
                    <tr>
                        <th>Ngày sinh:</th>
                        <td><?= $birthdate ?></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ:</th>
                        <td><?= $address ?></td>
                    </tr>
                    <tr>
                        <th>Ngày tạo:</th>
                        <td><?= $created_at ?></td>
                    </tr>
                    <tr>
                        <th>Ngày sửa:</th>
                        <td><?= $update_at ?></td>
                    </tr>
                    <tr>
                        <th>Quyền:</th>
                        <td><?= $role_name ?></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="?form_edit&id=<?= $user_id?>" class="btn btn-outline-dark">Sửa</a>
                            <a href="?" class="btn btn-outline-dark">Quay lại</a>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>