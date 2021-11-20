<?php
$array_url =  explode('/', $_SERVER['REQUEST_URI']);
?>
<nav id="sidebar" class="">
    <div class="sidebar-header text-center">
        <a href="" class="">
            <img src="<?= CONTENT_URL ?>img/logo.png" alt="logo" class="img-fluid logo">
        </a>
    </div>
    <ul class="list-unstyled components text-secondary">
        <li>
            <a href="<?= ADMIN_URL ?>dashboard" class="list <?= in_array("dashboard", $array_url) ? "active" : "" ?>">
                <span class="fas fa-home"></span><span>Trang chủ</span></a>
        </li>
        
        <li>
            <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i> Món ăn <i class="fas fa-angle-down"></i></a>
            <ul class="collapse list-unstyled" id="authmenu">
                <li>
                    <a href="<?= ADMIN_URL ?>category/" class="list <?= in_array("category", $array_url) ? "active" : "" ?>">
                        <span class="fas fa-folder-open"></span><span>Quản lý loại món</span></a>
                </li>
                <li>
                    <a href="<?= ADMIN_URL ?>products/" class="list <?= in_array("products", $array_url) ? "active" : "" ?>">
                        <span class="fas  fa-utensils"></span><span>Quản lý món ăn</span></a>
                </li>
                <li>
                    <a href="<?= ADMIN_URL ?>extra/" class="list <?= in_array("extra", $array_url) ? "active" : "" ?>">
                        <span class="fas  fa-utensils"></span><span>Quản lý topping</span></a>
                </li>
            </ul>
        </li>

        <li>
            <a href="<?= ADMIN_URL ?>sale/" class="list <?= in_array("sale", $array_url) ? "active" : "" ?>">
                <span class="fas fa-balance-scale-right"></span><span>Quản lý khuyến mãi</span></a>
        </li>
        <li>
            <a href="<?= ADMIN_URL ?>comment/" class="list <?= in_array("comment", $array_url) ? "active" : "" ?>">
                <span class="fas fa-comments"></span><span>Quản lý bình luận</span></a>
        </li>
        <li>
            <a href="<?= ADMIN_URL ?>invoice/" class="list <?= in_array("invoice", $array_url) ? "active" : "" ?>">
                <span class="fas fa-file-invoice-dollar"></span><span>Quản lý đơn hàng </span></a>
        </li>
        <li>
            <a href="<?= ADMIN_URL ?>post/" class="list <?= in_array("post", $array_url) ? "active" : "" ?>">
                <span class="fas fa-book-open"></span><span>Quản lý bài viết</span></a>
        </li>
        <li>
            <a href="<?= ADMIN_URL ?>users/" class="list <?= in_array("users", $array_url) ? "active" : "" ?>">
                <span class="fas fa-user-friends"></span><span>Quản lý thành viên</span></a>
        </li>
        <li>
            <a href="<?= ADMIN_URL ?>/" class="list <?= in_array("phanhoi", $array_url) ? "active" : "" ?>">
                <span class="fas fa-address-book"></span><span>Quản lý phản hồi</span></a>
        </li>
        <li>
            <a href="<?= ADMIN_URL ?>slider/" class="list <?= in_array("slider", $array_url) ? "active" : "" ?>">
                <span class="fas fa-images"></span><span>Quản lý banner</span></a>
        </li>
        <li>
            <a href="<?= ADMIN_URL ?>contact/" class="list <?= in_array("contact", $array_url) ? "active" : "" ?>">
                <span class="fas fa-chart-bar"></span><span>Quản lý liên hệ</span></a>
        </li>
        <li>
            <a href="<?= ADMIN_URL ?>chart/" class="list <?= in_array("chart", $array_url) ? "active" : "" ?>">
                <span class="fas fa-chart-bar"></span><span>Thống kê</span></a>
        </li>

    </ul>
</nav>