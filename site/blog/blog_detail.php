<div class="page-content">
    <div class="uk-margin-large-top uk-container uk-container-small">
        <article class="article-full">
            <div class="article-full__info">
                <div class="article-full__author"><i class="fas fa-user"></i><span>Đăng Bởi Pizza thơm ngon</span>
                </div>
                <div class="article-full__category"><i class="fas fa-folder-open"></i><span><?= $item['blog_title'] ?></span></div>
                <div class="article-full__date"><i class="fas fa-calendar-alt"></i><span><?= $item['create_at'] ?></span></div>
            </div>
            <div class="uk-text-center">
                <h1><?= $item['blog_title'] ?></h1>
            </div>
            <div class="article-full__image">
                <div class="imgccc"><img src="<?= CONTENT_URL . 'img/blog/' . $item['blog_image'] ?>" alt="Soft &amp; fresh-baked chocolate cookie with chunks"></div>
            </div>
            <div class="article-full__content">
                <?= $item['blog_content'] ?>
            </div>
        </article>
    </div>
</div>