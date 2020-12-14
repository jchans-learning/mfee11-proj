<?php
require __DIR__ . 'db-connect.php';

$output = [
    'success' = false,
    'code' => 0,
    'error' => '參數不足',
];

if (!isset($_POST['name']) or !isset($_POST['email'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

// TODO: 檢查欄位格式

$sql = "INSERT INTO `address_book`(
`name`, `email`, `mobile`, `birthday`, `address`, `created_at`
) VALUES (
    ?, ?, ?, ?, ?, NOW()
)
";
