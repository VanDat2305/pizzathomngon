<div class="section-special-deals">
    <div class="uk-section uk-container">
        <div class="section-title section-title--center wave french-fries">
            <h3 class="uk-h3">Sản phẩm đang khuyến mãi</h3>
        </div>
        <div class="section-content">
            <ul class="uk-subnav uk-flex-center" data-uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium; swiping: false; active: 1">


                <?php foreach ($categories as $c) { ?>

                    <li><a href="#"><?= $c['category_name'] ?></a></li>

                <?php    } ?>
            </ul>
            <ul class="uk-switcher">
                <!-- Tính class option_price theo cái này -->
                <?php $stt_option1 = 0 ?>
                <?php $stt_option2 = 0 ?>
                <?php $stt_product = 0 ?>
                <?php foreach ($categories as $c) { ?>

                    <li>
                        <div data-uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container uk-light">
                                    <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">

                                        <?php foreach ($products as $p) { ?>

                                            <?php if ($c['category_id'] == $p['category_id']) { ?>

                                                <!-- Đặt index để tự chọn option đầu tiên -->
                                                <?php $index = 1 ?>
                                                <?php $index2 = 1 ?>

                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">

                                                                <?php if ($p['discount'] > 0) { ?>
                                                                    <div class="product-item__discount"><?= $p['discount'] ?> %</div>
                                                                <?php } ?>

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
                                                                        <div class="product-item__whish">
                                                                            <i class="fas fa-heart"></i>
                                                                            <input type="hidden" class="wish_list_product_id" value="<?= $p['product_id'] ?>">
                                                                        </div>
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