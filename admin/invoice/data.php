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
    $list_status = status_select_all();

    if (count($items) > 0) {
        foreach ($items as $item) { ?>
            <tr>
                <td><?= $item['order_id'] ?></td>
                <td><?= $item['fullname'] ?></td>
                <td><?= number_format($item['total_money'], 0, ",", ".") ?> đ</td>
                <td><?= $item['created_at'] ?></td>
                <td><?= $item['status_name'] ?></td>
                <td><a href="?btn_info&id=<?= $item['order_id'] ?>"><i class="fas fa-external-link-alt"></i></a></td>
                <td>
                    <div class="dropdown open">
                        <button class="btn btn-outline-white dropdown-toggle" type="button" id="dropdownMenu5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cập nhật
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group">
                                <?php foreach ($list_status as $l_i) : ?>
                                    <?php if ($l_i['status_id'] > $status_id) { ?>
                                        <li class="list-group-item"><a href="?btn_update_status&id=<?= $item['order_id'] ?>&status_id=<?= $l_i['status_id'] ?>"><?= $l_i['status_name'] ?></a> </li>
                                    <?php } ?>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
        <?php
        }
    }
}

if ($name_request == "date") {
    if ($date_time == 0) {
        $items = order_select_list();
    } else{
        if($date_time == 1)  {
            $start_date = date("Y/m/d H:i:s", mktime(date("H"), date("i"), date("s"), date("m"), date("d")-1, date("Y")));
        }elseif ($date_time == 2) {
            $start_date = date("Y/m/d H:i:s", mktime(date("H"), date("i"), date("s"), date("m"), date("d")-7, date("Y")));
        }elseif ($date_time == 3) {
            $start_date = date("Y/m/d H:i:s", mktime(date("H"), date("i"), date("s"), date("m")-1, date("d"), date("Y")));
        }
        $end_date = date("Y/m/d H:i:s");
        $items = order_select_by_date($start_date,$end_date);
    
    } 
    $list_status = status_select_all();


    if (count($items) > 0) {
        foreach ($items as $item) { ?>
            <tr>
                <td><?= $item['order_id'] ?></td>
                <td><?= $item['fullname'] ?></td>
                <td><?= number_format($item['total_money'], 0, ",", ".") ?> đ</td>
                <td><?= $item['created_at'] ?></td>
                <td><?= $item['status_name'] ?></td>
                <td><a href="?btn_info&id=<?= $item['order_id'] ?>"><i class="fas fa-external-link-alt"></i></a></td>
                <td>
                    <div class="dropdown open">
                        <button class="btn btn-outline-white dropdown-toggle" type="button" id="dropdownMenu5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cập nhật
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group">
                                <?php foreach ($list_status as $l_i) : ?>
                                    <?php if ($l_i['status_id'] > $item['status_id']) { ?>
                                        <li class="list-group-item"><a href="?btn_update_status&id=<?= $item['order_id'] ?>&status_id=<?= $l_i['status_id'] ?>"><?= $l_i['status_name'] ?></a> </li>
                                    <?php } ?>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
<?php
        }
    }
}

?>