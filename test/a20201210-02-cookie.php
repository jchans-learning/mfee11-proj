<?php
// 上一個例子，第一次給 cookie 的時候，網頁會讀不到 cookie 的值
// 用 $myc 變數的值來代替 cookie 的值被印出
// 用一個 if 判斷式來確認 cookie 'mycookie' 的存在，如果不存在就給 $myc 一個值
//
if (isset($_COOKIE['mycookie'])) {
    $myc = $_COOKIE['mycookie'] + 1;
} else {
    $myc = 1;
}
setcookie("mycookie", $myc);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $myc ?>
</body>

</html>