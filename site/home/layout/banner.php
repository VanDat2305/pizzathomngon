<div class="section-first-screen">
    <div class="first-screen__slideshow">
        <div data-uk-slideshow="min-height: 400; max-height: 785; autoplay: true">
            <div class="uk-position-relative" tabindex="-1">
                <ul class="uk-slideshow-items">

                    <?php
                    foreach ($slides as $s) {
                    ?>
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="<?= CONTENT_URL ?>img/banners/<?= $s['slide_image'] ?>" alt="slider-3" data-uk-cover>
                            </div>
                        </li>

                    <?php
                    }
                    ?>


                </ul>
            </div>
            <div class="slideshow-dotnav uk-position-bottom-center">
                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center"></ul>
            </div>
        </div>
    </div>
    <div class="first-screen__content">
        <div class="uk-container">
            <nav class="category-nav">
                <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="page-catalog.html">
                                <div class="nav-item"><span class="nav-item__text">bánh mì kẹp
                                        thịt</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="page-catalog.html">
                                <div class="nav-item"><span class="nav-item__text">pizza </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="page-catalog.html">
                                <div class="nav-item"><span class="nav-item__text">Mì sợi</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="page-catalog.html">
                                <div class="nav-item"><span class="nav-item__text">sushi</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="page-catalog.html">
                                <div class="nav-item"><span class="nav-item__text">Tráng
                                        miệng</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="page-catalog.html">
                                <div class="nav-item"><span class="nav-item__text">Xà lách</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="page-catalog.html">
                                <div class="nav-item"><span class="nav-item__text">Đồ uống</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </nav>
            <div class="first-screen__box">
                <h2 class="first-screen__title">Đặt pizza ngay, Khi còn nóng!</h2>
                <p class="first-screen__desc">Ăn các món ăn nhanh ngon & bổ dưỡng với hương vị thực</p><a class="uk-button" href="page-catalog-sidebar.html">Xem thực đơn</a>
            </div>
        </div>
    </div>
</div>