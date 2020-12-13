<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- form 標籤裡的 action 設定，會在表格被 submit 後把表格送出的資料傳到指定的檔案 -->
<!-- 參考： https://www.w3schools.com/tags/att_form_action.asp -->
<form action="a20201207-03-form.php" name="form1" method="post">
    <input type="text" id="account" name="account" placeholder="帳號"><br>
    <input type="password" name="password" id="password" placeholder="密碼"><br>
    <br>
    <input type="submit">
</form>

</body>
</html>