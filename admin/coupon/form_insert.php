<h3 class="alert alert-secondary">Thêm mã giảm giá</h3>
<form action="?" method="post" enctype="multipart/form-data" id="form_insert_coupon">
    <div class="row m-2">
        <div class="col-6">
            <div class="form-group">
                <label for="">Tên mã giảm giá</label>
                <input type="text" class="form-control" id="coupon_name" name="coupon_name">
            </div>
            <div class="form-group">
                <label for="">Mã Code</label>
                <input type="text" class="form-control" id="coupon_code" name="coupon_code">
            </div>
            <div class="row ">
                <div class="form-group col-4">
                    <label for="">Số lần nhập mã</label>
                    <input type="number" class="form-control" id="coupon_count" name="coupon_count">
                </div>
                <div class="form-group col-8">
                    <label for="">Giới hạn giá trị đơn hàng</label>
                    <input type="number" class="form-control" id="coupon_limit" name="coupon_limit">
                </div>
            </div>
            <div class="form-group">
                <label for="">Trạng thái</label>
                <select class="form-control" id="coupon_status" name="coupon_status">
                    <option value="1">Hoạt động</option>
                    <option value="0">Dừng hoạt động</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="btn_insert" class="btn btn-success">Thêm</button>
                <button type="reset" class="btn btn-success">Nhập lại</button>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="">Kiểu giảm giá</label>
                <select class="form-control" id="coupon_type" name="coupon_type">
                    <option value="0">Giảm theo tiền</option>
                    <option value="1">Giảm theo %</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Số tiền giảm</label>
                <input type="number" class="form-control" id="coupon_price" name="coupon_price">
            </div>
            <div class="form-group">
                <label for="">Ngày bắt đầu</label>
                <input type="datetime-local" class="form-control" id="start_date" name="start_date">
            </div>
            <div class="form-group">
                <label for="">Ngày kết thúc</label>
                <input type="datetime-local" class="form-control" id="end_date" name="end_date">
            </div>
        </div>
    </div>
</form>