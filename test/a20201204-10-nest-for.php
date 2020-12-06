<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <style>
        table {
            border-spacing: 0px;
        }
        td {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <?php
    // 用 for 迴圈來控制表格的背景的色碼數值
    // %x 用來把 for 迴圈產生的數字 $i 與 $k 轉換成 16 進位數字
    // sprintf() 用來傳回格式化的字串
    // https://www.php.net/manual/en/function.sprintf
    ?>

	<table>
        <?php for ($i=1; $i<16; $i++): ?>
		<tr>
            <?php for ($k=1; $k<16; $k++): ?>
            <!-- 這裡用 sprintf() 是因為已經是用 echo 的縮寫印出字串，所以只需要獲得 for 迴圈產生的值 -->
			<td style="background-color: #<?= sprintf("%x%x", $i, $k) ?>0;"> </td>
            <?php endfor; ?>
		</tr>
        <?php endfor; ?>
	</table>
</body>
</html>