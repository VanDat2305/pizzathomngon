<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Thơm Ngon</title>
    <link rel="stylesheet" href="<?= CONTENT_URL ?>css/uikit.min.css">
    <link rel="stylesheet" href="<?= CONTENT_URL ?>css/main.css">
    <link rel="stylesheet" href="<?= CONTENT_URL ?>css/dark.css">
</head>

<body class="page-home dm-dark">
    <!-- Loader-->
    <!-- <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div> -->
    <!-- Loader end-->
    <div class="page-wrapper">
        <header class="page-header">
            <div class="page-header__top">
                <div class="uk-container">
                    <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar="">
                        <div class="uk-navbar-left"><button class="uk-button" type="button" data-target="#offcanvas" data-uk-toggle data-uk-icon="menu"></button>
                            <ul class="uk-navbar-nav">
                                <li><a href="<?= SITE_URL ?>home/index.php">Trang chủ</a></li>
                                <li><a href="<?= SITE_URL ?>home/index.php?product">Thực đơn</a></li>
                            </ul>
                        </div>
                        <div class="uk-navbar-center">
                            <div class="logo">
                                <div class="logo__box">
                                    <a class="logo__link" href="<?= SITE_URL ?>home/index.php">
                                        <img class="logo__img logo__img--full" src="<?= CONTENT_URL ?>img/logo.png" alt="logo">
                                        <img class="logo__img logo__img-small" src="<?= CONTENT_URL ?>img/logo-small.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-navbar-right">
                            <a class="uk-button" href="#"> <span>Đặt hàng ngay</span>
                                <img class="uk-margin-small-left" src="<?= CONTENT_URL ?>img/icons/pizza.png" alt="pizza">
                            </a>
                            <ul class="uk-navbar-nav">
                                <li><a href="<?= SITE_URL ?>home/index.php?blog">Blog</a></li>
                                <li><a href="<?= SITE_URL ?>home/index.php?contact">Liên hệ</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="uk-container">
                    <div class="uk-navbar-container uk-navbar-transparent" data-uk-navbar="">
                        <div class="uk-navbar-left">
                            <div>
                                <div class="block-with-phone"><img src="<?= CONTENT_URL ?>img/icons/delivery.svg" alt="delivery" data-uk-svg>
                                    <div> <span>Vận chuyển, SDT</span><a href="tel:13205448749">0987654321</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-navbar-center"></div>
                        <div class="uk-navbar-right">
                            <div class="other-links">
                                <ul class="other-links-list">
                                    <li>
                                        <a href="#modal-full" data-uk-toggle><span data-uk-icon="search"></span></a>
                                    </li>
                                    <!-- User -->
                                    <li class="uk-inline">
                                        <a href="<?= SITE_URL ?>account/"><span data-uk-icon="user"></span></a>
                                    </li>
                                    <!-- Cart -->
                                    <li class="uk-cart-box">
                                        <span class="uk-cart-quantity">3</span>

                                        <a href="<?= SITE_URL ?>cart/"><span data-uk-icon="cart"></span></a>
                                    </li>
                                </ul>
                                <a class="uk-button" href="page-pizza-builder.html"> <span>Đặt bánh Pizza</span><img class="uk-margin-small-left" src="<?= CONTENT_URL ?>img/icons/pizza.png" alt="pizza"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>