<?php
//関数を組み合わせて使ってみる
//昨日を別ファイルに分ける

function createMsg($name,$price){
    $msg = <<< EOM
{$name}様
ご注文を承りました。
合計{$price}円です。\n
EOM;
    echo $msg;
}

function getPrice($cnt){
    return 500 * $cnt;
}
?>