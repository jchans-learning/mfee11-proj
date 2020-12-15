<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

// 在一些要求要有 admin 權限的開頭加上
// require __DIR__. '/is_admin.php' ;