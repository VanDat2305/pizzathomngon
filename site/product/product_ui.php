<div class="page-content uk-margin-large-top">
    <div class="uk-container">
        <div class="uk-grid uk-grid-medium" data-uk-grid>
            <div class="uk-width-3-4@l">
                <div data-uk-filter="target: .js-filter">
                    <div class="catalog-filter-row">
                        <ul class="uk-subnav">
                            <!-- Lọc theo danh mục -->
                            <li class="uk-active" data-uk-filter-control=""><a href="#">Tất cả</a></li>
                            <?php foreach ($categories as $c) { ?>
                                <li data-uk-filter-control="[data-tags='<?= $c['category_name'] ?>']"><a href="#"><?= $c['category_name'] ?></a></li>
                            <?php    } ?>

                        </ul><select class="uk-select" name="orderby" aria-label="Shop order">
                            <option value="menu_order" selected>Sắp xếp theo</option>
                            <option value="popularity">Phổ biến</option>
                            <option value="rating">Theo đánh giá</option>
                            <option value="date">Mới nhất</option>
                            <option value="price">Giá: Thấp đến cao</option>
                            <option value="price-desc">Giá: Cao đến thấp</option>
                        </select>
                    </div>
                    <ul class="js-filter uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l" data-uk-grid>
                        <?php foreach ($categories as $c) { ?>
                            <?php foreach ($products as $p) { ?>
                                <?php if ($c['category_id'] == $p['category_id']) { ?>
                                    <li data-tags="<?= $c['category_name'] ?>">
                                        <div class="product-item">
                                            <div class="product-item__box">
                                                <div class="product-item__intro">
                                                    <div class="product-item__not-active">
                                                        <div class="product-item__media">
                                                            <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                <a href="<?= SITE_URL ?>product/quickview.php?product_id=<?= $p['product_id'] ?>">
                                                                    <img src="<?= CONTENT_URL ?>img/products/<?= $p['product_image'] ?>" alt="<?= $p['product_image'] ?>" />
                                                                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                    </div>
                                                                    <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                </a>
                                                            </div>
                                                            <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                            <div class="product-item__type spicy"></div>
                                                            <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right">
                                                                <i class="fas fa-info-circle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__title">
                                                            <a href="<?= SITE_URL ?>product/product_detail.php?product_id=<?= $p['product_id'] ?>"><?= $p['product_name'] ?></a>
                                                        </div>
                                                        <div class="product-item__desc"><?= $p['description'] ?></div>
                                                        <div class="product-item__select">
                                                            <div class="select-box select-box--size">
                                                                <ul>
                                                                    <?php foreach ($options as $o) { ?>
                                                                        <?php $index = 1 ?>

                                                                        <?php if ($o['product_id'] == $p['product_id']) { ?>
                                                                            <li>
                                                                                <label>
                                                                                    <input type="radio" <?= $index == 1 ? 'checked' : '' ?> name="<?= $p['product_name'] ?>" />
                                                                                    <span><?= $o['option_name'] ?></span>
                                                                                </label>
                                                                            </li>
                                                                        <?php    } ?>
                                                                        <?php $index++;  ?>

                                                                    <?php    } ?>


                                                                </ul>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__active">
                                                        <div class="title">Thêm topping</div>
                                                        <?php foreach ($extras as $e) { ?>
                                                            <?php if ($e['category_id'] == $p['category_id']) { ?>
                                                                <div class="row">
                                                                    <label>
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                        <span class="uk-padding-small"><?= $e['extra_name'] ?> </span>
                                                                        <span class="uk-padding-small"><?= number_format($e['extra_price']) ?> đ</span>
                                                                    </label>
                                                                </div>
                                                            <?php    } ?>

                                                        <?php    } ?>

                                                    </div>
                                                </div>
                                                <div class="product-item__toggle"> <button type="button">
                                                        <span>Thêm topping</span></button></div>
                                                <div class="product-item__info">
                                                    <?php foreach ($options as $o) { ?>
                                                        <?php if ($o['product_id'] == $p['product_id']) { ?>
                                                            <div class="product-item__price">
                                                                <span>Giá: </span><span class="value"><?= number_format($o['option_price'], 0, ",", ".") ?>đ</span>
                                                            </div>
                                                        <?php    } ?>
                                                    <?php    } ?>
                                                    <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php    } ?>
                            <?php    } ?>
                        <?php    } ?>
                    </ul>
                </div>
                <!-- Phân trang -->
                <ul class="uk-pagination uk-flex-center" data-uk-margin>
                    <li class="uk-active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="uk-disabled"><span>...</span></li>
                    <li><a href="#"><span data-uk-pagination-next></span></a></li>
                </ul>
            </div>
            <div class="uk-width-1-4@l uk-flex-first@l">
                <aside>
                    <div class="sidebar">
                        <div class="widjet widjet-filter">
                            <ul data-uk-accordion="multiple: true">
                                <li><a class="uk-accordion-title" href="#">Kích cỡ</a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list">
                                            <li><label><input class="uk-radio" type="radio" name="size" checked><span>S</span></label>
                                            </li>
                                            <li><label><input class="uk-radio" type="radio" name="size"><span>M</span></label></li>
                                            <li><label><input class="uk-radio" type="radio" name="size"><span>L</span></label></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="uk-accordion-title" href="#">PHÔ MAI</a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list">
                                            <li><label><input class="uk-checkbox" type="checkbox" checked><span>phô mai
                                                        Mozzarella</span></label></li>
                                            <li><label><input class="uk-checkbox" type="checkbox"><span>Pho
                                                        mát dê</span></label></li>
                                            <li><label><input class="uk-checkbox" type="checkbox"><span>Phô
                                                        mai mascarpone
                                                    </span></label></li>
                                            <li><label><input class="uk-checkbox" type="checkbox" checked><span>Phô mai
                                                        Feta</span></label></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="uk-accordion-title" href="#">Thịt</a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list">
                                            <li><label><input class="uk-radio" type="radio" name="meat" checked><span>Small</span></label></li>
                                            <li><label><input class="uk-radio" type="radio" name="meat"><span>S</span></label></li>
                                            <li><label><input class="uk-radio" type="radio" name="meat"><span>M</span></label></li>
                                            <li><label><input class="uk-radio" type="radio" name="meat"><span>L</span></label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="uk-accordion-title" href="#">Rau</a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list">
                                            <li><label><input class="uk-checkbox" type="checkbox"><span>Rau
                                                        cải</span></label></li>
                                            <li><label><input class="uk-checkbox" type="checkbox"><span>Rau
                                                        abc</span></label></li>
                                            <li><label><input class="uk-checkbox" type="checkbox"><span>Rau
                                                        abc</span></label></li>
                                            <li><label><input class="uk-checkbox" type="checkbox"><span>Rau
                                                        abc</span></label></li>
                                            <li><label><input class="uk-checkbox" type="checkbox"><span>Rau
                                                        abc</span></label></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="widjet widjet-recommend uk-margin-large-top">
                            <div class="widjet__title">Top 10 lượt xem</div>
                            <ul class="recommend-list">
                                <?php foreach ($top10_product as $top10) { ?>
                                    <li>
                                        <div class="recommend-list-item">
                                            <img class="recommend-list-item__img" src="<?= CONTENT_URL ?>img/products/<?= $top10['product_image'] ?>" alt="<?= $top10['product_image'] ?>">
                                            <div class="recommend-list-item__desc">
                                                <div class="recommend-list-item__title"><a href="page-product.html"><?= $top10['product_name'] ?></a>
                                                </div>
                                                <div class="recommend-list-item__intro"><?= $top10['description'] ?>
                                                </div>
                                                <!-- <div class="recommend-list-item__price">
                                                        <span>Giá:</span><span class="value">149.000đ</span>
                                                    </div> -->
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>

                            </ul>
                            <div class="page-header__top">
                            </div>
                        </div>
                </aside>
            </div>
        </div>
    </div>
</div>