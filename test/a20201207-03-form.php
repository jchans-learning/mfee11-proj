<?php

// json_encode()
// 是用來把一些值返回為 JSON 型式
// 參考： https://www.php.net/manual/en/function.json-encode.php
//
// echo json_encode($_POST);

// json_encode 會把要處理的中文處理成 unicode ，加上 JSON_UNESCAPED_UNICODE 可以使 json_encode() 不將中文轉為 unicode
echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

