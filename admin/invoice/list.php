<h3 class="alert alert-secondary">Danh sách đơn hàng </h3>
<div class="row">
    <div class="col-2 ml-2">
        <select name="status_order" id="status_order" class="form-control">
            <option value="0">-- Trạng thái --</option>
            <?php foreach ($list_status as $item) : ?>
                <option value="<?= $item['status_id'] ?>"><?= $item['status_name'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="col-2 ml-2">
        <select name="date_order" id="date_order" class="form-control">
            <option value="0">-- Thời gian --</option>
            <option value="1">Hôm nay</option>
            <option value="2">Tuần này</option>
            <option value="3">Tháng này</option>
            
        </select>
    </div>

    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
            <table class="table table-hover text-center " id="dataTables-example" width="100%">
                <thead>
                    <?php $index = 1;
                    if (strlen($MESSAGE)) {
                        echo "<tr>" . $MESSAGE . "</tr>";
                    } ?>
                    <tr>
                        <th>ID</th>
                        <th>Người nhận</th>
                        <th>Tổng tiền</th>
                        <th>Thời gian đặt</th>
                        <th>Trạng thái </th>
                        <th>Chi tiết</th>
                        <th>Hàng động</th>
                    </tr>
                </thead>
                <tbody class="load_data">
                    <?php foreach ($items as $item) : ?>
                        <?php extract($item); ?>
                        <tr>
                            <td><?= $order_id ?></td>
                            <td><?= $fullname ?></td>
                            <td><?= number_format($total_money, 0, ",", ".") ?> đ</td>
                            <td><?= $created_at ?></td>
                            <td><?= $status_name ?></td>
                            <td><a href="?btn_info&id=<?= $order_id ?>"><i class="fas fa-external-link-alt"></i></a></td>
                            <td>
                            <div class="dropdown open">
                                    <button class="btn btn-outline-white dropdown-toggle" type="button" id="dropdownMenu5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Cập nhật
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul class="list-group">
                                            <?php foreach($list_status as $item):?>
                                            <?php if ($item['status_id'] > $status_id ) { ?>
                                                <li class="list-group-item"><a href="?btn_update_status&id=<?= $order_id?>&status_id=<?= $item['status_id']?>"><?= $item['status_name']?></a> </li>
                                            <?php }?>
                                            <?php endforeach?>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>