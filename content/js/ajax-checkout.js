// Coupon discount
$(document).ready(function() {
    $('#btn_coupon_discount').on('click', function() {
        var coupon_value = $('#coupon_discount').val();

        // var request = 'status';
        $.post(
            '../../site/cart/apply_coupon.php', {
                coupon_value: coupon_value,
            },
            function(response) {
                var status = response.slice(0, 1);
                var message = response.slice(1);
                console.log(status);
                console.log(message);
                $('#coupon-message').html(message);
            }
        );
    });
});