<?php
//繰り返し文を２つ組み合わせて九九の表を作る
//九九の計算　

foreach(range(1,9) as $x){
    foreach(range(1,9) as $y){
        var_dump($x * $y);

    }
}