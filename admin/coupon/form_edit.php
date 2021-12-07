<h3 class="alert alert-secondary">Sửa mã giảm giá</h3>
<?php extract($item); ?>
<form action="?" method="post" enctype="multipart/form-data" id="form_edit_coupon">
    <div class="row m-2">
        <div class="col-6">
            <div class="form-group">
                <label for="">Tên mã giảm giá</label>
                <input type="text" class="form-control" id="coupon_name" value="<?= $coupon_name ?>" name="coupon_name">
            </div>
            <div class="form-group">
                <label for="">Mã Code</label>
                <input type="text" class="form-control" id="coupon_code" value="<?= $coupon_code ?>" name="coupon_code">
            </div>
            <div class="form-group">
                <label for="">Số lần nhập mã</label>
                <input type="number" class="form-control" id="coupon_count" value="<?= $coupon_count ?>" name="coupon_count">
            </div>
            <div class="form-group">
                <label for="">Tổng số lần nhập mã</label>
                <input type="number" class="form-control" value="<?= $coupon_count ?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Số lượt đã nhập mã</label>
                <input type="number" class="form-control" value="<?= $coupon_used ?>" readonly>
            </div>
            <div class="form-group">
                <input type="hidden" name="coupon_id" value="<?= $_GET['coupon_id'] ?>">
                <button type="submit" name="btn_edit" class="btn btn-success">Sửa</button>
                <button type="reset" class="btn btn-success">Nhập lại</button>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="">Trạng thái</label>
                <select class="form-control" id="coupon_status" name="coupon_status">
                    <option value="1" <?= $coupon_status == 1 ? "selected" : "" ?>>Hoạt động</option>
                    <option value="0" <?= $coupon_status == 0 ? "selected" : "" ?>>Dừng hoạt động</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Kiểu giảm giá</label>
                <select class="form-control" id="coupon_type" name="coupon_type">
                    <option value="0" <?= $coupon_type == 0 ? "selected" : "" ?>>Giảm theo tiền</option>
                    <option value="1" <?= $coupon_type == 1 ? "selected" : "" ?>>Giảm theo %</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Số tiền giảm</label>
                <input type="number" class="form-control" id="coupon_price" value="<?= $coupon_type == 0 ? number_format($coupon_price, 0, "", "") : number_format($coupon_price, 0, "", "") ?>" name="coupon_price">
            </div>
            <div class="form-group">
                <label for="">Ngày bắt đầu</label>
                <input type="datetime-local" class="form-control" id="start_date" value="<?= date('Y-m-d\TH:i', strtotime($start_date)) ?>" name="start_date">
            </div>
            <div class="form-group">
                <label for="">Ngày kết thúc</label>
                <input type="datetime-local" class="form-control" id="end_date" value="<?= date('Y-m-d\TH:i', strtotime($end_date)) ?>" name="end_date">
            </div>
        </div>
    </div>
</form>