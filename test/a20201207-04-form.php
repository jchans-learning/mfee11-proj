<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name="form1" onsubmit="checkForm(); return false;">
    <input type="text" id="account" name="account" placeholder="帳號"><br>
    <input type="password" name="password" id="password" placeholder="密碼"><br>
    <br>
    <input type="submit">
</form>

<div id="info"></div>

<script>
    function checkForm() {
        const fd = new FormData(document.form1);

        // fetch() 的使用
        // 參考： https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch
        fetch('a20201207-03-form.php', {
            method: 'POST', 
            body: fd
        })
        // fetch 回來的東西不是真的 JSON 物件，所以用 json() 方法把資料轉換為 JSON
        .then(function (r) { return r.json()})
        .then(obj=>{
            console.log(obj);
            document.querySelector('#info').innerHTML = obj.account + '<br>' + obj.password;
        })

        console.log('aaa');
    }
</script>

</body>
</html>