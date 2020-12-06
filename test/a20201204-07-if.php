<?php 
$age = isset($_GET['age']) ? intval($_GET['age']) : 0;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<!-- 與 html 鑲嵌的 if 條件判斷式寫法，很方便 -->
<?php if ($age < 18) { ?>
	<h1>Under 18!</h1>
<?php }  else { ?>
	<h1>Over 18!</h1>
<?php } ?>

<!-- 與上面的寫法一樣功能，似乎只是希望語感更直覺一點的寫法 -->
<?php if ($age < 18): ?>
	<h3>Under 18!</h3>
<?php else: ?>
	<h3>Over 18!</h3>
<?php endif ?>

</body>
</html>