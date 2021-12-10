
        <h4>SỬA bài viết</h4>
        <form action="index.php" id="form_edit_blog" method="post" class="form" enctype="multipart/form-data">
            <input type="hidden" name="blog_id" value="<?= $item['blog_id']?>">
            <div class="form-group">
                <label for="">Tiêu đề bài viết</label>
                <input type="text" name="blog_title" id="blog_title" id="" value="<?= $item['blog_title']?>" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Hình ảnh bài viết</label>
                <input type="hidden" name="image_old" value="<?= $item['blog_image'] ?>">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="blog_image" id="blog_image">
                    <label class="custom-file-label" for="blog_image">Chọn ảnh</label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Nội dung</label>
                <textarea class="ckeditor" name="blog_content" id="blog_content" cols="30" rows="10"><?php echo $item['blog_content'] ?></textarea>
            </div>
            <button type="submit" name="btn_edit" class="btn btn-dark">Cập nhật</button>
            <button type="reset" class="btn btn-dark">Nhập lại</button>
            <a href="index.php" class="btn btn-dark">Thêm mới</a>
        </form>