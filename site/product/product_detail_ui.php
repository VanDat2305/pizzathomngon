<div class="uk-margin-large-top uk-container">
    <div class="product-full-card">
        <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
            <div>
                <div class="product-full-card__gallery">
                    <div data-uk-slideshow="ratio: 1:1; animation: slide">
                        <div class="product-full-card__gallery-box">
                            <ul class="uk-slideshow-items uk-child-width-1-1">
                                <!-- Product -->
                                <li class="uk-flex uk-flex-center uk-flex-middle"><img src="<?= CONTENT_URL ?>img/products/<?= $product['product_image'] ?>" alt="<?= $product['product_image'] ?>">
                                </li>
                                <!-- gallery -->

                                <?php foreach ($gallery_image as $g_i) { ?>
                                    <li class="uk-flex uk-flex-center uk-flex-middle"><img src="<?= CONTENT_URL ?>img/products/<?= $g_i['gallery_image_name'] ?>" alt="<?= $g_i['gallery_image_name'] ?>">
                                    </li>
                                <?php } ?>
                            </ul>
                            <div class="product-full-card__whish"><i class="fas fa-heart"></i></div>
                            <div class="product-full-card__type spicy"></div>
                            <div class="product-full-card__tooltip" data-uk-tooltip="title: pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                        </div>
                        <div class="uk-margin-top" data-uk-slider="finite: true">
                            <ul class="uk-thumbnav uk-slider-items uk-grid uk-grid-small uk-child-width-1-3 uk-child-width-1-4@l">
                                <!-- Product -->
                                <li data-uk-slideshow-item="<?= $index = 0 ?>">
                                    <a href="#"><img class="uk-product_detail_img" src="<?= CONTENT_URL ?>img/products/<?= $product['product_image'] ?>" alt="<?= $product['product_image'] ?>"></a>
                                </li>
                                <!-- gallery -->
                                <?php foreach ($gallery_image as $g_i) { ?>

                                    <li data-uk-slideshow-item="<?= ++$index ?>">
                                        <a href="#"><img class="uk-product_detail_img" src="<?= CONTENT_URL ?>img/products/<?= $g_i['gallery_image_name'] ?>" alt="<?= $g_i['gallery_image_name'] ?>"></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-full-card__content">
                    <div class="product-full-card__not-active">
                        <h3 class="product-full-card__title"><?= $product['product_name'] ?></h3>
                        <div class="product-full-card__desc"><?= $product['description'] ?></div>
                        <div class="product-full-card__select">
                            <div class="select-box select-box--size">
                                <ul>
                                    <?php $index = 1;
                                    $stt_option = 0 ?>

                                    <?php foreach ($options as $o) { ?>
                                        <li>
                                            <label>
                                                <?php
                                                $new_price = $o['option_price'] - ($o['option_price'] * ($product['discount'] / 100));
                                                ?>
                                                <input <?= $index == 1 ? 'checked' : '' ?> type="radio" name="size" value="<?= $new_price ?>" class="product_option_price option_detail_price<?= $stt_option ?>">
                                                <span><?= $o['option_name'] ?></span>
                                            </label>
                                        </li>
                                        <?php $index++;
                                        $stt_option++; ?>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-full-card__active">
                        <div class="title">Thêm topping</div>
                        <div class="product-full-card__rows">

                            <?php foreach ($extras as $e) { ?>

                                <div class="row">
                                    <label>
                                        <input class="uk-checkbox extra_id" type="checkbox" value="<?= $e['extra_id'] ?>">
                                        <span class="uk-padding-small"><?= $e['extra_name'] ?> </span>
                                        <span class="uk-padding-small"><?= number_format($e['extra_price']) ?> đ</span>
                                    </label>
                                </div>

                            <?php    } ?>


                        </div>
                    </div>
                </div>
                <div class="product-full-card__toggle"> <button type="button"> <span>Thêm
                            topping</span></button></div>
                <div class="product-full-card__info">

                    <!-- Format giá bằng jquery trong main.js -->
                    <div class="product-item__price">
                        <div class="product-full-card__price">

                            <span>Giá: </span>
                            <?php if ($product['discount'] > 0) { ?>
                                <span></span><del class="product_detail_old_value">123</del>
                            <?php } ?>
                            <span class="value product_detail_new_value"></span>

                        </div>
                        <input type="hidden" id="discount_value" value="<?= $product['discount'] ?>">
                    </div>

                    <div class="product-full-card__btns">
                        <span class="counter">
                            <span class="minus">-</span>
                            <input type="text" class="detail_quantity" value="1" />
                            <span class="plus">+</span></span>
                        <?php $index2 = 1;
                        $stt_option2 = 0; ?>
                        <?php foreach ($options as $o) { ?>

                            <input type="radio" <?= $index2 == 1 ? 'checked' : '' ?> class="option_ajax option_detail option_detail_id<?= $stt_option2 ?>" name="option_by_pro" value="<?= $o['option_id'] ?>">

                            <?php $index2++;  ?>
                            <?php $stt_option2++;  ?>

                        <?php    } ?>
                        <button class="uk-button" id="add-to-cart_detail">Thêm vào giỏ hàng
                            <span data-uk-icon="cart"> </span>
                        </button>
                    </div>
                </div>
                <div class="product-full-card__category"><span>Danh mục: </span><a href="#!"><?= $product['category_name'] ?></a>
                </div>
                <div class="product-full-card__share"><span>Chia sẻ:</span>
                    <ul>
                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Mô tả & đánh giá -->
        <div class="product-full-card__tabs">
            <ul class="uk-subnav" data-uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                <li><a href="#">Mô tả</a></li>
                <li><a href="#">Đánh giá (2)</a></li>
            </ul>
            <ul class="uk-switcher uk-margin">
                <li>
                    <p><?= $product['description'] ?></p>

                </li>

                <li>
                    <div class="section-title">
                        <div class="uk-h2">Đánh giá</div>
                    </div>
                    <ul class="uk-comment-list">
                        <li>
                            <article class="uk-comment">
                                <header class="uk-comment-header">
                                    <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                                        <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./../content/img/blog/img-reviews-1.png" alt></div>
                                        <div class="uk-width-expand@s">
                                            <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                                <h4 class="uk-comment-title uk-margin-remove">Hiếu Minh
                                                </h4><span class="uk-text-meta uk-margin-small-left">20
                                                    Tháng 11 2021</span>
                                            </div>
                                            <div class="uk-comment-body">
                                                <p>Hàng đểu ko nên mua</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Trả
                                                        lời</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </header>
                            </article>

                        </li>

                    </ul>
                    <div class="block-form uk-margin-medium-top">
                        <div class="section-title">
                            <div class="uk-h2">Đánh giá món ăn</div>
                        </div>
                        <div class="section-content">
                            <form action="#!">
                                <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                                    <div class="uk-width-1-1">
                                        <div class="rating">
                                            <input type="radio" name="rating" value="5" id="5" checked>
                                            <label for="5">☆</label>
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label>
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label>
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label>
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label>
                                        </div>
                                        <textarea class="uk-textarea uk-form-large" placeholder="Đánh giá *"></textarea>
                                    </div>
                                    <div>
                                        <button class="uk-button uk-button-large" type="submit">Đăng
                                            bình luận
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</div>
<!-- Hàng cùng loại -->
<div class="section-recommend-products">
    <div class="uk-section uk-container">
        <div class="section-title section-title--center wave french-fries">
            <h3 class="uk-h3">Hàng cùng loại</h3>
        </div>
        <div class="section-content">
            <div class="uk-margin-medium-top" data-uk-slider>
                <div class="uk-position-relative">
                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-grid uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@xl uk-child-width-1-3@xl" data-uk-height-match=".product-card__intro">
                            <?php $stt_option_same = 0 ?>
                            <?php $stt_product_same = 0 ?>
                            <?php foreach ($product_same as $p_s) { ?>

                                <li>
                                    <div class="product-item">
                                        <div class="product-item__box">
                                            <div class="product-item__intro">
                                                <?php if ($p_s['discount'] > 0) { ?>
                                                    <div class="product-item__discount"><?= $p_s['discount'] ?> %</div>
                                                <?php } ?>
                                                <div class="product-item__not-active">
                                                    <div class="product-item__media">
                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                            <a href="<?= SITE_URL ?>product/quickview.php?product_id=<?= $p_s['product_id'] ?>"><img src="<?= CONTENT_URL ?>img/products/<?= $p_s['product_image'] ?>" alt="<?= $p_s['product_image'] ?>" />
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
                                                    <div class="product-item__title"><a href="<?= SITE_URL ?>product/product_detail.php?product_id=<?= $p_s['product_id'] ?>"><?= $p_s['product_name'] ?></a></div>
                                                    <div class="product-item__desc"><?= $p_s['description'] ?></div>
                                                    <div class="product-item__select">
                                                        <div class="select-box select-box--size">
                                                            <ul>
                                                                <?php foreach ($option_product_same as $o_p_s) { ?>
                                                                    <?php $index = 1 ?>

                                                                    <?php if ($o_p_s['product_id'] == $p_s['product_id']) { ?>
                                                                        <li>
                                                                            <label>
                                                                                <!-- Giá main.js -->
                                                                                <input type="radio" <?= $index == 1 ? 'checked' : '' ?> name="<?= $p_s['product_name'] ?>" value="<?= $o_p_s['option_price'] ?>" class="option_price option_price<?= $stt_option_same++ ?> product_price<?= $stt_product_same ?>" />
                                                                                <span><?= $o_p_s['option_name'] ?></span>
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
                                                        <?php if ($e['category_id'] == $p_s['category_id']) { ?>
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
                                                    <span>Giá:
                                                        <?php if ($p_s['discount'] > 0) { ?>
                                                            <del class="old_value<?= $stt_product ?>"></del>
                                                        <?php } ?>
                                                    </span><span class="value value<?= $stt_product_same++ ?>"></span>
                                                </div>
                                                <div class="product-item__addcart">
                                                    <button class="uk-button uk-button-default add-to-cart">Thêm vào giỏ hàng
                                                        <span data-uk-icon="cart"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>




                            <?php    } ?>


                        </ul>
                    </div>
                    <div class="uk-visible@l">
                        <a class="uk-position-top-left-out" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
                        <a class="uk-position-top-right-out" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
                    </div>
                    <div>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>