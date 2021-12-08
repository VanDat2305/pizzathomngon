<h3 class="alert alert-secondary">Danh sách bài viết</h3>
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
                        <th>Tiêu đề bài viết</th>
                        <th>Ảnh</th>
                        <th>Chi tiết</th>
                        <th>Thời gian đăng</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                        <th><a href="?form_insert" class="btn btn-dark">Thêm mới</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $blog) { ?>
                        <tr>
                            <td><?= $blog['blog_id'] ?></td>
                            <td><?= $blog['blog_title'] ?></td>
                            <td><img src="<?= CONTENT_URL . 'img/blog/' . $blog['blog_image'] ?>" width="200rem" height="100rem" alt=""></td>
                            <td><a href="index.php?btn_info&blog_id=<?= $blog['blog_id'] ?>" class="btn btn-defaule"><i class="fas fa-external-link-alt"></i></a></td>
                            <td><?= $blog['create_at'] ?></td>
                            <td>
                            <?php if ($blog['status'] == 0) { ?>
                                    <a href="?act=btn_hien&blog_id=<?= $blog['blog_id'] ?>" class="btn btn-danger">Ẩn</a>
                                <?php } else { ?>
                                    <a href="?act=btn_an&blog_id=<?= $blog['blog_id'] ?>" class="btn btn-success">Hiện</a>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="index.php?form_edit&blog_id=<?= $blog['blog_id'] ?>" class="btn btn-defaule"><i class="far fa-edit"></i></a>
                                <a href="index.php?btn_delete&blog_id=<?= $blog['blog_id'] ?>" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ???')" class="btn btn-defaule"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>`
            </table>
        </div>
    </div>
</div>
