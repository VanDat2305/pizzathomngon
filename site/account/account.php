<?php

require_once "../../global.php";
require_once "../../dao/user.php";
require_once "../../dao/order.php";

extract($_REQUEST);

$VIEW_NAME = "account_ui.php";

require_once "../layout.php";
