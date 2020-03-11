<?php
//配列のデータを繰り返し文で表示する
//月曜〜金曜日まで表示する
//foreach文は1ずつ入れる間

$wdays = ["月","火","水","木","金"];
foreach ($wdays as $wday){
    var_dump($wday . "曜日");

}
?>
