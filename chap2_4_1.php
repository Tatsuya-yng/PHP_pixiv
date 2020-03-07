<?php
//20歳未満ではないときにメッセージを表示する
//else文を追加してみる


var_dump("年齢は？");
$age = trim(fgets(STDIN));
if($age < 20){
    var_dump("未成年");

}else{
    var_dump("成人");
}
?>
