<?php require "../../global.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test CKEditor</title>

</head>

<body>
    <h1>Thêm nội dung</h1>
    <form action="#" method="post">
        <textarea name="content" id="content"></textarea>
        <input type="submit" value="Thêm nội  dung">

    </form>
    <br>
    <hr>
    <?php

    if (isset($_POST['content'])) {
        $content = $_POST['content'];
        var_dump($content);
        die;
    }


    ?>

    <script src="<?= CONTENT_URL ?>ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content');
    </script>
</body>

</html>