<div class="content-main-cate">
    <div class="content-cate" >
        <h4>THÊM SLIDE</h4>
        <form action="index.php" method="post" enctype="multipart/form-data" class="form">
            <div class="form-group">
                <label for="">Slide</label>
                <input type="file" name="hinh" class="form-control" aria-describedby="helpId">
            </div>
            <button type="submit" name="btn_insert" class="btn btn-dark">Thêm </button>
        </form>
    </div>
    <div class="content-cate">
        <h4>DANH SÁCH SLIDE</h4>
        <form action="index.php" method="post">
            <table class="table">
                <?php
                if (strlen($MESSAGE)) {
                    echo "<p><i>$MESSAGE</i></p>";
                }
                ?>
                <thead class="thead">
                    <tr>
                        <th></th>
                        <th>Mã slide</th>
                        <th>Hình</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $slide) { ?>
                        <tr>
                            <td><input type="checkbox" class="check-one" name="check_id[]" id="" value="<?= $slide['slider_id'] ?>"></td>
                            <td><?= $slide['slider_id'] ?></td>
                            <td><img src="<?= CONTENT_URL . 'images/slides/' . $slide['hinh'] ?>" width="200rem" height="100rem" alt=""></td>
                            <td>
                                <?php if ($slide['slider_status'] == 0) { ?>
                                    <a href="?act=btn_hien&slider_id=<?= $slide['slider_id'] ?>">Ẩn</a>
                                <?php } else { ?>
                                    <a href="?act=btn_an&slider_id=<?= $slide['slider_id'] ?>">Hiện</a>
                                <?php } ?>
                            </td>
                            <td>
                                
                                <a href="index.php?btn_delete&slider_id=<?= $slide['slider_id'] ?>" class="btn btn-defaule">Xóa</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" style="text-align: center;">
                            <nav aria-label="Page navigation example ">
                                <ul class="pagination justify-content-center" style="margin-bottom: 0; ">
                                    <?php for ($i = 1; $i <= $_SESSION['total_slide']; $i++) { ?>
                                        <li class="page-item">
                                            <a class="page-link  <?= $_SESSION['page'] == $i ? "bg-dark text-white" : "text-dark" ?>" href="?page=<?= $i ?>" aria-label="Previous">
                                                <span aria-hidden="true"><?= $i ?></span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </nav>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="button" class="btn btn-dark" onclick="checkAll()">Chọn tất cả</button></td>
                        <td colspan="2"><button type="button" class="btn btn-dark" onclick="clearAll()">Bỏ chọn tất cả</button></td>
                        <td><button type="submit" name="btn_delete_all" class="btn btn-dark" id="deleteAll">Xóa các mục đã chọn</button></td>

                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</div>