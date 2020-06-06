<?php
//20歳未満だったらメッセージを表示する
//数値が20歳未満だったら未成年と表示する


var_dump("年齢は？");
$age = trim(fgets (STDIN));
if($age < 20){
    var_dump("未成年");
}
?>
