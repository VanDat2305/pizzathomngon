// comment
$(document).ready(function() {
    $('#btn_comment').on('click', function(e) {
        e.preventDefault();
        var rating_value = $('.rating_value:checked').val();
        var rating_content = $('#rating_content').val();

        if (rating_content == '') {
            $('.rating_message').html('Vui lòng không để trống!');
        } else {
            $.post(
                '../../site/product/ajax_comment.php', {
                    rating_value: rating_value,
                    rating_content: rating_content,
                }
                // function(response) {

                //     console.log(response);
                // }
            );
        }
        console.log(rating_value);
        console.log(rating_content);
    });
});