<!doctype html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <pre>
        <?php

        // 設定 Array $ar1 內容
        $ar1 = [1, 3, 5, 7];

        // 將 Array $ar2 指定為 $ar1 ，與 JS 不同，在 php ，如此的指定方式，會使 $ar2 複製 $ar1 內容成為新的 Array
        $ar2 = $ar1;

        // 改變 $ar1 的內容為 [1, 100, 5, 7]
        $ar1[1] = 100;

        // 用 print_r() 印出 $ar2 與 $ar1 來比較兩者的異同， $ar1 改變了，但 $ar2 維持原狀
        print_r($ar2);
        print '<br>';
        print_r($ar1);
        ?>
    </pre>
</div>
</body>
</html>
