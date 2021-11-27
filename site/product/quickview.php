<?php

require '../../global.php';
require '../../dao/product.php';

extract($_REQUEST);
$gallery_image = gallery_select_by_pro_id($product_id);

// echo "<pre>";
// var_dump($galary_image);
// die;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= CONTENT_URL ?>css/uikit.min.css">
</head>

<body style="height:100vh">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="clsActivated: uk-transition-active; center: true" height="100vh">
        <div class="uk-slider-container">
            <ul class="uk-slider-items uk-grid">
                <?php foreach ($gallery_image as $g_i) { ?>
                    <li class="uk-width-3-4">
                        <div class="uk-panel">
                            <img src="<?= CONTENT_URL ?>img/products/<?= $g_i['gallery_image_name'] ?>" alt="" width="100%" height="100vh">
                        </div>
                    </li>
                <?php } ?>
            </ul>

        </div>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>





    <script src="<?= CONTENT_URL ?>js/uikit.min.js"></script>
    <script src="<?= CONTENT_URL ?>js/uikit-icons.min.js"></script>
    <script src="<?= CONTENT_URL ?>js/fontawesome.all.min.js"></script>
</body>

</html>