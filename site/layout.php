<?php include "header.php" ?>

<main class="page-main">
    <div class="section-first-screen">
        <div class="first-screen__slideshow">
            <div data-uk-slideshow="min-height: 400; max-height: 785; autoplay: true">
                <div class="uk-position-relative" tabindex="-1">
                    <ul class="uk-slideshow-items">
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="<?= CONTENT_URL ?>img/pages/home/slider-1.jpg" alt="slider-1" data-uk-cover>
                            </div>
                        </li>
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="<?= CONTENT_URL ?>img/pages/home/slider-2.jpg" alt="slider-2" data-uk-cover>
                            </div>
                        </li>
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="<?= CONTENT_URL ?>img/pages/home/slider-3.jpg" alt="slider-3" data-uk-cover>
                            </div>
                        </li>
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
                                    <div class="nav-item"><span class="nav-item__icon"><img src="<?= CONTENT_URL ?>img/icons/menu/burgers-big.svg" alt="burgers" data-uk-svg></span><span class="nav-item__text">bánh mì kẹp
                                            thịt</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="page-catalog.html">
                                    <div class="nav-item"><span class="nav-item__icon"><img src="<?= CONTENT_URL ?>img/icons/menu/pizzas-big.svg" alt="pizzas" data-uk-svg></span><span class="nav-item__text">pizza </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="page-catalog.html">
                                    <div class="nav-item"><span class="nav-item__icon"><img src="<?= CONTENT_URL ?>img/icons/menu/noodles-big.svg" alt="noodles" data-uk-svg></span><span class="nav-item__text">Mì sợi</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="page-catalog.html">
                                    <div class="nav-item"><span class="nav-item__icon"><img src="<?= CONTENT_URL ?>img/icons/menu/sushi-big.svg" alt="sushi" data-uk-svg></span><span class="nav-item__text">sushi</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="page-catalog.html">
                                    <div class="nav-item"><span class="nav-item__icon"><img src="<?= CONTENT_URL ?>img/icons/menu/desserts-big.svg" alt="desserts" data-uk-svg></span><span class="nav-item__text">Tráng
                                            miệng</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="page-catalog.html">
                                    <div class="nav-item"><span class="nav-item__icon"><img src="<?= CONTENT_URL ?>img/icons/menu/salads-big.svg" alt="salads" data-uk-svg></span><span class="nav-item__text">Xà lách</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="page-catalog.html">
                                    <div class="nav-item"><span class="nav-item__icon"><img src="<?= CONTENT_URL ?>img/icons/menu/drinks-big.svg" alt="drinks" data-uk-svg></span><span class="nav-item__text">Đồ uống</span>
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
    <div class="section-about">
        <div class="uk-section uk-container">
            <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                <div class="uk-text-center"><img src="<?= CONTENT_URL ?>img/pages/home/img-about.png" alt=""></div>
                <div>
                    <div class="section-title burger wave">
                        <h3 class="uk-h3">Nấu ăn với niềm đam mê</h3>
                    </div>
                    <div class="section-content">
                        <p>Pizza thơm ngon cùng với đội ngũ nhân viên mang đầy sức trẻ và nhiệt huyết, chúng tôi luôn mong muốn đem lại cho khách hàng của mình chất lượng dịch vụ tốt nhất. </p>
                        <p>Luôn lắng nghe và chăm sóc những nhu cầu dù là nhỏ nhất của Quý khách.</p>
                        <div class="uk-margin-medium-top"><a class="uk-button" href="page-blog-article.html"><span>Đọc
                                    thêm</span><img class="uk-margin-small-left" src="<?= CONTENT_URL ?>img/icons/ice-cream.svg" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-features">
        <div class="uk-section uk-container">
            <div class="uk-grid uk-child-width-1-3@s" data-uk-grid>
                <div>
                    <div class="feature-item">
                        <div class="feature-item__icon"><img src="<?= CONTENT_URL ?>img/icons/feature-1.svg" alt="feature">
                        </div>
                        <div class="feature-item__title">Nguyên liệu tươi</div>
                        <div class="feature-item__desc">Chú trọng khâu tuyển chọn đội ngũ đầu bếp chuyên nghiệp, thực đơn của Pizza thơm ngon luôn được đổi mới, đa dạng với pizza nhiều hương vị, sandwich, mỳ ý và các món ăn nhanh khác.</div>
                    </div>
                </div>
                <div>
                    <div class="feature-item">
                        <div class="feature-item__icon"><img src="<?= CONTENT_URL ?>img/icons/feature-2.svg" alt="feature">
                        </div>
                        <div class="feature-item__title">Được làm từ các đầu bếp giỏi & nổi tiếng</div>
                        <div class="feature-item__desc">Chú trọng khâu tuyển chọn đội ngũ đầu bếp chuyên nghiệp, thực đơn của Pizza Express luôn được đổi mới.</div>
                    </div>
                </div>
                <div>
                    <div class="feature-item">
                        <div class="feature-item__icon"><img src="<?= CONTENT_URL ?>img/icons/feature-3.svg" alt="feature">
                        </div>
                        <div class="feature-item__title">Giao hàng trong 30 phút</div>
                        <div class="feature-item__desc">Để tăng cường sự tin tưởng và yên tâm với khách hàng, Pizza thơm ngon cam kết luôn giao hàng đúng giờ và chi phí giao hàng rẻ nhất để đảm bảo khách hàng có thể nhận bánh trong thời gian nhanh nhất.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-special-deals">
        <div class="uk-section uk-container">
            <div class="section-title section-title--center wave french-fries">
                <h3 class="uk-h3">Ưu đãi đặc biệt</h3>
            </div>
            <div class="section-content">
                <ul class="uk-subnav uk-flex-center" data-uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium; swiping: false; active: 1">
                    <li><a href="#">Burger</a></li>
                    <li><a href="#">Pizza</a></li>
                    <li><a href="#">Mì sợ</a></li>
                    <li><a href="#">Đồ uống</a></li>
                    <li><a href="#">Xà lách</a></li>
                </ul>
                <ul class="uk-switcher">
                    <li>
                        <div data-uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container uk-light">
                                    <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-1.png"><img src="<?= CONTENT_URL ?>img/products/pizza-1.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza kem tan
                                                                    chảy</a></div>
                                                            <div class="product-item__desc">Pizza phô mai cay với lớp trên là bò pepperoni & sốt</div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-1" /><span>S</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-1" /><span>M</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-1" checked="checked" /><span>L</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-2.png"><img src="<?= CONTENT_URL ?>img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">
                                                                    Pizza thơm ngon</a></div>
                                                            <div class="product-item__desc">Ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-2" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-3.png"><img src="<?= CONTENT_URL ?>img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-3" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-4.png"><img src="<?= CONTENT_URL ?>img/products/pizza-4.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-4" /><span>S</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-4" /><span>M</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-4" checked="checked" /><span>L</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-1.png"><img src="<?= CONTENT_URL ?>img/products/pizza-1.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-1" /><span>S</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-1" /><span>M</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-1" checked="checked" /><span>L</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-2.png"><img src="<?= CONTENT_URL ?>img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-2" /><span>S</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-2" /><span>M</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-2" checked="checked" /><span>L</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-3.png"><img src="<?= CONTENT_URL ?>img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-3" /><span>S</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-3" /><span>M</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-3" checked="checked" /><span>L</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-4.png"><img src="<?= CONTENT_URL ?>img/products/pizza-4.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-4" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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
                    <li>
                        <div data-uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container uk-light">
                                    <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-1.png"><img src="<?= CONTENT_URL ?>img/products/pizza-1.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-1" /><span>S</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-1" /><span>M</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-1" checked="checked" /><span>L</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-2.png"><img src="<?= CONTENT_URL ?>img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-2" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-3.png"><img src="<?= CONTENT_URL ?>img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-3" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-4.png"><img src="<?= CONTENT_URL ?>img/products/pizza-4.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-4" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-1.png"><img src="<?= CONTENT_URL ?>img/products/pizza-1.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-1" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-2.png"><img src="<?= CONTENT_URL ?>img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Neapolitan
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-2" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-3.png"><img src="<?= CONTENT_URL ?>img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Hot n Spicy
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-3" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-4.png"><img src="<?= CONTENT_URL ?>img/products/pizza-4.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-4" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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
                    <li>
                        <div data-uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container uk-light">
                                    <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-1.png"><img src="<?= CONTENT_URL ?>img/products/pizza-1.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-1" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-2.png"><img src="<?= CONTENT_URL ?>img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Neapolitan
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-2" /><span>S</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-2" /><span>M</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-2" checked="checked" /><span>L</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-3.png"><img src="<?= CONTENT_URL ?>img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-3" /><span>S</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-3" /><span>M</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="size-3" checked="checked" /><span>L</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-4.png"><img src="<?= CONTENT_URL ?>img/products/pizza-4.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-4" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-1.png"><img src="<?= CONTENT_URL ?>img/products/pizza-1.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-1" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-2.png"><img src="<?= CONTENT_URL ?>img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Neapolitan
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-2" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-3.png"><img src="<?= CONTENT_URL ?>img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Hot n Spicy
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-3" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-4.png"><img src="<?= CONTENT_URL ?>img/products/pizza-4.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-4" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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
                    <li>
                        <div data-uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container uk-light">
                                    <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-1.png"><img src="<?= CONTENT_URL ?>img/products/pizza-1.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-1" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-2.png"><img src="<?= CONTENT_URL ?>img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Neapolitan
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-2" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-3.png"><img src="<?= CONTENT_URL ?>img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Hot n Spicy
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-3" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-4.png"><img src="<?= CONTENT_URL ?>img/products/pizza-4.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-4" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-1.png"><img src="<?= CONTENT_URL ?>img/products/pizza-1.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-1" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-2.png"><img src="<?= CONTENT_URL ?>img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Neapolitan
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-2" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-3.png"><img src="<?= CONTENT_URL ?>img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Hot n Spicy
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-3" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-4.png"><img src="<?= CONTENT_URL ?>img/products/pizza-4.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-4" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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
                    <li>
                        <div data-uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container uk-light">
                                    <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-1.png"><img src="<?= CONTENT_URL ?>img/products/pizza-1.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-1" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-2.png"><img src="<?= CONTENT_URL ?>img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Neapolitan
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-2" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-3.png"><img src="<?= CONTENT_URL ?>img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Hot n Spicy
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-3" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-4.png"><img src="<?= CONTENT_URL ?>img/products/pizza-4.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-4" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-1.png"><img src="<?= CONTENT_URL ?>img/products/pizza-1.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-1" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-1" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-1" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-2.png"><img src="<?= CONTENT_URL ?>img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Neapolitan
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-2" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-2" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-2" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-3.png"><img src="<?= CONTENT_URL ?>img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                                                        </div>
                                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                <div class="product-item__type vegetarian">
                                                                </div>
                                                                <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right">
                                                                    <i class="fas fa-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__title"><a href="page-product.html">Hot n Spicy
                                                                    Pizza</a></div>
                                                            <div class="product-item__desc">Pizza thơm ngon quên lối về haha
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-3" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-3" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-3" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-item">
                                                <div class="product-item__box">
                                                    <div class="product-item__intro">
                                                        <div class="product-item__not-active">
                                                            <div class="product-item__media">
                                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox">
                                                                    <a href="<?= CONTENT_URL ?>img/products/pizza-4.png"><img src="<?= CONTENT_URL ?>img/products/pizza-4.png" alt="Pizza thơm ngon" />
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
                                                            <div class="product-item__title"><a href="page-product.html">Pizza thơm ngon</a>
                                                            </div>
                                                            <div class="product-item__desc">Pizza thơm ngon
                                                            </div>
                                                            <div class="product-item__select">
                                                                <div class="select-box select-box--thickness">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Mỏng</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Vừa</span></label>
                                                                        </li>
                                                                        <li><label><input type="radio" name="thickness-4" /><span>Dầy</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="select-box select-box--size">
                                                                    <ul>
                                                                        <li><label><input type="radio" name="size-4" /><span>S
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" /><span>M
                                                                                </span></label></li>
                                                                        <li><label><input type="radio" name="size-4" checked="checked" /><span>L
                                                                                </span></label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__active">
                                                            <div class="title">Thêm topping</div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Xúc xích salami</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Gà</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nước sốt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Thịt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Dứa</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">35.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Ơt ngọt</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">40.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Nấm trộn</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">20.000đ</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="name">Cá thu</div>
                                                                <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span>
                                                                </div>
                                                                <div class="price">149.000đ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__toggle"> <button type="button">
                                                            <span>Thêm topping</span></button></div>
                                                    <div class="product-item__info">
                                                        <div class="product-item__price"> <span>Giá:
                                                            </span><span class="value">149.000đ</span></div>
                                                        <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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
                </ul>
            </div>
        </div>
    </div>
    <div class="section-steps">
        <div class="uk-section">
            <div class="uk-container">
                <div class="section-title"> <span>Đặt món ăn ngon của riêng bạn</span>
                    <h3 class="uk-h3">Bạn Chỉ Mất 2 Phút Để Tự Làm <br> Bánh Pizza Ngon Và Đặt Hàng Từ Chúng Tôi
                    </h3>
                </div>
            </div>
            <div class="uk-container-expand">
                <div class="section-content">
                    <div class="uk-grid" data-uk-grid>
                        <div class="uk-width-1-3@m"><img src="<?= CONTENT_URL ?>img/pages/home/img-steps.png" alt="">
                        </div>
                        <div class="uk-width-2-3@m">
                            <div data-uk-slider="finite: true">
                                <div class="uk-position-relative">
                                    <div class="uk-slider-container">
                                        <ul class="uk-slider-items uk-grid uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l uk-child-width-1-4@xl">
                                            <li>
                                                <div class="step-item step-item--1">
                                                    <div class="step-item__icon"><img src="<?= CONTENT_URL ?>img/pages/home/step-1.png" alt="img-step">
                                                    </div>
                                                    <div class="step-item__numb">Bước 1</div>
                                                    <div class="step-item__title">Chọn lớp vỏ</div>
                                                    <div class="step-item__desc">Chọn lớp vỏ phù hợp với bạn.
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="step-item step-item--2">
                                                    <div class="step-item__icon"><img src="<?= CONTENT_URL ?>img/pages/home/step-2.png" alt="img-step">
                                                    </div>
                                                    <div class="step-item__numb">Bước 2</div>
                                                    <div class="step-item__title">Chọn nước sốt</div>
                                                    <div class="step-item__desc">Chọn nước sốt phù hợp với bạn.
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="step-item step-item--3">
                                                    <div class="step-item__icon"><img src="<?= CONTENT_URL ?>img/pages/home/step-3.png" alt="img-step">
                                                    </div>
                                                    <div class="step-item__numb">Bước 3</div>
                                                    <div class="step-item__title">Thêm chút phô mai</div>
                                                    <div class="step-item__desc">Thêm chút phô mai phù hợp với bạn.
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="step-item step-item--4">
                                                    <div class="step-item__icon"><img src="<?= CONTENT_URL ?>img/pages/home/step-4.png" alt="img-step">
                                                    </div>
                                                    <div class="step-item__numb">Bước 4</div>
                                                    <div class="step-item__title">Bổ sung topping</div>
                                                    <div class="step-item__desc">Bổ sung topping phù hợp với bạn.
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin-medium-top uk-text-center"> <a class="uk-button" href="page-pizza-builder.html"><span>Tạo & Đặt hàng ngay!</span><img class="uk-margin-small-left" src="<?= CONTENT_URL ?>img/icons/ice-cream.svg" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-recommend">
        <div class="uk-section uk-container">
            <div class="section-title section-title--center wave french-fries">
                <h3 class="uk-h3">Đề xuất đồ ăn ngon</h3>
            </div>
            <div class="section-content">
                <div class="uk-margin-medium-top" data-uk-slider>
                    <div class="uk-position-relative">
                        <div class="uk-slider-container">
                            <ul class="uk-slider-items uk-grid uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@xl uk-child-width-1-3@xl" data-uk-height-match=".product-card__intro">
                                <li>
                                    <div class="product-card">
                                        <div class="product-card__media">
                                            <a href="page-product.html"><img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/products/recommend-1.jpg" alt="Pizza thơm ngon" /></a>
                                        </div>
                                        <div class="product-card__body">
                                            <div class="product-card__title"> <a href="page-product.html">Pizza
                                                    thơm ngon</a></div>
                                            <div class="product-card__stars">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                </ul>
                                            </div>
                                            <div class="product-card__intro">
                                                <p>Một sự pha trộn giữa ức, sườn ngắn và thăn trên bánh muffin kiểu Anh tự làm.</p>
                                            </div>
                                            <div class="product-card__price"> <span>Giá: </span><span class="value">149.000đ</span></div>
                                            <div class="product-card__addcart"> <a class="uk-button uk-button-default uk-width-1-1" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-card">
                                        <div class="product-card__media">
                                            <a href="page-product.html"><img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/products/recommend-2.jpg" alt="Pizza thơm ngon" /></a>
                                        </div>
                                        <div class="product-card__body">
                                            <div class="product-card__title"> <a href="page-product.html">Pizza
                                                    thơm ngon</a></div>
                                            <div class="product-card__stars">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                </ul>
                                            </div>
                                            <div class="product-card__intro">
                                                <p>Tempura tôm, Bơ, dưa chuột, Lươn, kem phô mai, Cua cay phủ cá ngừ.
                                                </p>
                                            </div>
                                            <div class="product-card__price"> <span>Giá: </span><span class="value">99.000đ</span></div>
                                            <div class="product-card__addcart"> <a class="uk-button uk-button-default uk-width-1-1" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-card">
                                        <div class="product-card__media">
                                            <a href="page-product.html"><img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/products/recommend-3.jpg" alt="Pizza thơm ngon" /></a>
                                        </div>
                                        <div class="product-card__body">
                                            <div class="product-card__title"> <a href="page-product.html">Pizza
                                                    thơm ngon</a></div>
                                            <div class="product-card__stars">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                </ul>
                                            </div>
                                            <div class="product-card__intro">
                                                <p>Lựa chọn của bạn gồm kem được phủ trong bánh pound và chiên trong bột tempura phủ trên.</p>
                                            </div>
                                            <div class="product-card__price"> <span>Giá: </span><span class="value">$8.50</span></div>
                                            <div class="product-card__addcart"> <a class="uk-button uk-button-default uk-width-1-1" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-card">
                                        <div class="product-card__media">
                                            <a href="page-product.html"><img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/products/recommend-1.jpg" alt="The Spruce Burger" /></a>
                                        </div>
                                        <div class="product-card__body">
                                            <div class="product-card__title"> <a href="page-product.html">The
                                                    Spruce Burger</a></div>
                                            <div class="product-card__stars">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                </ul>
                                            </div>
                                            <div class="product-card__intro">
                                                <p>A blend of brisket, short rib, and sirloin on a housemade English muffin bun.</p>
                                            </div>
                                            <div class="product-card__price"> <span>Giá: </span><span class="value">149.000đ</span></div>
                                            <div class="product-card__addcart"> <a class="uk-button uk-button-default uk-width-1-1" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-card">
                                        <div class="product-card__media">
                                            <a href="page-product.html"><img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/products/recommend-2.jpg" alt="Pizza thơm ngon" /></a>
                                        </div>
                                        <div class="product-card__body">
                                            <div class="product-card__title"> <a href="page-product.html">Pizza
                                                    thơm ngon</a></div>
                                            <div class="product-card__stars">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                </ul>
                                            </div>
                                            <div class="product-card__intro">
                                                <p>Tempura tôm, Bơ, dưa chuột, Lươn, kem phô mai, Cua cay phủ cá ngừ.
                                                </p>
                                            </div>
                                            <div class="product-card__price"> <span>Giá: </span><span class="value">99.000đ</span></div>
                                            <div class="product-card__addcart"> <a class="uk-button uk-button-default uk-width-1-1" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-card">
                                        <div class="product-card__media">
                                            <a href="page-product.html"><img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/products/recommend-3.jpg" alt="Pizza thơm ngon" /></a>
                                        </div>
                                        <div class="product-card__body">
                                            <div class="product-card__title"> <a href="page-product.html">Pizza
                                                    thơm ngon</a></div>
                                            <div class="product-card__stars">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                </ul>
                                            </div>
                                            <div class="product-card__intro">
                                                <p>Lựa chọn của bạn gồm kem được phủ trong bánh pound và chiên trong bột tempura phủ trên.</p>
                                            </div>
                                            <div class="product-card__price"> <span>Giá: </span><span class="value">$8.50</span></div>
                                            <div class="product-card__addcart"> <a class="uk-button uk-button-default uk-width-1-1" href="page-product.html">Thêm vào giỏ hàng<span data-uk-icon="cart"></span></a></div>
                                        </div>
                                    </div>
                                </li>
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
                <div class="uk-margin-large-top">
                    <div class="uk-grid uk-grid-medium uk-child-width-1-2@m" data-uk-grid>
                        <div>
                            <div class="banner-card">
                                <div class="banner-card__bg" style="background-image: url(<?= CONTENT_URL ?>img/banners/1.jpg)"></div>
                                <div class="banner-card__box"> <a class="banner-card__category" href="#!">Tin
                                        tức</a>
                                    <h4 class="banner-card__title">Lựa chọn thực phẩm lành mạnh
                                        <br> cho mọi người
                                    </h4><a class="banner-card__btn" href="page-catalog-sidebar.html">Bắt đầu
                                        đặt đơn hàng của bạn</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="banner-card">
                                <div class="banner-card__bg" style="background-image: url(<?= CONTENT_URL ?>img/banners/2.jpg)"></div>
                                <div class="banner-card__box"> <a class="banner-card__category" href="#!">Giới
                                        thiệu</a>
                                    <h4 class="banner-card__title">Chúng tôi đã làm ra<br> những con gà ròn tan
                                    </h4><a class="banner-card__btn" href="page-blog.html">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-deal-of-the-week">
        <div class="uk-section uk-container">
            <div class="section-deal-of-the-week__box">
                <div class="section-deal-of-the-week__content">
                    <div class="section-title"><span>Deal trong tuần</span>
                        <h3 class="uk-h3">Salad gà</h3>
                    </div>
                    <div class="section-content">
                        <p>Được làm từ xà lách romaine tươi, ức gà nướng, cà chua nho, pho mát Ý, khoai tây chiên giòn Parmesan và sốt Caesar kem & hương vị tuyệt vời mà chỉ cần cắn một miếng sẽ cho bạn biết lý do tại sao nó là vua duy nhất của không
                            chỉ các loại Salad.
                        </p>
                        <div class="price-item"> <span>Mỗi khẩu phần </span><span class="value">299.000đ</span>
                        </div>
                        <div class="uk-margin-medium-top"><a class="uk-button" href="page-cart.html"><span>Đặt
                                    hàng ngay!</span><img class="uk-margin-small-left" src="<?= CONTENT_URL ?>img/icons/ice-cream.svg" alt=""></a></div>
                    </div>
                </div>
                <div class="section-deal-of-the-week__media"> <img src="<?= CONTENT_URL ?>img/pages/home/img-deal-of-the-week.png" alt="deal-of-the-week"></div>
            </div>
        </div>
    </div>
    <div class="section-video">
        <div class="uk-section uk-container">
            <div class="section-title section-title--center wave french-fries">
                <h3 class="uk-h3">Chúng tôi coi trọng thực phẩm của chúng tôi<br> Cho gia đình và cộng đồng</h3>
            </div>
            <div class="section-content">
                <p class="uk-text-large uk-text-center">Chúng tôi luôn nghĩ về việc phục vụ đồ ăn nhanh tốt hơn. Đây là cách chúng tôi thực sự làm điều đó.</p>
                <div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                    <div>
                        <p>Pizza thơm ngon cũng được đông đảo các gia đình người Việt, các gia đình người nước ngoài, các cặp đôi và các nhóm bạn trẻ yêu thích. Với thiết kế sạch sẽ, thoải mái và tạo cảm giác gần gũi, nhà hàng như một ốc đảo chào
                            đón bạn đến thưởng thức những món ăn ngon tuyệt hảo và dịch vụ khách hàng tuyệt vời sau những giờ phút hối hả và bận rộn của cuộc sống hàng ngày.</p>
                    </div>
                    <div>
                        <p>Chuỗi nhà hàng chúng tôi chuyên phục vụ các món ăn nổi tiếng của nền ẩm thực Ý. Pizza chính là thế mạnh của Pizza thơm ngon với những ưu đãi dài hạn khi dùng bữa tại nhà hàng hoặc mua mang về hay chương trình mua 1 tặng
                            1 Pizza luôn được nhiều người yêu thích nhất.</p>
                    </div>
                </div>
                <div class="video-box">
                    <div class="video-column video-column--center">
                        <div class="video-img">
                            <div data-uk-lightbox="video-autoplay: true">
                                <a href="https://www.youtube.com/watch?v=IUYs3mYgEPI" data-attrs="width: 1280; height: 720;"><img src="<?= CONTENT_URL ?>img/pages/home/img-video.png" alt="img-video"></a>
                            </div>
                        </div>
                    </div>
                    <div class="video-column video-column--left">
                        <div class="video-item">
                            <div class="video-item__icon"><img src="<?= CONTENT_URL ?>img/icons/video-1.svg" alt="icon-video">
                            </div>
                            <div class="video-item__title">Dầu tinh khiết được chứng nhận</div>
                            <div class="video-item__text">Pizza thơm ngon cũng được đông đảo các gia đình người Việt, các gia đình người nước ngoài, các cặp đôi và các nhóm bạn trẻ yêu thích.
                            </div>
                        </div>
                        <div class="video-item">
                            <div class="video-item__icon"><img src="<?= CONTENT_URL ?>img/icons/video-2.svg" alt="icon-video">
                            </div>
                            <div class="video-item__title">Không chất hóa học</div>
                            <div class="video-item__text">Pizza thơm ngon cũng được đông đảo các gia đình người Việt, các gia đình người nước ngoài, các cặp đôi và các nhóm bạn trẻ yêu thích.
                            </div>
                        </div>
                    </div>
                    <div class="video-column video-column--right">
                        <div class="video-item">
                            <div class="video-item__icon"><img src="<?= CONTENT_URL ?>img/icons/video-3.svg" alt="icon-video">
                            </div>
                            <div class="video-item__title">Pizza có hương vị ngon nhất</div>
                            <div class="video-item__text">Pizza thơm ngon cũng được đông đảo các gia đình người Việt, các gia đình người nước ngoài, các cặp đôi và các nhóm bạn trẻ yêu thích.
                            </div>
                        </div>
                        <div class="video-item">
                            <div class="video-item__icon"><img src="<?= CONTENT_URL ?>img/icons/video-4.svg" alt="icon-video">
                            </div>
                            <div class="video-item__title">Nướng Potatos Tươi</div>
                            <div class="video-item__text">Pizza thơm ngon cũng được đông đảo các gia đình người Việt, các gia đình người nước ngoài, các cặp đôi và các nhóm bạn trẻ yêu thích.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-subscribe">
        <div class="uk-section uk-container">
            <div class="section-title section-title--center wave">
                <h3 class="uk-h3">Đăng ký nhận Khuyến mại, Giảm giá & Ưu đãi</h3>
            </div>
            <div class="section-content">
                <div class="subscribe-form">
                    <form action="#!">
                        <div class="subscribe-form__box"><input type="email" placeholder="Nhập địa chỉ email của bạn ..."><input class="uk-button" type="submit" value="Đăng ký ngay!"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="section-featured-deals">
        <div class="uk-container-expand">
            <div data-uk-slider>
                <div class="uk-position-relative">
                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l uk-child-width-1-3@xl">
                            <li>
                                <div class="featured-deal-item">
                                    <div class="uk-width-1-1 uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/pages/home/featured-deal-1.jpg" alt="featured-deal">
                                        <a class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-primary uk-flex uk-flex-column uk-flex-center uk-flex-middle" href="page-product.html">
                                            <div class="featured-deal-item__title">Pizza thơm ngon</div>
                                            <div class="featured-deal-item__stars"> <img src="<?= CONTENT_URL ?>img/decor/stars.png" alt="stars"></div>
                                            <div class="featured-deal-item__price"> <span>Giá: </span><span class="value">99.000đ</span></div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="featured-deal-item">
                                    <div class="uk-width-1-1 uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/pages/home/featured-deal-2.jpg" alt="featured-deal">
                                        <a class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-primary uk-flex uk-flex-column uk-flex-center uk-flex-middle" href="page-product.html">
                                            <div class="featured-deal-item__title">Pizza thơm ngon</div>
                                            <div class="featured-deal-item__stars"> <img src="<?= CONTENT_URL ?>img/decor/stars.png" alt="stars"></div>
                                            <div class="featured-deal-item__price"> <span>Giá: </span><span class="value">99.000đ</span></div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="featured-deal-item">
                                    <div class="uk-width-1-1 uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/pages/home/featured-deal-3.jpg" alt="featured-deal">
                                        <a class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-primary uk-flex uk-flex-column uk-flex-center uk-flex-middle" href="page-product.html">
                                            <div class="featured-deal-item__title">Pizza thơm ngon</div>
                                            <div class="featured-deal-item__stars"> <img src="<?= CONTENT_URL ?>img/decor/stars.png" alt="stars"></div>
                                            <div class="featured-deal-item__price"> <span>Giá: </span><span class="value">99.000đ</span></div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
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
                                <li>
                                    <div class="article-card">
                                        <div class="article-card__media">
                                            <a href="page-blog-article.html"><img src="<?= CONTENT_URL ?>img/blog/1.jpg" alt="Soft &amp; fresh-baked chocolate cookie with chunks"></a>
                                        </div>
                                        <div class="article-card__body">
                                            <div class="article-card__info"><span class="article-card__date">10
                                                    tháng 11 2021</span><span class="article-card__comments">210
                                                </span></div>
                                            <div class="article-card__title"><a href="page-blog-article.html">Pizza thơm
                                                    ngon không cưỡng
                                                    lại được</a></div>
                                            <div class="article-card__intro">
                                                <p>Đội ngũ đầu bếp tận tâm của chúng tôi có thể chế biến các món ăn và các loại bánh ngọt theo yêu cầu cụ thể của quý khách.
                                                </p>
                                            </div>
                                            <div class="article-card__more"> <a class="uk-button-link" href="page-blog-article.html" data-uk-icon="arrow-right">Read
                                                    more</a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="article-card">
                                        <div class="article-card__media">
                                            <a href="page-blog-article.html"><img src="<?= CONTENT_URL ?>img/blog/2.jpg" alt="Juicy white meat light bread topped with crisp lettuce"></a>
                                        </div>
                                        <div class="article-card__body">
                                            <div class="article-card__info"><span class="article-card__date">10
                                                    tháng 11 2021</span><span class="article-card__comments">210
                                                </span></div>
                                            <div class="article-card__title"><a href="page-blog-article.html">Pizza thơm
                                                    ngon không cưỡng
                                                    lại được
                                                    topped with crisp lettuce</a></div>
                                            <div class="article-card__intro">
                                                <p>Đội ngũ đầu bếp tận tâm của chúng tôi có thể chế biến các món ăn và các loại bánh ngọt theo yêu cầu cụ thể của quý khách.
                                                </p>
                                            </div>
                                            <div class="article-card__more"> <a class="uk-button-link" href="page-blog-article.html" data-uk-icon="arrow-right">Đọc
                                                    thêm</a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="article-card">
                                        <div class="article-card__media">
                                            <a href="page-blog-article.html"><img src="<?= CONTENT_URL ?>img/blog/3.jpg" alt="Marzetti for mixed greens, cheese any tomatos"></a>
                                        </div>
                                        <div class="article-card__body">
                                            <div class="article-card__info"><span class="article-card__date">10
                                                    tháng 11 2021</span><span class="article-card__comments">210
                                                </span></div>
                                            <div class="article-card__title"><a href="page-blog-article.html">Pizza thơm
                                                    ngon không cưỡng
                                                    lại được</a></div>
                                            <div class="article-card__intro">
                                                <p>Đội ngũ đầu bếp tận tâm của chúng tôi có thể chế biến các món ăn và các loại bánh ngọt theo yêu cầu cụ thể của quý khách.
                                                </p>
                                            </div>
                                            <div class="article-card__more"> <a class="uk-button-link" href="page-blog-article.html" data-uk-icon="arrow-right">Read
                                                    more</a></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-instagram">
        <div class="uk-container">
            <div class="section-title section-title--center wave">
                <h3 class="uk-h3">Theo dõi chúng tôi trên Instagram</h3>
            </div>
        </div>
        <div class="uk-container-expand">
            <div class="uk-margin-medium-top" data-uk-slider>
                <div class="uk-position-relative">
                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-child-width-1-6@xl">
                            <li>
                                <a href="#" target="_blank"><img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/pages/home/instagram-1.jpg" alt="instagram"></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/pages/home/instagram-2.jpg" alt="instagram"></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/pages/home/instagram-3.jpg" alt="instagram"></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/pages/home/instagram-4.jpg" alt="instagram"></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/pages/home/instagram-5.jpg" alt="instagram"></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><img class="uk-width-1-1" src="<?= CONTENT_URL ?>img/pages/home/instagram-6.jpg" alt="instagram"></a>
                            </li>
                        </ul>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "footer.php" ?>