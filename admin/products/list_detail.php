<h3 class="alert alert-secondary">Chi tiết món ăn</h3>
<div class="row bg-white ml-2">
    <?php extract($items);
    $index = 1; ?>
    <div class="col-lg-4  ">
        <img src="<?= CONTENT_URL . 'img/products/' . $product_image ?>" width="100px" alt="">
        <button type="button" class="btn btn-outline-dark form-control" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Xem thêm
        </button>
    </div>
    <div class="col-lg-8 ">
        <div class="table-responsive">
            <table class="table table-hover text-left " width="100%">
                <tbody>
                    <tr>
                        <th class="col-5">ID:</th>
                        <td><?= $product_id ?></td>
                    </tr>
                    <tr>
                        <th>Tên loại:</th>
                        <td><?= $category_name ?></td>
                    </tr>
                    <tr>
                        <th>Tên món:</th>
                        <td><?= $product_name ?></td>
                    </tr>
                    <tr>
                        <th>Giảm giá:</th>
                        <td><?= $discount ?> %</td>
                    </tr>
                    <tr>
                        <th>Số lượt xem:</th>
                        <td><?= $count_view ?></td>
                    </tr>
                    <tr>
                        <th>Ngày tạo:</th>
                        <td><?= $created_at ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Mô tả:</strong> <?= $description ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row bg-white ml-2">
    <div class="col-md-12 col-lg-12">
        <table class="table table-hover text-center " width="100%">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên option</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($item_option as $item) : ?>
                    <?php extract($item); ?>
                    <tr>
                        <td><?= $index++ ?></td>
                        <td><?= $option_name ?></td>
                        <td><?= number_format($option_price, 0, ',', '.') ?>đ</td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <a href="?form_edit&id=<?= $_GET['id'] ?>" class="btn btn-outline-dark">Sửa</a>
                        <a href="?" class="btn btn-outline-dark">Quay lại</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<hr>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lưới ảnh</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php foreach ($gallery_item as $item) : ?>
                    <?php extract($item); ?>
                    <img src="<?= CONTENT_URL . 'img/products/' . $gallery_image_name ?>" alt="" width="30%" height="50%">
                <?php endforeach ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- <div class="row bg-white">
    <div class="col-md-12 col-lg-12">
        <table class="table table-hover text-center " width="100%">
            <thead>
                <tr>
                    <th class="col-3">STT</th>
                    <th>Ảnh </th>
                
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gallery_item as $item) : ?>
                    <?php extract($item); ?>
                    <tr>
                        <td><?= $index_gallery++ ?></td>
                        <td><img src="<?= CONTENT_URL . 'img/products/' . $gallery_image_name ?>" alt="" width="100px" ></td>
                        
                    </tr>
                <?php endforeach ?>
            </tbody>
           
        </table>
    </div>
</div> -->