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
<div>
    <pre>
        <?php
        // php.net 上對於 Array 的文件
        // https://www.php.net/manual/en/language.types.array.php
        //
        // 陣列在 PHP 裡是一種有序的 map 。一個 map 是一種型別將 value 與 key 關聯起來。

        // 索引式陣列
        // $ar1 = array(); 是用 array() 函式來定義陣列，陣列中的 value 用逗號 (,) 分隔
        // $ar2 = []; 是一種簡寫，可用來代替 array() ，在 [] 中輸入陣列中的 value 用逗號 (,) 分隔
        // 沒有指定 key ，預設的 key 是從 0 開始，依序遞增的整數數字。
        $ar1 = array(2, 4, 6, 8);
        $ar2 = [2, 4, 6, 8];

        // 關聯式陣列
        // 可以指定字串作為 key
        $ar3 = array(
            'name' => 'David',
            'age' => 25,
            100,
        );
        $ar4 = [
            'name' => 'David',
            'age' => 25,
        ];

        print_r($ar1);
        echo '<br>';
        var_dump($ar2);
        echo '<br>';
        print_r($ar3);
        echo '<br>';
        var_dump($ar4);

        ?>
    </pre>
</div>
</body>
</html>
