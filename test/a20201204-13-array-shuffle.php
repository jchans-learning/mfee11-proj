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
        // 這行的寫法比較像是「說明 $ar 是個 Array 」
        // 這樣寫的語感蠻接近 JS
        // 其實 php 不用寫這行也可以進行接下來的 for 迴圈
        $ar = [];

        // 從整數 $i = 1 到 $i < 42 為止的範圍之內， $i 依次遞增 1 (這裡的 $i++ 代表先傳回 $i ，然後 $a 遞增 1 )
        // 為每個 $i
        // 執行一次大括號之內的程式 ar[] = $i;
        for ($i = 1; $i < 42; $i++) {
            $ar[] = $i;
        }

        // 用 implode() 函式依序印出 $ar 裡的每個內容，以逗號 (,) 來分隔每個內容
        echo implode(',', $ar);
        echo "\n";

        // 用 shuffle() 函式，亂數重排 $ar 內的內容的順序
        // 用 implode() 函式依序印出 $ar 裡的每個內容，以逗號 (,) 來分隔每個內容，用來確認亂數重排之後的 Array 容
        shuffle($ar);
        echo implode(',', $ar);

        ?>
    </pre>
</div>
</body>
</html>
