<?php
//ヒアドキュメントを使う
//ヒアドキュメントで長文の文字列を作る
//任意の文字列を定型文に埋め込む
//ヒアドキュメント⬇️
//    $msg = <<< EOM
//{$name}様
//ご注文を承りました。
//合計{$price}円です。\n
//EOM;

function createMsg($name,$price){
    $msg = <<< EOM
{$name}様
ご注文を承りました。
合計{$price}円です。\n
EOM;
    echo $msg;
}
createMsg("三浦", 3000);
?>
