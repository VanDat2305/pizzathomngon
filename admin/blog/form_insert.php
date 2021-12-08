<h3 class="alert alert-secondary">Thêm bài viết mới</h3>
<div class="row">
    <div class="col ml-4 mr-4">
        <form action="index.php" id="form_insert_blog" method="post" enctype="multipart/form-data" class="form">
            <div class="form-group">
                <label for="">Tiêu đề bài viết</label>
                <input type="text" name="blog_title" id="blog_title" class="form-control" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Hình ảnh bài viết</label>
                <input type="file" name="blog_image" id="blog_image" class="form-control" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Nội dung</label>
                <textarea class="form-control ckeditor" name="blog_content" id="blog_content" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="btn_insert" class="btn btn-dark">Thêm </button>
            </div>
        </form>
    </div>
</div>