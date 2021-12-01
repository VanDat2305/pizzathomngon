
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
                        <th></th>
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
                            <th><input type="checkbox" class="check-one" name="feedback_id" id="" value="<?= $feedback_id ?>"></th>
                            <td><?= $index++ ?></td>
                            <td><?= $feedback_name ?></td>
                            <td><?= $feedback_email  ?></td>
                            <td><?= $feedback_phone ?></td>
                            <td><?= $feedback_status ?></td>
                            <td><?= $sent_date ?></td>
                            <td>
                                <a href="?btn_delete&feedback_id=<?= $feedback_id ?>" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ???')" class="text-dark">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    </form>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"><button type="button" onclick="checkAll()" class="btn btn-dark">Chọn tất cả</button></td>
                        <td colspan="2"><button type="button" onclick="clearAll()" class="btn btn-dark" ">Bỏ chọn tất cả</button></td>
                        <td colspan=" 2"><button onclick="return confirm('Bạn có chắc chắn muốn xóa không ???')" type="submit" class="btn btn-dark" id="deleteAll">Xóa các mục đã chọn</button></td>
                    </tr>
                </tfoot>
            </table>
            </form>
        </div>
    </div>
</div>