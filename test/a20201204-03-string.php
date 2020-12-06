<?php 
$name = 'David';

// 雙引號標示的字串內若包含變數，會顯示變數值
echo "Hello $name <br>";

// 單引號不顯示內含的變數的值
echo 'Hello $name <br>';

echo "Hello {$name}123 <br>";
echo "Hello ${name}123 <br>";

echo "abc\"def\nghi\'jkl\\ <br>";
echo 'abc\"def\nghi\'jkl\\ <br>';

 ?>