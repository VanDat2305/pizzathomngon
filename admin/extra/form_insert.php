<h3 class="alert alert-secondary m-3">Thêm Topping</h3>
<form action="index.php" method="post" id="form_insert_extra" class="form m-3">
    <?php
    if (!isset($_GET['category_id'])) { ?>
        <div class="form-group">
            <label for="">Loại món <span style="color: red;">(*)</span></label>
            <select class="custom-select" name="category_id" name="category_id">
                <?php foreach ($items as $item) : ?>
                    <?php extract($item); ?>
                    <option value="<?= $category_id ?>"><?= $category_name ?></option>
                <?php endforeach ?>
            </select>
        </div>
    <?php
    } else { ?>
        <input type="hidden" name="category_id" value="<?= $category_id ?>">
    <?php
    } ?>
    <div class="form-group">
        <label for="">Tên Topping</label>
        <input type="text" name="extra_name" id="extra_name" class="form-control" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Giá</label>
        <input type="number" name="extra_price" id="extra_price" class="form-control" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <button type="submit" name="btn_insert" class="btn btn-dark">Thêm </button>
        <button type="reset" class="btn btn-dark">Nhập lại</button>
    </div>
    <div class="form-group">
        <a href="?" class="btn btn-outline-dark">Quay lại</a>
    </div>

</form>