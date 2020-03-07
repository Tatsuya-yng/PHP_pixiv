<?php
//データの入力を受け付ける
//入力した内容をそのまま表示するプログラム
//fgets 取得しろ　　　(STDIN)標準入力

var_dump("入力せよ");
$msg = fgets(STDIN);
var_dump($msg);
?>