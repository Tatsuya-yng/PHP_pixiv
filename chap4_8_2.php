<?php
//復習ドリル
//代金がマイナスの時は０を返す

function getPrice($cnt){
    if($cnt < 0){
        return 0;
    }
    return 500 * $cnt;
}
var_dump(getPrice(-3));
?>
