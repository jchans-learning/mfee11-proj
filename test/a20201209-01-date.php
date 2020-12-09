<?php
date_default_timezone_set('Asia/Taipei');

echo date("Y-m-d H:i:s");
echo '<br>';

echo time();
echo '<br>';

echo date("Y-m-d H:i:s", time()-7*24*60*60);

// date() 與 time() 兩個方法會搭配使用。