// Coupon discount
$(document).ready(function() {
    $('#btn_coupon_discount').on('click', function() {
        var coupon_value = $('#coupon_discount').val();
        var checkout_total = $('#checkout_total').val();
        var checkout_tax = $('#checkout_tax').val();

        $.post(
            '../../site/cart/apply_coupon.php', {
                coupon_value: coupon_value,
                checkout_total: checkout_total,
            },
            function(response) {
                if (response != '') {
                    // HIển thị thông báo
                    if (response == '0') {
                        $('#coupon_discount_message').html(
                            'Chưa đạt giá trị đơn hàng tối thiểu!'
                        );
                    } else {
                        var coupon_price = response;
                        var coupon_price_formated = formatPrice(coupon_price);
                        var final_total =
                            Number(checkout_total) +
                            Number(checkout_tax) -
                            Number(coupon_price);
                        $('#card_coupon_applied_code').html(coupon_value);
                        $('#card_coupon_applied_money').html(
                            coupon_price_formated
                        );
                        $('.card_coupon_applied').css('display', 'block');

                        var final_total_formated = formatPrice(final_total);

                        $('#final_total').html(final_total_formated);

                        // Cho số tiền được giảm giá vào input hidden
                        $('#discount_price_value').val(coupon_price);
                    }
                } else {
                    $('#coupon_discount_message').html(
                        'Vui lòng nhập mã giảm giá!'
                    );
                    $('.card_coupon_applied').css('display', 'none');
                }
                console.log(response);
            }
        );
    });
    $('.btn_coupon_value').on('click', function() {
        var coupon_code = $(this).val();
        $('#coupon_discount').val(coupon_code);

        $('#card_coupon_code').val(coupon_code);
    });

    function formatPrice(param) {
        param = parseInt(param);
        return param.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' đ';
    }
});