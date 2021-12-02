<h3 class="alert alert-secondary">Danh sách thông tin liên hệ</h3>
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
                        <th>Tên nhà hàng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $contact) { ?>
                        <tr>
                            <td><?= $contact['contact_id'] ?></td>
                            <td><?= $contact['contact_name'] ?></td>
                            <td><?= $contact['contact_phone'] ?></td>
                            <td><?= $contact['contact_email'] ?></td>
                            <td><?= $contact['contact_address'] ?></td>
                            <td>
                                <?php if ($contact['contact_status'] == 0) { ?>
                                    <a href="?act=btn_show&contact_id=<?= $contact['contact_id'] ?>" class="btn btn-danger">Ẩn</a>
                                <?php } else { ?>
                                    <a href="?act=btn_none&contact_id=<?= $contact['contact_id'] ?>" class="btn btn-success">Hiện</a>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="index.php?btn_edit&contact_id=<?= $contact['contact_id'] ?>" class="btn btn-defaule"><i class="far fa-edit"></i></a>
                                <a href="index.php?btn_delete&contact_id=<?= $contact['contact_id'] ?>" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ???')" class="btn btn-defaule"><i class="far fa-trash-alt"></i></a>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>`
            </table>
        </div>
    </div>
</div>
<h3 class="alert alert-secondary">Thêm thông tin liên hệ</h3>
<div class="row">
    <div class="col ml-4 mr-4">
        <form action="index.php" id="form_insert_contact" method="post" enctype="multipart/form-data" class="form">
            <div class="form-group">
                <label for="">Tên nhà hàng</label>
                <input type="text" name="contact_name" id="contact_name" class="form-control" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="contact_email" id="contact_email" class="form-control" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" name="contact_phone" id="contact_phone" class="form-control" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" name="contact_address" id="contact_address" class="form-control" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <button type="submit" name="btn_insert" class="btn btn-dark">Thêm </button>
            </div>
        </form>
    </div>
</div>