<div class="section-blog">
    <div class="uk-section uk-container">
        <div class="section-title section-title--center wave burger">
            <h3 class="uk-h3">Các bài viết và tin tức</h3>
        </div>
        <div class="section-content">
            <div class="uk-margin-medium-top" data-uk-slider>
                <div class="uk-position-relative">
                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-grid uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@xl uk-child-width-1-3@xl">
                            <?php foreach ($blog as $b) { ?>
                                <li>
                                    <div class="article-card">
                                        <div class="article-card__media">
                                            <a href="<?= SITE_URL?>blog/index.php?btn_info&blog_id=<?= $b['blog_id'] ?>"><img src="<?= CONTENT_URL . 'img/blog/' . $b['blog_image'] ?>" alt="Soft &amp; fresh-baked chocolate cookie with chunks"></a>
                                        </div>
                                        <div class="article-card__body">
                                            <div class="article-card__info"><span class="article-card__date">
                                            <?= $b['create_at'] ?></span></div>
                                            <div class="article-card__title"><a href="<?= SITE_URL?>blog/index.php?btn_info&blog_id=<?= $b['blog_id'] ?>"><?= $b['blog_title'] ?></a></div>
                                            <div class="article-card__intro">
                                                <div class="product-item__desc"><?=$b['blog_content']?></div>
                                            </div>
                                            <div class="article-card__more"> <a class="uk-button-link" href="<?= SITE_URL?>blog/index.php?btn_info&blog_id=<?= $b['blog_id'] ?>" data-uk-icon="arrow-right">
                                                    Xem Thêm</a></div>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                </div>
            </div>
        </div>
    </div>
</div>