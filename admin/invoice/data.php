<?php
require_once "../../global.php";
require "../../dao/order.php";

extract($_REQUEST);

if ($name_request == "status") {
    if ($status_id == 0) {
        $items = order_select_list();
    } else {
        $items = order_select_by_id_status($status_id);
    }
    if (count($items) > 0) {
        foreach ($items as $item) { ?>
            <tr>
                <td><?= $item['order_id'] ?></td>
                <td><?= $item['fullname'] ?></td>
                <td><?= number_format($item['total_money'], 0, ",", ".") ?> đ</td>
                <td><?= $item['created_at'] ?></td>
                <td><?= $item['status_name'] ?></td>
                <td><a href="?btn_info&id=<?= $item['order_id'] ?>">link</a></td>
            </tr>
<?php
        }
    }
}

?>