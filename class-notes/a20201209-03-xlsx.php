<?php

// 範例取自
// https://phpspreadsheet.readthedocs.io/en/latest/

require 'vendor/autoload.php';

// 這個類別的目的是做一個試算表
// 然後寫入一個試算表
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');

// 待研究：
// 可以自動產生說明文件的轉換軟體與相應的註解寫法？
