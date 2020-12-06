<?php

// 用 rand() 函式產生指定的最大值與最小值之間，包含這兩個值，的隨機整數
// php.net 上的 rand() 函式文件
// https://www.php.net/manual/en/function.rand.php

for ($i=0; $i<10; $i++){
    echo rand(100, 999).'<br>';

    // 剛剛玩了一下，最小值設定負整數也可以
}

echo '------------------------<br>';

for ($i=0; $i<10; $i++){

    printf("%'.07d<br>", rand(1, 9000000));

    // 我自己查詢，以下這樣寫也可以，待確認差異
    // printf("%07d<br>", rand(1, 9000000));
}
