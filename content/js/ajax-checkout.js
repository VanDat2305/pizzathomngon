// Coupon discount
$(document).ready(function() {
    $('#btn_coupon_discount').on('click', function() {
        var coupon_value = $('#coupon_discount').val();
        var checkout_total = $('#checkout_total').val();
        $.post(
            '../../site/cart/apply_coupon.php', {
                coupon_value: coupon_value,
                checkout_total: checkout_total,
            },
            function(response) {
                if (response != '') {
                    coupon_price = formatPrice(response);
                    // $('#coupon-message').html(message);
                    $('#card_coupon_applied_code').html(coupon_value);
                    $('#card_coupon_applied_money').html(coupon_price);
                    $('.card_coupon_applied').css('display', 'block');
                } else {
                    $('.card_coupon_applied').css('display', 'none');
                }
            }
        );
    });
    $('.btn_coupon_value').on('click', function() {
        var coupon_code = $(this).val();
        $('#coupon_discount').val(coupon_code);
    });

    function formatPrice(param) {
        param = parseInt(param);
        return param.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' đ';
    }
});