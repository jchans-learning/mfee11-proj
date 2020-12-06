<?php 
$name = 'Bill';

// 三種 if 判斷式的寫法
if(isset($name)){
	echo "$name <br>";
} else {
	echo "noname <br>";
}

echo isset($name) ? $name : 'noname';
echo "<br>";

echo $name ?? 'noname'; // php 7
echo "<br>";

// 參考：
// isset()
// 用來確認變數是不是有被宣告，是否不同於 NUll
// https://www.php.net/manual/en/function.isset.php
 ?>