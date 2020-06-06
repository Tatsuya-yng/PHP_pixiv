<?php
//復習ドリル
//6歳未満なら幼児と表示するプログラムを作る

var_dump("年齢は？");
$age = trim(fgets(STDIN));
if($age < 6){
    var_dump("幼児");
}

var_dump("年齢は？");
$age = trim(fgets(STDIN));
if($age <= 5 || $age >= 65){
    var_dump("幼児と高齢者");
}
?>