<?php

// 以下註解掉的部分存在另一個檔案裡
/*
$db_host = 'localhost';
$db_name = 'mfee11c';  // 資料庫名稱
$db_user = '存放在另一個檔案另一個檔案裡';
$db_pass = '存放在另一個檔案另一個檔案裡';
 */

include 'db_key.php';

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
