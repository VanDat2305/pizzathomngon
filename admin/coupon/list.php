<h3 class="alert alert-secondary">Danh sách khuyến mãi</h3>
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
                        <th>Tên giảm giá</th>
                        <th>Mã CODE</th>
                        <th>Tổng số lượt</th>
                        <th>Số lượt đã dùng</th>
                        <th>Số tiền || %</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Trạng thái</th>
                        <th><a href="?form_insert" class="btn btn-dark">Thêm</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) { ?>
                        <?php extract($item)?>
                        <tr>
                            <td><?= $coupon_id?></td>
                            <td><?= $coupon_name?></td>
                            <td><?= $coupon_code?></td>
                            <td><?= $coupon_count?></td>
                            <td><?= $coupon_used ?></td>
                            <td>
                                <?php if ($coupon_type == 0) {
                                    echo number_format($coupon_price,0,',','.') . "đ";
                                }else{
                                    echo number_format($coupon_price,0,'','') . "%";
                                }?>
                            </td>
                            <td><?= $start_date?></td>
                            <td><?= $end_date?></td>
                            <td>
                                <?php if ($coupon_status == 0) { ?>
                                    <a href="?act=btn_acticve&coupon_id=<?= $coupon_id ?>" class=" btn btn-danger">Dừng</a>
                                <?php } else { ?>
                                    <a href="?act=btn_no_active&coupon_id=<?= $coupon_id ?>" class=" btn btn-success">Chạy</a>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="index.php?form_edit&coupon_id=<?= $coupon_id ?>" class="btn btn-defaule"><i class="far fa-edit"></i></a>
                                <a href="index.php?btn_delete&coupon_id=<?= $coupon_id ?>" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ???')" class="btn btn-defaule"><i class="far fa-trash-alt"></i></a>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>