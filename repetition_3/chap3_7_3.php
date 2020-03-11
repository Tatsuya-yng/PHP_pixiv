<?php
//同じ対戦組み合わせを省くには？
// array_shift 配列の先頭の要素を削除

$team = ["A","B","C","D","E"];
$opps = ["A","B","C","D","E"];
foreach ($team as $t1){
    array_shift($opps);
    foreach($opps as $t2){
        var_dump($t1 . "vs" .$t2);
    }
}