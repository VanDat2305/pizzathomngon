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

                        </ul>
                        <select class="uk-select" id="filter_product_select" name="orderby" aria-label="Shop order">
                            <option value="menu_order" selected>Sắp xếp theo</option>
                            <option value="filter_by_date">Mới nhất</option>
                            <option value="filter_by_price">Giá: Thấp => cao</option>
                            <option value="filter_by_price_desc">Giá: Cao => thấp</option>
                        </select>
                    </div>
                    <div id="ajax-filter">
                        <ul class="js-filter uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l" data-uk-grid>
                            <?php $stt_option1 = 0 ?>
                            <?php $stt_option2 = 0 ?>
                            <?php $stt_product = 0 ?>
                            <?php foreach ($categories as $c) { ?>
                                <?php foreach ($products as $p) { ?>
                                    <?php if ($c['category_id'] == $p['category_id']) { ?>

                                        <!-- Đặt index để tự chọn option đầu tiên -->
                                        <?php $index = 1 ?>
                                        <?php $index2 = 1 ?>

                                        <li data-tags="<?= $c['category_name'] ?>">
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">

                                                        <?php if ($p['discount'] > 0) { ?>
                                                            <div class="product-item__discount"><?= $p['discount'] ?> %</div>
                                                        <?php } ?>
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
                                                                            <?php if ($o['product_id'] == $p['product_id']) { ?>

                                                                                <li>
                                                                                    <label>
                                                                                        <?php
                                                                                        $new_price = $o['option_price'] - ($o['option_price'] * ($p['discount'] / 100));
                                                                                        ?>
                                                                                        <input type="radio" <?= $index == 1 ? 'checked' : '' ?> name="<?= $p['product_name'] ?>" value="<?= $new_price ?>" class="option_price option_price<?= $stt_option1++ ?> product_price<?= $stt_product ?>" />
                                                                                        <span><?= $o['option_name'] ?></span>
                                                                                    </label>
                                                                                </li>
                                                                                <?php $index++;  ?>
                                                                            <?php    } ?>
                                                                        <?php    } ?>



                                                                        <input type="hidden" name="" class="discount discount<?= $stt_product ?>" value="<?= $p['discount'] ?>">
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
                                                                            <input class="uk-checkbox extra_id" type="checkbox" name="topping_id[]" value="<?= $e['extra_id'] ?>">
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
                                                        <div class="product-item__price">
                                                            <!-- Nêu sản phẩm có giảm giá thì mới hiện -->
                                                            <?php if ($p['discount'] > 0) { ?>
                                                                <div>
                                                                    <span></span><del class="old_value<?= $stt_product ?>"></del>
                                                                </div>
                                                            <?php } ?>
                                                            <!-- Tính class price theo cái này -->
                                                            <div>
                                                                <span>Giá: </span><span class="value value<?= $stt_product ?>"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__addcart">
                                                            <?php foreach ($options as $o) { ?>

                                                                <?php if ($o['product_id'] == $p['product_id']) { ?>


                                                                    <input class="option_ajax option_stt<?= $stt_option2++ ?> product_stt<?= $stt_product ?>" type="radio" <?= $index2 == 1 ? 'checked' : '' ?> name="option_by_pro<?= $stt_product ?>" value="<?= $o['option_id'] ?>">



                                                                    <?php $index2++;  ?>
                                                                <?php    } ?>
                                                            <?php    } ?>
                                                            <button class="uk-button uk-button-default add-to-cart" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></button>
                                                            <?php $stt_product++ ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php    } ?>
                                <?php    } ?>
                            <?php    } ?>
                        </ul>
                    </div>
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
                            <!-- Lọc theo input range -->
                            <h4>Lọc theo giá</h4>
                            <div class="widjet-filter-price">
                                Từ: <span id="from-price"><?= number_format($min_price, 0, ',',',') ?> đ</span> - <span id="to-price"><?= number_format($max_price, 0, ',',',') ?> đ</span>
                            </div>
                            <div class="middle">
                                <div class="multi-range-slider">
                                    <input type="range" id="input-left" min="<?= $min_price ?>" max="<?= $max_price ?>" value="<?= $min_price ?>">
                                    <input type="range" id="input-right" min="<?= $min_price ?>" max="<?= $max_price ?>" value="<?= $max_price ?>">

                                    <div class="slider">
                                        <div class="track"></div>
                                        <div class="range"></div>
                                        <div class="thumb left"></div>
                                        <div class="thumb right"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="widjet widjet-recommend">
                            <div class="widjet__title">Top 10 lượt xem</div>
                            <ul class="recommend-list">
                                <?php foreach ($top10_product as $top10) { ?>
                                    <li>
                                        <div class="recommend-list-item">
                                            <img class="recommend-list-item__img" src="<?= CONTENT_URL ?>img/products/<?= $top10['product_image'] ?>" alt="<?= $top10['product_image'] ?>">
                                            <div class="recommend-list-item__desc">
                                                <div class="recommend-list-item__title"><a href="<?= SITE_URL ?>product/product_detail.php?product_id=<?= $top10['product_id'] ?>"><?= $top10['product_name'] ?></a>
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