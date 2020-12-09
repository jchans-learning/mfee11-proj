<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<pre>
<?php
print_r($_POST);
?>
</pre>

<form name="form1" action="" method="post">
    <input type="text" name="account" id="account" placeholder="帳號"><br>
    <input type="password" name="password" id="password" placeholder="密碼">
    <button type="button" onclick="changeType()">eye</button>
    <br>
    <input type="submit" name="" id="">
</form>

<script>
    const password = document.form1.password;
    function changeType() {
        const t = password.getAttribute('type');
        if (t==='password'){
            password.setAttribute('type', 'text');
        } else {
            password.setAttribute('type', 'password');
        }
    }

</script>

</body>
</html>