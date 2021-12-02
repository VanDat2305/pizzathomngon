<h3 class="alert alert-secondary">Thêm loại món</h3>
<form action="index.php" method="post" id="form_insert_category" class="form m-b-2">
    <div class="form-group">
        <label for="">Tên loại món</label>
        <input type="text" name="category_name" id='category_name' class="form-control" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <button type="submit" name="btn_insert" class="btn btn-dark">Thêm </button>
        <button type="reset" class="btn btn-dark">Nhập lại</button>
    </div>
</form>

<h3 class="alert alert-secondary">Danh sách loại món</h3>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body ">
            <table class="table table-hover text-center " id="dataTables-example" width="100%">
                <thead>
                    <?php if (strlen($MESSAGE)) {
                        echo "<tr>" . $MESSAGE . "</tr>";
                    } ?>
                    <tr>
                        <th>Mã loại</th>
                        <th> Tên Loại</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $category) : ?>
                        <tr>
                            <td><?= $category['category_id'] ?></td>
                            <td><?= $category['category_name'] ?></td>
                            <td>
                                <a href="index.php?btn_edit&category_id=<?= $category['category_id'] ?>" class="btn btn-defaule"><i class="far fa-edit"></i></a>
                                <a href="index.php?btn_delete&category_id=<?= $category['category_id'] ?>" class="btn btn-defaule" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ???')"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>`

            </table>
        </div>
    </div>
</div>