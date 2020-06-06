<?php
// !演算子を使ってfalseの時だけ実行する
// !is_numeric イズニューメリック関数　数値かではないという意味

var_dump("数値を入力せよ");
$msg = trim(fgets(STDIN));
if(!is_numeric($msg)){
    var_dump("数値ではない");
}
?>