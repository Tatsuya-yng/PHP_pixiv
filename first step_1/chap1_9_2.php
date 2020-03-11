<?php
//データの入力を受け付ける
//入力した内容をそのまま表示するプログラム
//trim 前後の空白取れ


var_dump("入力せよ");
$msg = trim(fgets(STDIN));
var_dump("入力したのは" . $msg);
?>
