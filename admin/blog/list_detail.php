<h3 class="alert alert-secondary">Chi tiết thành viên</h3>
<div class="row">
    <?php extract($item) ?>
    <div class="col-10 p-8">
        <div class="table-responsive">
            <table class="table table-hover text-left " width="100%">
                <tbody>
                    <tr>
                        <th class="col-4">Tiêu đề bài viết:</th>
                        <td><?= $blog_title ?></td>
                    </tr>
                    <tr>
                        <th>Ảnh</th>
                        <td><img src="<?= CONTENT_URL.'img/blog/'. $blog_image?>" width="50%" alt=""></td>
                    </tr>
                    <tr>
                        <th>Nội dung bài viết</th>
                        <td><?= $blog_content ?></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="?form_edit&blog_id=<?= $blog_id?>" class="btn btn-outline-dark">Sửa</a>
                            <a href="?" class="btn btn-outline-dark">Quay lại</a>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>