<?php
require '../../global.php';
require '../../dao/comment.php';

extract($_REQUEST);


if (isset($rating_value) && isset($rating_content)) {

    $comment = $rating_content;
    $rate = $rating_value;
    $cmt_parent = 0;
    $cmt_date = date_format(date_create(), 'Y-m-d H:i:s');
    $user_id = $_SESSION['user']['user_id'];
    $product_id = $product_id_comment;
    try {
        comment_insert($comment, $rate, $cmt_parent, $cmt_date, $user_id, $product_id);




        $list_comment = comment_select_by_id_product($product_id);
        foreach ($list_comment as $cm) { ?>
            <li>
                <article class="uk-comment">
                    <header class="uk-comment-header">
                        <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                            <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./../content/img/blog/img-reviews-1.png" alt></div>
                            <div class="uk-width-expand@s">
                                <div>
                                    <?php for ($i = 0; $i < $cm['rate']; $i++) { ?>
                                        <span class="rating_icon">☆</span>
                                    <?php } ?>
                                </div>
                                <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                    <h4 class="uk-comment-title uk-margin-remove"><?= $cm['fullname'] ?></h4>
                                    <span class="uk-text-meta uk-margin-small-left"><?= $cm['cmt_date'] ?></span>

                                </div>
                                <div class="uk-comment-body">
                                    <p><?= $cm['comment'] ?></p>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </header>
                </article>

            </li>
        <?php } ?>
<?php
    } catch (Exception $exc) {
    }
}
?>