<?php

// 類別， Class ，物件的規格或藍圖
class MyClass {
    // var, public, private 等稱為屬性修飾字， var 現在較少用
    // 與 JS 比較， JS 不需要宣告變數屬性，其他物件導向程式語言都需要宣告
    // 資訊封裝， JS 沒有
    var $name;
    public $mobile;
    private $sno = 'secret';
    // protected

    public function __construct($name='noname'){
        $this->name = $name;
    }

    function myMethod1(){

    }
}

$a = new MyClass(); // 實體，建立物件實體
echo "$a->name";
echo '<br>';

$b = new MyClass('david');
echo "$b->name <br>";

$c = new MyClass('ZhiJie');
