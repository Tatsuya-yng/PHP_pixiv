<?php
//同じチーム同士の対戦を除く
// != 等しくない

$team = ["A","B", "C","D","E"];
$opps = ["A","B", "C","D","E"];
foreach($team as $t1){
    foreach($opps as $t2){
        if($t1 != $t2){
            var_dump($t1 . "vs" .$t2);
        } 
    }
}
?>