<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Урок 4</title>
</head>
<body>
<?php
require_once 'functions.php';
?>
    <h1>Фотогалерея</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Загрузить">
    </form>
    <?php
    if (isset($_FILES['file'])) {
        upload_file($_FILES['file']);
    }
    $current_page = mb_substr($_SERVER['REQUEST_URI'], 0, 29);
    $open_dir = opendir('small_img');
    if ($open_dir!= false) {
        while (false !== ($file = readdir($open_dir))) {
            if ($file != '.' && $file != '..' && $file != '.DS_Store') {
                $full_size = mb_substr($file, 6);
                echo "<a href=\"$current_page/img/$full_size\" target=\"_blank\"><img src=\"small_img/$file\"></a>";
            }
        }
        echo "</div>";
        closedir($open_dir);
    }
    ?>
</body>
</html>