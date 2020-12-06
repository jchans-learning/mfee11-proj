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
<?php

    // 設定 $ar1 內容
    $ar1 = [
        'name' => 'flora',
        'age' => 23,
        // 沒有設定索引的部分會依照順序自動產生索引，從 0 開始
        100,
        // 可以試試看再寫一個沒有設定索引的內容，例如 10 ，它索引應該會自動產生為 1
        // 10,
    ];

    // 把 Array $ar1 印出來看看。用 print_r() 函式來印出陣列的內容
    print_r($ar1);

    echo '<br>';

    // 設定 索引數字[9] 指向整數 99
    // 然後設定 索引數字[3] 指向整數 33
    $ar1[9] = 99;
    $ar1[3] = 33;

    // 把 Array $ar1 印出來看看。用 print_r() 函式來印出陣列的內容
    // 印成一行有點難閱讀，在底下我用 pre 標籤把內容分行印出以便閱讀
    print_r($ar1);

    echo '<br>';

    // 對每個 Array $ar1 裡的，當 $k 指向 $v 時，印出 "$k : $v 換行"
    foreach ($ar1 as $k => $v){
        echo "$k : $v <br>";
    }

    echo '---------------------------------------------------<br>';
    // 這條線以下是我自己寫的類似筆記的感覺的東西
?>


<pre>
<?php
// 用 <pre> 這個 tag 來讓 Array 印出來易讀一些
// 在這裡可以看到， php 裡的 Array 的 Index 數字預設是照指定發生的順序排序，而非照 Index 數字大小排序。
print_r($ar1);
?>
</pre>

</body>
</html>