<?php

include 'db_key.php';

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];

// 這行用 PDO 連結資料庫，指定為變數 $pdo ，讓其他 php 檔 include 後可以用
$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);

if (!isset($_SESSION)) {
    session_start();
}

// 筆記
//
// 這個檔案的目的是連結伺服器。利用 PHP 的 PDO 功能。
// 參考資料：
// 關於上面 $pdo_options 用到的東西：
// https://www.php.net/manual/en/pdo.constants.php
// https://www.php.net/manual/en/ref.pdo-mysql.php
//
// PHP Data Objects (PDO) 簡易使用說明(1)：
// https://pjchender.blogspot.com/2015/08/php-data-objects-pdo.html
//
// 以下註解掉的部分存在另一個檔案裡，用 include 的方式去引用，並且放入 .gitignore
/*
$db_host = 'localhost';
$db_name = '資料庫名稱';
$db_user = '資料庫要設定別的帳號';
$db_pass = '登入資料庫用的密碼';
 */