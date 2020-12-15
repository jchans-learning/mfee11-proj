<?php
if (!isset($_SESSION)) {
    session_start();
}

$pageName = 'index';
?>


<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>

<?php include __DIR__. '/parts/scripts.php'; ?>

<?php include __DIR__. '/parts/html-foot.php'; ?>
