<?php
//条件式を使って繰り返す
//while文　真である限り繰り返す
//賃金の残高がゼロになるまで繰り返す

$money = 30000;
while($money >= 0 ){
    var_dump($money);
    $money = $money -5080;
}
?>