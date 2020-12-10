<?php
// 設定時區為台北
date_default_timezone_set('Asia/Taipei');

// date() 用目前設定的時區，傳回 "Y-m-d H:i:s" 時間格式
echo date("Y-m-d H:i:s");
echo '<br>';

// time() ，回傳的數字是 Unix 時間
// 「UNIX時間，或稱POSIX時間是UNIX或類UNIX系統使用的時間表示方式：
// 從UTC1970年1月1日0時0分0秒起至現在的總秒數，不考慮閏秒」
// https://en.wikipedia.org/wiki/Unix_time
echo time();
echo '<br>';

// 對 date() 的時間做運算
// time() 得到現在的 Unix timestamp ，減去 7 天的總秒數，用 "Y-m-d H:i:s" 格式表示
echo date("Y-m-d H:i:s", time()-7*24*60*60);
echo '<br>';

// 參考
// https://www.php.net/manual/en/function.date.php
// https://www.php.net/manual/en/function.time.php

