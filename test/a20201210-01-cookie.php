<?php
// 設定 cookie ，但是第一次打開的時候網頁會讀不到，重新整理之後 body 那邊的 cookie 值可以順利印出
setcookie("mycookie", "2");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?= $_COOKIE['mycookie'] ?>

</body>
</html>
