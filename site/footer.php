<footer class="page-footer">
    <div class="page-footer__top">
        <div class="uk-container">
            <div class="page-footer__logo">
                <div class="logo">
                    <a class="logo__link" href="index.html"><img class="logo__img" src="<?= CONTENT_URL ?>img/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="page-footer__contacts">
                <div class="contact-item-box">
                    <div class="contact-item-box__title">Địa chỉ của chúng tôi </div>
                    <div class="contact-item-box__value">Trịnh Văn Bô,<br> CA 46278, USA
                    </div>
                </div>
                <div class="contact-item-box">
                    <div class="contact-item-box__title">Giờ mở cửa</div>
                    <div class="contact-item-box__value">Thứ Hai - Thứ Bảy: 10:00 AM – 11:30 PM<br> Chủ nhật: 9:00 AM – 4:00 PM
                    </div>
                </div>
                <div class="contact-item-box">
                    <div class="contact-item-box__title">Liên hệ chúng tôi</div>
                    <div class="contact-item-box__value">Email: <a href="mailto:hieunmph17303@fpt.edu.vn">hieunmph17303@fpt.edu.vn</a><br> Điện thoại:
                        <a href="tel:098765421">0987-654-321</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-footer__middle">
        <div class="uk-container">
            <div class="page-footer__social">
                <ul class="social">
                    <li class="social-item"><a class="social-link" href="#!"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="social-item"><a class="social-link" href="#!"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#!"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                    <li class="social-item"><a class="social-link" href="#!"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <div class="page-footer__copy"><span>Dự án 1 hieunmph17303 hiepnhph17225 datmvph17185</span></div>
        </div>
    </div>
    <div id="offcanvas" data-uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
            <div class="uk-margin-top">
                <ul class="uk-nav">
                    <li><a href="/">Trang chủ</a></li>
                    <li><a href="page-blog-article.html">Thực đơn</a></li>
                    <li><a href="page-catalog-sidebar.html">Đặt hàng</a></li>
                    <li><a href="page-catalog.html">Our Menu</a></li>
                    <li><a href="page-blog.html">Tin tức</a></li>
                    <li><a href="page-contacts.html">Liên hệ</a></li>
                </ul>
            </div>
            <hr class="uk-margin">
            </ul>
            <hr class="uk-margin">
            <div class="uk-margin-bottom">
                <div class="block-with-phone"><img src="<?= CONTENT_URL ?>img/icons/delivery.svg" alt="delivery" data-uk-svg>
                    <div> <span>Đặt hàng - Gọi cho chúng tôi</span><a href="tel:0987654321">0987654321</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-flex-top" id="callback" data-uk-modal="">
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close=""></button>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <div class="uk-modal-full uk-modal" id="modal-full" data-uk-modal>
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport><button class="uk-modal-close-full" type="button" data-uk-close></button>
            <form class="uk-search uk-search-large">
                <input class="uk-search-input uk-text-center" type="search" placeholder="Tìm kiếm..." autofocus>
            </form>
        </div>
    </div>
</footer>
</div>
<!-- Toast add to cart -->
<div id="simpleToast">
    <h3>Đã thêm vào giỏ hàng</h3>
    <div>
        <span uk-icon="icon: check; ratio: 3.5"></span>
    </div>
</div>

<script src="<?= CONTENT_URL ?>js/jquery-3.6.0.min.js"></script>
<script src="<?= CONTENT_URL ?>js/uikit.min.js"></script>
<script src="<?= CONTENT_URL ?>js/uikit-icons.min.js"></script>
<script src="<?= CONTENT_URL ?>js/jquery.validate.js"></script>
<script src="<?= CONTENT_URL ?>js/main.js"></script>
<script src="<?= CONTENT_URL ?>js/cart.js"></script>
<script src="<?= CONTENT_URL ?>js/ajax-checkout.js"></script>
<script src="<?= CONTENT_URL ?>js/ajax-comment.js"></script>
<script src="<?= CONTENT_URL ?>js/fontawesome.all.min.js"></script>

</body>

</html>