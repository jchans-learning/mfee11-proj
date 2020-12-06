<?php
// Query string
// 在網頁中獲得某個已定義的變數的值
// 在瀏覽器的網址列中可以指定 $a 與 $b 的值如下
// http://localhost/mfee11-proj/test/a20201204-06-get.php?a=10&b=20

// 指定 $a 的值為：如果 $_GET['a'] 有值，則執行 $_GET['a'] ，如果 $a 是 false 則傳回空字串
$a = $_GET['a'] ?? '';
echo "$a <br>";

// 指定 $b 的值為：如果 $_GET['b'] 有值，則傳回 $_GET['b'] 的整數值（ int value ） ，如果是 false 則傳回 0
$b = isset($_GET['b']) ? intval($_GET['b']) : 0;
echo $b;

// 參考：
// intval()
// https://www.php.net/manual/en/function.intval.php

 ?>