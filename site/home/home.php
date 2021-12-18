    <?php require "layout/banner.php"; ?>
    <?php require "layout/about.php"; ?>
    <?php require "layout/special.php"; ?>

    <?php
    if (!isset($_SESSION['user'])) {
        require "layout/form_subscribe.php";
    }

    ?>
    <?php require "layout/blog.php"; ?>
    <?php require "layout/instagram.php"; ?>