    <h3 class="alert alert-secondary">Danh sách thành viên</h3>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card-body ">
                <table class="table table-hover text-center " id="dataTables-example" width="100%">
                    <thead>
                        <?php if (strlen($MESSAGE)) {
                            echo "<tr>" . $MESSAGE . "</tr>";
                        } ?>
                        <tr>
                            <th>ID</th>
                            <th>Họ tên</th>
                            <th>Tên đăng nhập</th>
                            <th>Sdt</th>
                            <th>Quyền</th>
                            <th>Chi tiết</th>
                            <th><a href="?form_insert" class="btn btn-dark">Thêm mới</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item) : ?>
                            <?php extract($item); ?>
                            <tr>
                                <td><?= $user_id ?></td>
                                <td><?= $fullname ?></td>
                                <td><?= $username ?></td>
                                <td><?= $phoneNumber ?></td>
                                <td><?= $role_name ?></td>
                                <td><a href="?btn_info&id=<?= $user_id ?>"><i class="fas fa-external-link-alt"></i></a></td>
                                <td><a href="?form_edit&id=<?= $user_id ?>" class="btn"><i class="far fa-edit"></i></a>
                                    <a href="?btn_delete&id=<?= $user_id ?>" class="btn" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ???')"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>