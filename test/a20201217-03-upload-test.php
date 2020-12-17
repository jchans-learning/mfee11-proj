<?php
$output = [];

if(!empty($_FILES)){
    $output['file'] = $_FILES;
}

header('Content-Type: application/json');
echo json_encode($output, JSON_UNESCAPED_UNICODE);
