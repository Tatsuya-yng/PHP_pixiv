<?php
//総当たり戦の表を作ろう
//単純に全ての組み合わせを並べる
// as　として

$team = ["A","B","C","D","E"];
foreach($team as $t1){
    foreach($team as $t2){
        var_dump($t1 . "vs" . $t2);
    }
}
?>

