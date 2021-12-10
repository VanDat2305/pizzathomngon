<div class="page-content">
    <div class="uk-margin-large-top uk-container">
        <div class="uk-grid" data-uk-grid>
            <div class="uk-width-2-3@m">

                <article class="article-intro">
                    <div class="article-intro__image">
                        <a href="<?= SITE_URL?>blog/index.php?btn_info&blog_id=<?= $blog[0]['blog_id'] ?>"><img src="<?= CONTENT_URL . 'img/blog/' . $blog[0]['blog_image'] ?>" alt="Soft &amp; fresh-baked chocolate cookie with chunks"></a>
                    </div>
                    <div class="article-intro__body">
                        <div class="article-intro__info">
                            <div class="article-intro__author"><i class="fas fa-user"></i><span>Đăng bởi Pizza Thơm ngon</span></div>
                            <div class="article-intro__category"><i class="fas fa-folder-open"></i><span><?= $blog[0]['blog_title'] ?></span>
                            </div>
                            <div class="article-intro__date"><i class="fas fa-calendar-alt"></i><span><?= $blog[0]['create_at'] ?></span></div>
                        </div>
                        <h2 class="article-intro__title"><?= $blog[0]['blog_title'] ?></h2>
                        <div class="article-intro__content">
                            <p><?= $blog[0]['blog_content'] ?>
                            </p>
                        </div>
                        <div class="article-intro__bottom">
                            <div class="article-intro__tags"><i class="fas fa-tags"></i><span>Bếp trưởng hiếu đạt hiệp</span></div>
                            <div class="article-intro__more"><a class="uk-button" href="<?= SITE_URL?>blog/index.php?btn_info&blog_id=<?= $blog[0]['blog_id'] ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </article>
                <ul class="uk-pagination uk-flex-center uk-margin-medium-top">
                    <li class="uk-active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="uk-disabled"><span>...</span></li>
                    <li><a href="#"><span data-uk-pagination-next></span></a></li>
                </ul>
            </div>
            <div class="uk-width-1-3@m">
                <aside class="sidebar">
                    <div class="widjet widjet-search">
                        <form class="uk-search uk-search-default" action="#!"><button class="uk-search-icon-flip" data-uk-search-icon type="submit"></button><input class="uk-input uk-search-input uk-form-large" type="search" placeholder="Search blog ..."></form>
                    </div>
                    <div class="widjet widjet-list-articles">
                        <div class="widjet__title">Popular Posts</div>
                        <ul class="list-articles">
                            <?php foreach ($viewbl as $u) {?>
                            <li class="list-articles-item">
                                <a class="list-articles-item__link" href="<?= SITE_URL?>blog/index.php?btn_info&blog_id=<?= $u['blog_id'] ?>">
                                    <div class="list-articles-item__img"><img src="<?= CONTENT_URL . 'img/blog/' . $u['blog_image'] ?>" alt="article-thumb"></div>
                                    <div class="list-articles-item__info">
                                        <div class="list-articles-item__title"><?= $u['blog_title']?>
                                        </div>
                                        <div class="list-articles-item__date"><?= $u['create_at']?></div>
                                    </div>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
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
                                            <a href="index.php?btn_info&blog_id=<?= $b['blog_id'] ?>"><img src="<?= CONTENT_URL . 'img/blog/' . $b['blog_image'] ?>" alt="Soft &amp; fresh-baked chocolate cookie with chunks"></a>
                                        </div>
                                        <div class="article-card__body">
                                            <div class="article-card__info"><span class="article-card__date">
                                            <?= $b['create_at'] ?></span></div>
                                            <div class="article-card__title"><a href="page-blog-article.html"><?= $b['blog_title'] ?></a></div>
                                            <div class="article-card__intro">
                                            </div>
                                            <div class="article-card__more"> <a class="uk-button-link" href="index.php?btn_info&blog_id=<?= $b['blog_id'] ?>" data-uk-icon="arrow-right">
                                                    Xem thêm</a></div>
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