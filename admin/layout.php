<?php require_once "../../global.php";
check_role();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Bootstrap Simple Admin Template</title>
    <!-- bootstrap  -->
    <link href="<?= CONTENT_URL ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- font awesome -->
    <link href="<?= CONTENT_URL ?>css/all.min.css" rel="stylesheet" type="text/css">
    <!-- datatable -->
    <link href="<?= CONTENT_URL ?>css/datatables.min.css" rel="stylesheet" type="text/css">

    <!-- custom css -->
    <link href="<?= CONTENT_URL ?>css/dashboard.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper">
        <?php require_once "menu.php" ?>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown mr-3">
                            <div class="nav-dropdown">
                                <a href="<?= ADMIN_URL ?>invoice/" id="noti_number" class="nav-item nav-link dropdown-toggle text-secondary"  aria-expanded="true">
                                    <i class="far fa-bell"></i> <strong class="noti_number">0</strong>
                                </a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user mr-2"></i> <span>Admin</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <div class="dropdown-divider"></div>
                                        <li><a href="<?= SITE_URL ?>account/?btn_logout" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>
                                                Đăng xuất</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                <?php include $VIEW_NAME ?>
            </div>
        </div>
    </div>
    <script src="<?= CONTENT_URL ?>js/jquery-3.6.0.min.js"></script>
    <script src="<?= CONTENT_URL ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?= CONTENT_URL ?>js/datatables.min.js"></script>
    <script src="<?= CONTENT_URL ?>js/initiate-datatables.js"></script>
    <script src="<?= CONTENT_URL ?>js/jquery.validate.js"></script>
    <script src="<?= CONTENT_URL ?>ckeditor/ckeditor.js"></script>
    <script src="<?= CONTENT_URL ?>js/dashboard.js"></script>
    <script src="<?= CONTENT_URL ?>js/validate_admin.js"></script>
    <script src="<?= CONTENT_URL ?>js/multi_option.js"></script>
    <script src="<?= CONTENT_URL ?>js/Chart.min.js"></script>
    <script src="<?= CONTENT_URL ?>js/ajax.js"></script>
</body>

</html>