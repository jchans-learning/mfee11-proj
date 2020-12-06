<?php 

// 了解邏輯運算子的優先程度
// 運算子 (||) 和(&&) 的優先程度比 (=) 高

$a = 7 || 5;
$b = 0 || 5;

echo "\$a=$a, \$b=$b<br>";
var_dump($a);
echo "<br>";

echo "------------------<br>";

// 英文字的運算子 (and) 與 (or) 的優先 優先程度比 (=) 低

$a = 7 or 5;
$b = 0 or 5;
echo "\$a=$a, \$b=$b<br>";
var_dump($a);
echo "<br>";

echo "------------------<br>";

$a = 7 and 5;
$b = 0 and 5;
echo "\$a=$a, \$b=$b<br>";


 ?>