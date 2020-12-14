<?php
if (!isset($_SESSION)) {
    session_start();
}

$pageName = 'ab-insert';

if (isset($_POST['account']) and isset($_POST['password'])) {
    if ($_POST['account'] === 'shin' and $_POST['password'] === '1234') {
        // 可以登入
        $_SESSION['admin'] = 'shin';
    } else {
        $errorMsg = '帳號或密碼錯誤';
    }
}
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <?php if (isset($errorMsg)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errorMsg ?>
                </div>
            <?php endif ?>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">新增資料</h5>

                    <form method="post">
                        <div class="form-group">
                            <label for="account">Account</label>
                            <input type="text" class="form-control" id="account" name="account">
                        </div>
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                        </div>
                        <div class="form-group">
                            <label for="birthday">birthday</label>
                            <input type="text" class="form-control" id="birthday" name="birthday">
                        </div>
                        <div class="form-group">
                            <label for="address">address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/parts/scripts.php'; ?>
<?php include __DIR__ . '/parts/html-foot.php'; ?>