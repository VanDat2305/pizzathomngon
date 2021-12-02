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

// format tiền bằng
function formatCash(str) {
    return str
        .split('')
        .reverse()
        .reduce((prev, next, index) => {
            return (index % 3 ? next : next + ',') + prev;
        });
}

//======================================= Tính tiền theo từng option trang chi tiet san pham

$(document).ready(function() {
    //Mặc định chưa chọn thì sẽ lấy cái này
    var value = $('.product-item__price:checked').val();
    value = parseInt(value) + '';
    value_formated = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' đ';

    $('.product-item__value').html(value_formated);

    $('.product-item__price').on('change', function() {
        if ($(this).is(':checked')) {
            var val = $(this).val();

            val = parseInt(val) + '';
            val_formated = val.replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' đ';

            $('.product-item__value').html(val_formated);
        }
    });
});

// Tính tiền theo từng option trang show san pham
$(document).ready(function() {
    //Mặc định chưa chọn thì sẽ lấy cái này

    // Mảng chứa giá ban đầu
    var arrNewPrice = [];
    var arrOldPrice = [];
    // Mảng chưa format
    var arrOriginNewPrice = [];

    var count_option = $('.option_price');
    var val;
    // Lặp qua số lượng option lấy value

    var old_price;
    var discount;

    for (var i = 0; i < count_option.length; i++) {
        val = $('.option_price' + i);
        if (val[0].checked === true) {
            var result;
            result = val[0].defaultValue;

            arrOriginNewPrice.push(Number(result));
            // Giá mới
            result = parseInt(result) + '';
            result_formated =
                result.replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' đ';

            // Đẩy giá vào mảng chứa giá ban đầu
            arrNewPrice.push(result_formated);
        }
    }

    // Hiển thị giá ra theo vòng lặp số sẳn phẩm
    var count_product = $('.product-item__price');
    var product_price;

    // Lặp qua số lượng sp đổ giá ra
    for (let i = 0; i < count_product.length; i++) {
        // Giá mặc định ban đầu
        $('.value' + i).html(arrNewPrice[i]);

        // Giá khi thay đổi trạng thái
        product_price = $('.product_price' + i);

        // Tính giá ban đầu theo % discount
        discount = $('.discount' + i).val();
        old_price = (arrOriginNewPrice[i] * 100) / (100 - discount);
        old_price = parseInt(old_price) + '';
        old_price_formated =
            old_price.replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' đ';

        arrOldPrice.push(old_price_formated);

        $('.old_value' + i).html(arrOldPrice[i]);

        product_price.on('change', function() {
            if ($(this).is(':checked')) {
                // Giá mới
                var val = $(this).val();

                val = parseInt(val) + '';
                val_formated = val.replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' đ';

                $('.value' + i).html(val_formated);
                // Giá cũ
                // Đang làm đến đấy Discount chưa cộng i vào nên bị lỗi
                discount = $('.discount' + i).val();
                old_price = (val * 100) / (100 - discount);
                old_price = parseInt(old_price) + '';
                old_price_formated =
                    old_price.replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' đ';
                $('.old_value' + i).html(old_price_formated);
            }
        });
    }

    var count_product = $('.product-item__price');

    var product_price;
    var option_length;
    // Lặp qua số lượng sp đổ giá ra
    for (let i = 0; i < count_product.length; i++) {
        $('.product_price' + i).on('click', function() {
            $('.product_id' + i).removeAttr('checked');
        });
    }
    option_length = $('.option_price');
    for (let j = 0; j < option_length.length; j++) {
        $('.option_price' + j).on('click', function() {
            // console.log($('.option_id' + j));
            $('.option_id' + j).attr('checked', 'true');
        });
    }
});