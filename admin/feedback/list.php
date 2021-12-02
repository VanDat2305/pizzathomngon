
<h3 class="alert alert-secondary">Danh sách hỏi đáp</h3>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
        <form action="?btn_delete_all" method="post" class="table-responsive">
            <table class="table table-hover text-center " id="dataTables-example" width="100%">
                <thead>
                    <?php $index = 1;
                    if (strlen($MESSAGE)) {
                        echo "<tr>" . $MESSAGE . "</tr>";
                    } ?>
                    <tr>
                        <th>STT</th>
                        <th>Họ tên </th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Nội dung</th>
                        <th>Ngày gửi</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $feedback_name ?></td>
                            <td><?= $feedback_email  ?></td>
                            <td><?= $feedback_phone ?></td>
                            <td><?= $feedback_status ?></td>
                            <td><?= $sent_date ?></td>
                            <td>
                                <a href="?btn_delete&feedback_id=<?= $feedback_id ?>" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ???')" class="text-dark"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    </form>
                </tbody>
               
            </table>
            </form>
        </div>
    </div>
</div>