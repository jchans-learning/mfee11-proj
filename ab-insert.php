<?php
if (!isset($_SESSION)) {
    session_start();
}

$pageName = 'ab-insert';
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<style>
    form small.error-msg {
        color: red;
    }
</style>

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

                    <form method="post" novalidate onsubmit="checkForm(); return false;">
                        <div class="form-group">
                            <label for="name">** name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <small class="form-text error-msg" style="display: none;"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">** email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <small class="form-text error-msg" style="display: none;"></small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" pattern="09\d{2}-?\d{3}-?\d{3}">
                        </div>
                        <div class="form-group">
                            <label for="birthday">birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                        </div>

                        <!--                        
                        <div class="form-group">
                            <label for="number">number</label>
                            <input type="number" class="form-control" id="number" name="number">
                        </div>
                        -->

                        <div class="form-group">
                            <label for="address">address</label>
                            <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">新增</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/parts/scripts.php'; ?>
<script>
    // document.querySelector('#name').style.borderColor = 'red'
    const name = document.querySelector('#name');
    const email = document.querySelector('#email');
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

    function checkForm() {
        name.style.borderColor = '#CCCCCC';
        name.closest('.form-group').querySelector('small').style.display = 'none';
        email.style.borderColor = '#CCCCCC';
        email.closest('.form-group').querySelector('small').style.display = 'none';

        if (name.value.length < 2) {
            name.style.borderColor = 'red';
            let small = name.closest('.form-group').querySelector('small')
            small.innerText = "請輸入正確的名字！";
            small.style.display = 'block';
        }
        if (!email_re.test(email.value)) {
            email.style.borderColor = 'red';
            let small = email.closest('.form-group').querySelector('small');
            small.innerText = "請輸入正確的 email ！";
            small.style.display = 'block';
        }
    }
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>