<?php
//戻り値を返す関数を作る
//関数の実行結果の値を返すreturn文
//個数から代金を求める関数を定義する

function getPrice($cnt){
    return 500 * $cnt;
}
var_dump(getPrice(6));
?>