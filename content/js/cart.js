// Xử lý ajax add to cart trang show nhiều sp
$('.add-to-cart').click(function(e) {
    e.preventDefault();
    // Lấy id_option
    var box_option_id = $(this).parent();
    var option_id = box_option_id.children('.option_ajax:checked').val();

    // Lấy id extra (topping)

    var extra_id = box_option_id
        .parent()
        .parent()
        .children('.product-item__intro')
        .children('.product-item__active')
        .children('.row')
        .children('label')
        .children('input');
    // console.dir(extra_id);
    var arrExtra_id = [];
    for (let i = 0; i < extra_id.length; i++) {
        let element = extra_id[i];
        // Lấy những thằng nào được checked
        if (element.checked == true) {
            arrExtra_id.push(Number(element.value));
        }
    }
    // Gửi dữ liệu
    $.post(
        '../../site/cart/add_to_cart.php', {
            option_id: option_id,
            extra_id: arrExtra_id,
        }
        //   function (response) {
        //     // console.log(response) {);
        //     var giohang = $("#count_cart");
        //     giohang.text(response);
        //   }
    );
});

// Xử lý ajax add to cart trang chi tiết sp

$('#add-to-cart_detail').click(function(e) {
    e.preventDefault();

    var option_id = $('.option_ajax:checked').val();
    var extra_id = $('.extra_id');

    var arrExtra_id = [];
    var detail_quantity = $('.detail_quantity').val();
    for (let i = 0; i < extra_id.length; i++) {
        let element = extra_id[i];

        // Lấy những thằng nào được checked
        if (element.checked == true) {
            arrExtra_id.push(Number(element.value));
        }
    }

    // Gửi dữ liệu
    $.post(
        '../../site/cart/add_to_cart.php', {
            option_id: option_id,
            extra_id: arrExtra_id,
            detail_quantity: detail_quantity,
        }
        //   function (response) {
        //     // console.log(response) {);
        //     var giohang = $("#count_cart");
        //     giohang.text(response);
        //   }
    );
});

//  XỬ lý trang giỏ hàng
$('.quantity').on('change', function(e) {
    e.preventDefault();
    var quantity = $(this).val();
    var counter = $(this).parent();
    var cart_option_price = counter[0].nextElementSibling.value;
    var cart_option_id = counter[0].nextElementSibling.nextElementSibling.value;

    var total_unit = quantity * cart_option_price;

    var total_unitElement = counter
        .parent()
        .parent()
        .parent()
        .parent()
        .children('td')
        .children('.total_unit');

    var total_unit_formated = formatPrice(total_unit);

    total_unitElement.html(total_unit_formated);
    loadTotalMoney();

    $.post('../../site/cart/add_to_cart.php', {
        cart_option_id: cart_option_id,
        cart_quantity: quantity,
    });
});

// Xóa từng sp
$('.remove_cart_unit').click(function(e) {
    var remove_cart_unit = $(this).val();
    var tr = $(this).parent().parent();
    var tbody = tr.parent();

    tr.remove();
    var cart_empty = $('#cart_empty');

    loadTotalMoney();

    if (tbody[0].childElementCount == 0) {
        var cart_empty = cart_empty.css('display', 'block');
        $('#load_cart').html(cart_empty);
    }
    // Gửi dữ liệu
    $.post('../../site/cart/add_to_cart.php', {
        option_remove_id: remove_cart_unit,
    });
});
// Xóa hết sạch giỏ hàng

$('#clear_cart').click(function(e) {
    var tr = $(this)
        .parent()
        .parent()
        .children('table')
        .children('tbody')
        .children('tr');

    var tbody = tr.parent();
    tr.remove();

    var cart_empty = $('#cart_empty');

    loadTotalMoney();

    if (tbody[0].childElementCount == 0) {
        var cart_empty = cart_empty.css('display', 'block');
        $('#load_cart').html(cart_empty);
    }
    $.post('../../site/cart/add_to_cart.php', {
        clear_cart: 1,
    });
});

// =========================Format giá tiền
function formatPrice(param) {
    param = parseInt(param);
    return param.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' đ';
}

// Load total khi có sự kiện thay đổi
function loadTotalMoney() {
    var totalElement = $('.cart_option_price');
    var quantity = $('.quantity');
    var total_value = 0;
    for (let i = 0; i < totalElement.length; i++) {
        let value = Number(totalElement[i].value) * Number(quantity[i].value);

        total_value += value;
    }
    // Phải là string mới replace được

    var total_value_formated = formatPrice(total_value);

    $('#total_money_cart').html(total_value_formated);

    var tax = 0.02 * total_value;
    var tax_formated = formatPrice(tax);
    $('#cart_tax').html(tax_formated);

    var finished_total = total_value + tax;
    var finished_total_formated = formatPrice(finished_total);
    $('#finished_total').html(finished_total_formated);
}
loadTotalMoney();