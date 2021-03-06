jQuery(document).ready(function($) {
    $(window).on('load', function() {
        setTimeout(function() {
            $('.preloader').fadeOut().end().delay(500).fadeOut('slow');
        }, 1000);
    });
    $('.product-item__toggle button').on('click', function() {
        $(this)
            .offsetParent('.product-item')
            .find('.product-item__active')
            .toggleClass('is-show');
        $(this).parent('.product-item__toggle').toggleClass('is-show');
    });
    $('.product-item__whish').on('click', function() {
        $(this).toggleClass('is-active');

        // ===================================Ajax sp yeu thich================================

        console.dir($(this)[0]);
        // $.post(
        //     '../../site/product/ajax_filter_product.php', {
        //         action: action,
        //     },
        //     function(response) {
        //         $('#ajax-filter').html(response);
        //         load_price();
        //         addCart();
        //         popupAddCart();
        //     }
        // );
    });
    $('.product-full-card__toggle button').on('click', function() {
        $(this)
            .offsetParent('.product-full-card')
            .find('.product-full-card__active')
            .toggleClass('is-show');
        $(this).parent('.product-full-card__toggle').toggleClass('is-show');
    });
    $('.product-full-card__whish').on('click', function() {
        $(this).toggleClass('is-active');
    });
    $('.counter .minus').on('click', function() {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.counter .plus').on('click', function() {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
    $('.js-hidden-box').each(function() {
        $(this).children('div').hide();
        $(this).children('div').slice(0, 6).show();
        $(this)
            .next('.js-hidden-btn')
            .on('click', function(e) {
                e.preventDefault();
                $(this)
                    .prev('.js-hidden-box')
                    .children('div:hidden')
                    .slice(0, 3)
                    .slideDown();
                var elHidden = $(this)
                    .prev('.js-hidden-box')
                    .children('div:hidden').length;

                if (elHidden <= 0) {
                    $(this).hide();
                }
            });
    });
    $('.js-checkbox').on('click', function() {
        $(this).toggleClass('is-checked');
    });
});

/////////////////////////////////////////////////////////////////
// Preloader
/////////////////////////////////////////////////////////////////

var $preloader = $('#page-preloader'),
    $spinner = $preloader.find('.spinner-loader');
$spinner.fadeOut();
$preloader.delay(50).fadeOut('slow');

const mediaQueryTablet = window.matchMedia('(max-width: 768px)');

function handleTabletChange(e) {
    if (e.matches) {
        console.log('Media Query 768!');
    }
}

mediaQueryTablet.addListener(handleTabletChange);
handleTabletChange(mediaQueryTablet);

//======================================= T??nh ti???n theo t???ng option trang chi tiet san pham

// =============H??m format gi?? ti???n
function formatPrice(param) {
    param = parseInt(param);
    return param.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' ??';
}

// X??? l?? trang chi ti???t s???n ph???m
$(document).ready(function() {
    //M???c ?????nh ch??a ch???n th?? s??? 1 cai mac dinh
    var new_value = $('.product_option_price:checked').val();
    new_value = parseInt(new_value) + '';
    var discount_value = $('#discount_value').val();
    var old_value = (new_value * 100) / (100 - discount_value);

    new_value_formated = formatPrice(new_value);
    old_value_formated = formatPrice(old_value);

    $('.product_detail_new_value').html(new_value_formated);
    $('.product_detail_old_value').html(old_value_formated);

    // Khi thay doi option
    $('.product_option_price').on('change', function() {
        if ($(this).is(':checked')) {
            var new_val = $(this).val();
            var old_val = (new_val * 100) / (100 - discount_value);
            new_val_formated = formatPrice(new_val);
            old_val_formated = formatPrice(old_val);

            $('.product_detail_new_value').html(new_val_formated);
            $('.product_detail_old_value').html(old_val_formated);
        }
    });

    var option_detail = $('.product_option_price');
    for (let i = 0; i < option_detail.length; i++) {
        $('.option_detail_price' + i).on('click', function() {
            $('.option_detail').removeAttr('checked');
            $('.option_detail_id' + i).attr('checked', 'true');
        });
    }
});

// // X??? l?? trang show s???n ph???m

function load_price() {
    //M???c ?????nh ch??a ch???n th?? s??? l???y c??i n??y

    // M???ng ch???a gi?? ban ?????u
    var arrNewPrice = [];
    var arrOldPrice = [];
    // M???ng ch??a format
    var arrOriginNewPrice = [];

    var count_option = $('.option_price');
    var val;
    // L???p qua s??? l?????ng option l???y value

    var old_price;
    var discount;

    for (var i = 0; i < count_option.length; i++) {
        val = $('.option_price' + i);
        if (val[0].checked === true) {
            var result;
            result = val[0].defaultValue;

            arrOriginNewPrice.push(Number(result));
            // Gi?? m???i
            result_formated = formatPrice(result);

            // ?????y gi?? v??o m???ng ch???a gi?? ban ?????u
            arrNewPrice.push(result_formated);
        }
    }

    // Hi???n th??? gi?? ra theo v??ng l???p s??? s???n ph???m
    var count_product = $('.product-item__price');
    var product_price;

    // L???p qua s??? l?????ng sp ????? gi?? ra
    for (let i = 0; i < count_product.length; i++) {
        // Gi?? m???c ?????nh ban ?????u
        $('.value' + i).html(arrNewPrice[i]);

        // Gi?? khi thay ?????i tr???ng th??i
        product_price = $('.product_price' + i);

        // T??nh gi?? ban ?????u theo % discount
        discount = $('.discount' + i).val();
        old_price = (arrOriginNewPrice[i] * 100) / (100 - discount);

        old_price_formated = formatPrice(old_price);

        arrOldPrice.push(old_price_formated);

        $('.old_value' + i).html(arrOldPrice[i]);

        product_price.on('change', function() {
            if ($(this).is(':checked')) {
                // Gi?? m???i
                var val = $(this).val();
                val_formated = formatPrice(val);

                $('.value' + i).html(val_formated);
                // Gi?? c??
                // ??ang l??m ?????n ?????y Discount ch??a c???ng i v??o n??n b??? l???i
                discount = $('.discount' + i).val();
                old_price = (val * 100) / (100 - discount);

                old_price_formated = formatPrice(old_price);
                $('.old_value' + i).html(old_price_formated);
            }
        });
    }

    var count_product = $('.product-item__price');

    var product_price;
    var option_length;
    // L???p qua s??? l?????ng sp ????? gi?? ra
    for (let i = 0; i < count_product.length; i++) {
        $('.product_price' + i).on('click', function() {
            $('.product_stt' + i).removeAttr('checked');
        });
    }
    option_length = $('.option_price');
    for (let j = 0; j < option_length.length; j++) {
        $('.option_price' + j).on('click', function() {
            $('.option_stt' + j).attr('checked', 'true');
        });
    }
}
load_price();

// =====================click v??o add to cart hi???n th??? ra popup
function popupAddCart() {
    $('.add-to-cart').click(function(e) {
        e.preventDefault();
        var x = document.getElementById('simpleToast');
        x.className = 'show';

        setTimeout(function() {
            x.className = x.className.replace('show', '');
        }, 1000);
    });

    $('#add-to-cart_detail').click(function(e) {
        e.preventDefault();
        var x = document.getElementById('simpleToast');
        x.className = 'show';

        setTimeout(function() {
            x.className = x.className.replace('show', '');
        }, 1000);
    });
}
popupAddCart();
// ======================filter input range 2 values =====================
var inputLeft = document.getElementById('input-left');
var inputRight = document.getElementById('input-right');

var thumbLeft = document.querySelector('.slider > .thumb.left');
var thumbRight = document.querySelector('.slider > .thumb.right');
var range = document.querySelector('.slider > .range');

function setLeftValue() {
    var _this = inputLeft,
        min = parseInt(_this.min),
        max = parseInt(_this.max);

    _this.value = Math.min(
        parseInt(_this.value),
        parseInt(inputRight.value) - 1
    );

    var percent = ((_this.value - min) / (max - min)) * 100;

    thumbLeft.style.left = percent + '%';
    range.style.left = percent + '%';
}
setLeftValue();

function setRightValue() {
    var _this = inputRight,
        min = parseInt(_this.min),
        max = parseInt(_this.max);

    _this.value = Math.max(
        parseInt(_this.value),
        parseInt(inputLeft.value) + 1
    );

    var percent = ((_this.value - min) / (max - min)) * 100;

    thumbRight.style.right = 100 - percent + '%';
    range.style.right = 100 - percent + '%';
}
setRightValue();

inputLeft.addEventListener('input', setLeftValue);
inputRight.addEventListener('input', setRightValue);

inputLeft.addEventListener('mouseover', function() {
    thumbLeft.classList.add('hover');
});
inputLeft.addEventListener('mouseout', function() {
    thumbLeft.classList.remove('hover');
});
inputLeft.addEventListener('mousedown', function() {
    thumbLeft.classList.add('active');
});
inputLeft.addEventListener('mouseup', function() {
    thumbLeft.classList.remove('active');
});

inputRight.addEventListener('mouseover', function() {
    thumbRight.classList.add('hover');
});
inputRight.addEventListener('mouseout', function() {
    thumbRight.classList.remove('hover');
});
inputRight.addEventListener('mousedown', function() {
    thumbRight.classList.add('active');
});
inputRight.addEventListener('mouseup', function() {
    thumbRight.classList.remove('active');
});

// ===================================Ajax filter product================================
$(document).ready(function() {
    $('#input-left').on('change', function(e) {
        var from_price = $(this).val();
        var to_price = $('#input-right').val();

        var from_price_formated = formatPrice(from_price);

        var action = 'filter_by_range';

        $('#from-price').html(from_price_formated);

        $.post(
            '../../site/product/ajax_filter_product.php', {
                action: action,
                from_price: from_price,
                to_price: to_price,
            },
            function(response) {
                $('#ajax-filter').html(response);
                load_price();
                addCart();
                popupAddCart();
            }
        );
    });

    $('#input-right').on('change', function(e) {
        var from_price = $('#input-left').val();
        var to_price = $(this).val();
        var to_price_formated = formatPrice(to_price);

        var action = 'filter_by_range';
        $('#to-price').html(to_price_formated);

        $.post(
            '../../site/product/ajax_filter_product.php', {
                action: action,
                from_price: from_price,
                to_price: to_price,
            },
            function(response) {
                $('#ajax-filter').html(response);
                load_price();
                addCart();
                popupAddCart();
            }
        );
    });

    $('#filter_product_select').on('change', function(e) {
        e.preventDefault();

        var action = $(this).val();
        console.log(action);
        $.post(
            '../../site/product/ajax_filter_product.php', {
                action: action,
            },
            function(response) {
                $('#ajax-filter').html(response);
                load_price();
                addCart();
                popupAddCart();
            }
        );
    });
});