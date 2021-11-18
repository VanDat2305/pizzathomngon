
<div class="content-main-cate">
    <div class="content-cate">
        <h4>THÊM LOẠI HÀNG</h4>
        <form action="index.php" method="post" id="add_category" class="form">
            <div class="form-group">
                <label for="">Tên loại hàng</label>
                <input type="text" name="cate_name"  class="form-control" aria-describedby="helpId">
            </div>
            <button type="submit" name="btn_insert" class="btn btn-dark">Thêm </button>
            <button type="reset" class="btn btn-dark">Nhập lại</button>
        </form>
    </div>
    <div class="content-cate">
        <h4>DANH SÁCH LOẠI HÀNG</h4>
        <form action="index.php"  method="post">
            <table class="table">
                <?php
                if (strlen($MESSAGE)) {
                    echo "<p><i>$MESSAGE</i></p>";
                }
                ?>

                <thead class="thead">

                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th> Tên Loại</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $category) : ?>
                        <tr>
                            <td><input type="checkbox" class="check-one" name="check_id[]" id="" value="<?= $category['cate_id'] ?>"></td>
                            <td><?= $category['cate_id'] ?></td>
                            <td><?= $category['cate_name'] ?></td>
                            <td>
                                <a href="index.php?btn_edit&cate_id=<?= $category['cate_id'] ?>" class="btn btn-defaule">Sửa</a>
                                <a href="index.php?btn_delete&cate_id=<?= $category['cate_id'] ?>" class="btn btn-defaule">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" style="text-align: center;">
                            <nav aria-label="Page navigation example ">
                                <ul class="pagination justify-content-center" style="margin-bottom: 0; ">
                                <?php for ($i=1; $i <= $_SESSION['total_cate']; $i++) { ?>
                                    <li class="page-item">
                                        <a class="page-link  <?= $_SESSION['page'] == $i ? "bg-dark text-white":"text-dark" ?>" href="?page=<?=$i?>" aria-label="Previous">
                                            <span aria-hidden="true"><?= $i?></span>
                                        </a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </nav>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="button" class="btn btn-dark" onclick="checkAll()">Chọn tất cả</button></td>
                        <td><button type="button" class="btn btn-dark" onclick="clearAll()">Bỏ chọn tất cả</button></td>
                        <td><button type="submit" name="btn_delete_all" class="btn btn-dark" id="deleteAll">Xóa các mục đã chọn</button></td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</div>