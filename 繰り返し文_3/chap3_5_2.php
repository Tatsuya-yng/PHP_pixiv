<?php
//九九らしく表示する

foreach (range(1,9) as $x){
    foreach(range(1,9) as $y){
        var_dump($x . "×". $y ."=".$x * $y);
    }
}