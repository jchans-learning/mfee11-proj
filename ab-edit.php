<?php
require __DIR__ . '/db_connect.php';

if (!isset($_GET['sid'])) {
    header('Location: ab-list.php');
    exit;
}
$sid = intval($_GET['sid']);

$row = $pdo
    ->query("SELECT * FROM address_book WHERE sid=$sid ")
    ->fetch();

if (empty($row)) {
    header('Location: ab-list.php');
    exit;
}


$pageName = 'ab-edit';
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


            <div class="alert alert-danger" role="alert" id="info" style="display: none">錯誤</div>



            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">編輯資料</h5>

                    <form name="form1" novalidate onsubmit="checkForm(); return false;">
                        <!-- <form name="form1" method="post"> -->
                        <input type="hidden" name="sid" value="<?= $sid ?>">
                        <div class="form-group">
                            <label for="name">** name</label>
                            <input type="text" class="form-control" id="name" name="name" required value="<?= htmlentities($row['name']) ?>">
                            <small class="form-text error-msg" style="display: none;"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">** email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= htmlentities($row['email']) ?>">
                            <small class="form-text error-msg" style="display: none;"></small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" pattern="09\d{2}-?\d{3}-?\d{3}" value="<?= htmlentities($row['mobile']) ?>">
                        </div>
                        <div class="form-group">
                            <label for="birthday">birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" value="<?= htmlentities($row['birthday']) ?>">
                        </div>

                        <!--                        
                        <div class="form-group">
                            <label for="number">number</label>
                            <input type="number" class="form-control" id="number" name="number">
                        </div>
                        -->

                        <div class="form-group">
                            <label for="address">address</label>
                            <textarea class="form-control" name="address" id="address" cols="30" rows="3"><?= htmlentities($row['address']) ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">修改</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/parts/scripts.php'; ?>
<script>
    // document.querySelector('#name').style.borderColor = 'red'
    const info = document.querySelector('#info');
    const name = document.querySelector('#name');
    const email = document.querySelector('#email');
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

    function checkForm() {
        info.style.display = 'none';
        let isPass = true;

        name.style.borderColor = '#CCCCCC';
        name.closest('.form-group').querySelector('small').style.display = 'none';
        email.style.borderColor = '#CCCCCC';
        email.closest('.form-group').querySelector('small').style.display = 'none';

        if (name.value.length < 2) {
            isPass = false;
            name.style.borderColor = 'red';
            let small = name.closest('.form-group').querySelector('small')
            small.innerText = "請輸入正確的名字！";
            small.style.display = 'block';
        }
        // if (!email_re.test(email.value)) {
        //     isPass = false;
        //     email.style.borderColor = 'red';
        //     let small = email.closest('.form-group').querySelector('small');
        //     small.innerText = "請輸入正確的 email ！";
        //     small.style.display = 'block';
        // }

        if (isPass) {
            const fd = new FormData(document.form1);

            fetch('ab-edit-api.php', {
                    method: 'POST',
                    body: fd
                })
                .then(r => r.json())
                .then(obj => {
                    console.log(obj);
                    if (obj.success) {
                        info.classList.remove('alert-danger');
                        info.classList.add('alert-success');
                        info.innerHTML = '修改成功';
                    } else {
                        info.classList.remove('alert-success');
                        info.classList.add('alert-danger');
                        info.innerHTML = '修改失敗';
                    }
                    info.style.display = 'block';
                })
        }
    }
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>