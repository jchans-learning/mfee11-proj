<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <!--用 for 迴圈做 99乘法表-->
	<table border="1">
        <!--產生 i = 1~9 ，共 9 個 row -->
        <?php for ($i=1; $i<10; $i++): ?>
		<tr>
            <!--在每個 row 裡產生 k = 1~9 ，共 9 個 data 方格（td）-->
            <?php for ($k=1; $k<10; $k++): ?>
			<td><?= $i*$k ?></td>
            <?php endfor; ?>
		</tr>
        <?php endfor; ?>
	</table>
</body>
</html>