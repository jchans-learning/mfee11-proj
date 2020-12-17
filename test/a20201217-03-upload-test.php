<?php
$output = [];

$upload_folder = __DIR__. '/../uploads';

if(!empty($_FILES)){
    $output['file'] = $_FILES;

    move_uploaded_file($_FILES['avatar']['tmp_name'], $upload_folder. '/'. $_FILES['avatar']['name']);
}

header('Content-Type: application/json');
echo json_encode($output, JSON_UNESCAPED_UNICODE);

// 筆記
//
// 還沒做前端，先用 POSTMAN 測試上傳檔案功能
//
// 要搬動檔案只有 move_uploaded_file() 可以用
// 參考資料： https://www.php.net/manual/en/function.move-uploaded-file.php
