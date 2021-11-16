<?php
require '../../global.php';
require '../../dao/user.php';

if (exist_param("form_insert")) {
    if (isset($_GET['username'])) {
        # code...
        $result = user_exist_name($_GET['username']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
    if (isset($_GET['email'])) {
        # code...
        $result = user_exist_email($_GET['email']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
}

if (exist_param("form_edit")) {
    if (isset($_GET['email'])) {
        $result = user_exist_email_id($_GET['id'],$_GET['email']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
}