<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
print_r($_POST);
?>

<form action="" name="form1" method="post">
    <input type="text" id="account" name="account" placeholder="帳號"><br>
    <input type="password" name="password" id="password" placeholder="密碼"><br>

    <!-- 按下按鈕 eye 的時候，觸發 changType() 函式 -->
    <button type="button" onclick="changeType()">eye</button>
    <br>
    <input type="submit">
</form>

<script>

    // 定義常數 password 為從 HTML文件裡取得 form1 中的 password
    const password = document.form1.password;

    // 定義 changeType() 函式 
    function changeType() {

        // 定義常數 t 為從常數 password 取得它的 type
        const t = password.getAttribute('type');

        // 如果 t 這個類型就是 password 這個類型的時候（在 HTML 裡的 input 指定的類型是用字串 "password" 來表示）
        if (t==='password') {

            // 把 password 的類型設定為 'text'
            password.setAttribute('type', 'text');
        } else {

            // 把 password 的類型設定為 'password'
            password.setAttribute('type', 'password');
        }
    }


</script>

</body>
</html>