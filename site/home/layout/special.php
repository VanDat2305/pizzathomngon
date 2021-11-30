<div class="section-special-deals">
    <div class="uk-section uk-container">
        <div class="section-title section-title--center wave french-fries">
            <h3 class="uk-h3">Sản phẩm yêu thích</h3>
        </div>
        <div class="section-content">
            <ul class="uk-subnav uk-flex-center" data-uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium; swiping: false; active: 1">


                <?php foreach ($categories as $c) { ?>

                    <li><a href="#"><?= $c['category_name'] ?></a></li>

                <?php    } ?>
            </ul>
            <ul class="uk-switcher">
                <!-- Tính class option_price theo cái này -->
                <?php $number = 0 ?>
                <?php $stt = 0 ?>
                <?php foreach ($categories as $c) { ?>

                    <li>
                        <div data-uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container uk-light">
                                    <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">

                                        <?php foreach ($products as $p) { ?>

                                            <?php if ($c['category_id'] == $p['category_id']) { ?>

                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                            <a href="<?= SITE_URL ?>product/quickview.php?product_id=<?= $p['product_id'] ?>"><img src="<?= CONTENT_URL ?>img/products/<?= $p['product_image'] ?>" alt="<?= $p['product_image'] ?>" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                                </div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right">
                                                                            <i class="fas fa-info-circle"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="<?= SITE_URL ?>product/product_detail.php?product_id=<?= $p['product_id'] ?>"><?= $p['product_name'] ?></a></div>
                                                                    <div class="product-item__desc"><?= $p['description'] ?></div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--size">
                                                                            <ul>

                                                                                <?php foreach ($options as $o) { ?>
                                                                                    <?php $index = 1 ?>
                                                                                    <?php if ($o['product_id'] == $p['product_id']) { ?>
                                                                                        <li>
                                                                                            <label>
                                                                                                <?php
                                                                                                $new_price = $o['option_price'] - ($o['option_price'] * ($p['discount'] / 100));
                                                                                                ?>
                                                                                                <input type="radio" <?= $index == 1 ? 'checked' : '' ?> name="<?= $p['product_name'] ?>" value="<?= $new_price ?>" class="option_price option_price<?= $number++ ?> product_price<?= $stt ?>" />
                                                                                                <span><?= $o['option_name'] ?> | <?= $p['discount'] ?></span>
                                                                                                <input type="hidden" name="" class="discount discount<?= $stt ?>" value="<?= $p['discount'] ?>">
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
                                                                <div class="product-item__price">
                                                                    <!-- Nêu sản phẩm có giảm giá thì mới hiện -->
                                                                    <div>
                                                                        <span>Giá: </span><del class="old_value<?= $stt ?>"></del>
                                                                    </div>
                                                                    <!-- Tính class price theo cái này -->
                                                                    <div>
                                                                        <span>Giá: </span><span class="value value<?= $stt++ ?>"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                            <?php    } ?>



                                        <?php    } ?>

                                    </ul>
                                </div>
                                <div class="uk-visible@l">
                                    <a class="uk-position-top-left-out" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
                                    <a class="uk-position-top-right-out" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
                                </div>
                                <div class="uk-hidden@l">
                                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                <?php    } ?>



            </ul>
        </div>
    </div>
</div>